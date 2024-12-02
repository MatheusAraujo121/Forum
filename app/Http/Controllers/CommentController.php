<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Topic;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('topic')->get();
        return view('comments.listComments', compact('comments'));
    }

    public function create()
    {
        $topics = Topic::all();
        return view('comments.createComment', compact('topics'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'topic_id' => 'required|exists:topics,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        if ($request->hasFile('image')) {
            // Salva a imagem no diretório 'images/comments' e obtém o caminho
            $imagePath = $request->file('image')->store('images/comments', 'public');
            $validated['image_path'] = $imagePath;
        }


        Comment::create($validated);
        return redirect()->route('viewComment')->with('message', 'Comentário criado com sucesso!');
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        $topics = Topic::all();
        return view('comments.editComment', compact('comment', 'topics'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'topic_id' => 'required|exists:topics,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $comment = Comment::findOrFail($id);
       
        if ($request->hasFile('image')) {
            // Apaga a imagem antiga se houver
            if ($comment->image_path) {
                \Storage::delete('public/' . $comment->image_path);
            }
    
            // Salva a nova imagem
            $imagePath = $request->file('image')->store('images/comments', 'public');
            $validated['image_path'] = $imagePath;
        }

        $comment->update($validated);
        

        return redirect()->route('viewComment')->with('message', 'Comentário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->route('viewComment')->with('message', 'Comentário excluído com sucesso!');
    }
}
