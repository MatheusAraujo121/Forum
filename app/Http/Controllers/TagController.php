<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function listTags(Request $request){
        $tags = Tag::all();
        return view('tags.listTags', ['tags' => $tags]);
    }

    public function editTag(Request $request, $uid){
        $tag = Tag::where('id', $uid)->first();
        return view('tags.editTag', ['tag' => $tag]);
    }

    public function viewTag(Request $request, $uid){
        $tag = Tag::where('id', $uid)->first();
        return view('tags.viewTag', ['tag' => $tag]);
    }

    public function createTag(Request $request){
        if($request->method() === 'GET'){

            return view('tags.createTag');
        }else{

            $request->validate([
                'title'=> 'required|string'
            ]);

            $tag = Tag::create([
                'title' => $request->title
            ]);

            return redirect()->route('listTags');
        }
    }

    public function deleteTag(Request $request, $uid){
        $tag = Tag::where('id', $uid)->delete();

        return redirect()->route('listTags')
                ->with('message', 'Deletado com sucesso!');
    }

    public function updateTag(Request $request, $uid){
        //procurar a tag no banco
            $tag = Tag::where('id', $uid)->first();
            $tag->title = $request->title;

            $request->validate([
                'title'=> 'string'
            ]);
            $tag->save();
            return redirect()->route('listTags', [$tag -> id])
                    ->with('message', 'Atualizado com sucesso!');
    }
}
