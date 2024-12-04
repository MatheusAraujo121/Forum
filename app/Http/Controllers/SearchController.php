<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $query = $request->query('query');
    
    // Filtra tópicos, categorias e tags
    $topics = Topic::with('category', 'tags')
        ->where('title', 'like', '%' . $query . '%')
        ->orWhereHas('category', function($q) use ($query) {
            $q->where('title', 'like', '%' . $query . '%');
        })
        ->orWhereHas('tags', function($q) use ($query) {
            $q->where('title', 'like', '%' . $query . '%');
        })
        ->get();
    
    return response()->json(['topics' => $topics]);
}

}
