<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Tag;

class CommentSeeder extends Seeder
{
    public function run()
    {
        // Criação de uma categoria
        $category = Category::firstOrCreate(['title' => 'Default Category'], ['description' => 'ssss']);

        // Criação de um tópico
        $topic = Topic::create([
            'title' => 'Testing Polymorphism',
            'description' => 'Seeder example for polymorphic relations',
            'status' => 1,
            'category_id' => $category->id,
        ]);

        // Criação de um post associado ao tópico
        $post = $topic->post()->create([
            'image' => 'topic_image',
            'user_id' => 1,
        ]);

        // Criação de um comentário associado ao tópico e ao post
        $comment = Comment::create([
            'content' => 'This is a test comment',
            'topic_id' => $topic->id,
        ]);

        // Criação de um post associado ao comentário
        $comment->post()->create([
            'image' => 'uploads/336455-okarun.jpeg',
            'user_id' => 2,
        ]);

        // Criação de uma tag
        $tag = Tag::create([
            'title' => 'Test Tag', // Nome da tag
        ]);

        // Associa a tag ao tópico
        $topic->tags()->attach($tag->id);
    }
}
