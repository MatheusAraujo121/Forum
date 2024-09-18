<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Category;

class CategoryController extends Controller
{
    public function listCategories(Request $request){
        $categories = Category::all();
        return view('Category.listCategories', ['categories' => $categories]);
    }

    public function viewCategory(Request $request, $uid){
        //procurar o usuário no banco 
        $category = Category::where('id', $uid)->first();
        return view('category.viewCategory', ['category' => $category]);
    }

    public function createCategory(Request $request){
        if($request->method() === 'GET'){

            return view('category.createCategory');
        }else{
            $category = Category::create([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect()->route('category.listCategories');
        }
    }

    public function updateCategory(Request $request, $uid){
        //procurar o usuário no banco 
            $category = Category::where('id', $uid)->first();
            $category->title = $request->title;
            $category->description = $request->description;

            $category->save();
            return redirect()->route('routeListUserByIDS', [$category -> id])
                    ->with('message', 'Atualizado com sucesso!');
    }

    public function deleteCategory(Request $request, $uid){
        $category = Category::where('id', $uid)->delete();

        return redirect()->route('category.listCategories')
                ->with('message', 'Deletado com sucesso!');
    }
}
