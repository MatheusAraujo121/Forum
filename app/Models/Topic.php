<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Post
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'category_id'];

    // Relacionamento polimórfico com Post
    public function post()
    {
        return $this->morphOne(Post::class, 'postable');
    }

    // Relacionamento com Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relacionamento com Comments
    public function comments()
    {
        return $this->hasMany(Comment::class)->distinct();
    }

    // Relacionamento com Tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}