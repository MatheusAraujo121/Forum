<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function viewTag(Request $request){
        $tags = Tag::all();
        return view('tags.viewTag', ['tags' => $tags]);
    }

    public function editTag(Request $request, $uid){
        $tag = Tag::where('id', $uid)->first();
        return view('tags.editTag', ['tag' => $tag]);
    }

    public function updateTag(Request $request, $uid){
        //procurar a tag no banco 
            $tag = Tag::where('id', $uid)->first();
            $tag->tagname = $request->tagname;
            $tag->tagtype = $request->tagtype;

            $request->validate([
                'tagname'=> 'string|max:255',
                'tagtype'=> 'string|max:255'
            ]);
            $tag->save();
            return redirect()->route('viewTag', [$tag -> id])
                    ->with('message', 'Atualizado com sucesso!');
    }

    public function deleteTag(Request $request, $uid){
        $tag = Tag::where('id', $uid)->delete();

        return redirect()->route('viewTag')
                ->with('message', 'Deletado com sucesso!');
    }

    public function createTag(Request $request){
        if($request->method() === 'GET'){

            return view('tags.createTag');
        }else{

            $request->validate([
                'tagname'=> 'required|string|max:255',
                'tagtype'=> 'required|string|max:255'
            ]);

            $tag = Tag::create([
                'tagname' => $request->tagname,
                'tagtype' => $request->tagtype
            ]);

            return redirect()->route('viewTag');
        }
    }
}
