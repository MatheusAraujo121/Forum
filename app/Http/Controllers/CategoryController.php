<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listCategories(Request $request){
        $categories = Category::all();
        return view('category.listCategories', compact('categories')); // compact('categories') faz o mesmo que ['category' => $category]
    }

    public function editCategory(Request $request, $uid){
        $category = Category::where('id', $uid)->first();
        return view('category.editCategory', ['category' => $category]);
    }

    public function viewCategory(Request $request, $uid){
        $category = Category::where('id', $uid)->first(); //findOrFai($id)
        return view('category.viewCategory', ['category' => $category]);
    }

    public function createCategory(Request $request){
        if($request->method() === 'GET'){

            return view('category.createCategory');
        }else{

            $validated = $request->validate([
                'title'=> 'required|string',
                'description'=> 'required|string'
            ]);

            $category = Category::create($validated);

            return redirect()->route('listCategories');
        }
    }

    public function updateCategory(Request $request, $uid){
        //procurar o usuário no banco
            $category = Category::where('id', $uid)->first();
            $category->title = $request->title;
            $category->description = $request->description;

            $request->validate([
                'title'=> 'string',
                'description'=> 'string'
            ]);
            $category->save();
            return redirect()->route('ViewCategory', [$category -> id])
                    ->with('message', 'Atualizado com sucesso!');
    }

    public function deleteCategory(Request $request, $uid){
        $category = Category::where('id', $uid)->delete();

        return redirect()->route('listCategories')
                ->with('message', 'Deletado com sucesso!');
    }
}
