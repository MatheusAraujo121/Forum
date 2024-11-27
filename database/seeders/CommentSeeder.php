<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;


class TestPolymorphismSeeder extends Seeder
{
    public function run()
    {
        $category = Category::firstOrCreate( ['title' => 'Default Category'], ['description' => 'ssss']);

        $topic = Topic::create([
            'title' => 'Testing Polymorphism',
            'description' => 'Seeder example for polymorphic relations',
            'status' => 1,
            'category_id' => $category->id,
        ]);

        $topic->post()->create([
            'image' => 'topic_image',
            'user_id' => 1,
        ]);

        $comment = Comment::create([
            'content' => 'This is a test comment',
            'topic_id' => $topic->id,
        ]);

        $comment->post()->create([
            'image' => null,
            'user_id' => 2,
        ]);
    }
}
