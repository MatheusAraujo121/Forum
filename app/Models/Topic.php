<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Post
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status'
    ];

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
