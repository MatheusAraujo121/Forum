<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;
use App\Models\Category;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::with('post')->get();
        return view('topics.listTopics', compact('topics'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('topics.createTopic', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $userId = Auth::id();

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif',
            'status' => 'required|integer',
            'category' => 'required|exists:categories,id',
        ]);


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $imagePath = $file->storeAs('uploads', $fileName);
        }

        $topic = Topic::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'category_id' => $request->category,
        ]);

        $topic->post()->create([
            'user_id' => $userId,
            'image' => $imagePath,
        ]);

        return redirect()->route('viewTopic')->with('success', 'Topic created successfully!');
    }

    public function edit($id)
    {
        $topic = Topic::with('post')->findOrFail($id);
        $categories = Category::all();
        return view('topics.editTopic', compact('topic', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $topic = Topic::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'status' => 'required|integer',
            'category' => 'required|exists:categories,id',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $topic->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'category_id' => $request->category,
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $imagePath = $file->storeAs('uploads', $fileName);

            if ($topic->post->image && $topic->post->image !== 'uploads/defaultPhoto.jpg') {
                Storage::delete($topic->post->image);
            }

            $topic->post->update(['image' => $imagePath]);
        }

        return redirect()->route('viewTopic')->with('success', 'Topic updated successfully!');
    }

    public function destroy($id)
    {
        $topic = Topic::with('post')->findOrFail($id);

        if ($topic->post->image && $topic->post->image !== 'uploads/defaultPhoto.jpg') {
            Storage::delete($topic->post->image);
        }

        $topic->comments()->delete();
        $topic->post()->delete();
        $topic->delete();

        return redirect()->route('viewTopic')->with('success', 'Topic deleted successfully!');
    }
}
