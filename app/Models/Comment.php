<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Post
{
    use HasFactory;

    protected $fillable = [
        'content', 
        'post_id', 
        'topic_id'
    ];

    // Relacionamento polimórfico com Post
    public function post()
    {
        return $this->morphOne(Post::class, 'postable');
    }

    // Relacionamento com Topic
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
