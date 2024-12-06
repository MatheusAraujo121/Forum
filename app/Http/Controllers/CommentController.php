<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Topic;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('post')->get();
        return view('comments.listComments', compact('comments'));
    }

    public function create($id)
    {
        $topic = Topic::findOrFail($id);
        return view('comments.createComment', compact('topic')); 
    }

    public function store(Request $request)
    {
        $userId = Auth::id();

        $request->validate([
            'content' => 'required|string',
            'topic_id' => 'required|exists:topics,id',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $imagePath = $file->storeAs('uploads/comments', $fileName);
        }

        $comment = Comment::create([
            'content' => $request->content,
            'topic_id' => $request->topic_id,
        ]);

        $comment->post()->create([
            'user_id' => $userId,
            'image' => $imagePath,
        ]);

        return redirect()->route('viewComment')->with('success', 'Comentário criado com sucesso!');
    }

    public function edit($id)
    {
        $comment = Comment::with('post')->findOrFail($id);
        $topics = Topic::all();
        return view('comments.editComment', compact('comment', 'topics'));
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);

        $request->validate([
            'content' => 'required|string',
            'topic_id' => 'exists:topics,id',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $comment->update([
            'content' => $request->content,
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $imagePath = $file->storeAs('uploads/comments', $fileName);

            if ($comment->post->image && $comment->post->image !== 'uploads/defaultComment.jpg') {
                Storage::delete($comment->post->image);
            }

            $comment->post->update(['image' => $imagePath]);
        }

        return redirect()->route('viewComment')->with('success', 'Comentário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $comment = Comment::with('post')->findOrFail($id);

        if ($comment->post->image && $comment->post->image !== 'uploads/defaultComment.jpg') {
            Storage::delete($comment->post->image);
        }

        $comment->post()->delete();
        $comment->delete();

        return redirect()->route('viewComment')->with('success', 'Comentário deletado com sucesso!');
    }
}
