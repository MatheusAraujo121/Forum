<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'user_id'
    ];

    public function postable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isComment()
    {
        return $this->postable_type === 'App\Models\Comment';
    }

    public function isTopic()
    {
        return $this->postable_type === 'App\Models\Topic';
    }

}