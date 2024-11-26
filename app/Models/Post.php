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

    // Relacionamento polimórfico
    public function postable()
    {
        return $this->morphTo(); // Determina o modelo associado (Comment ou Topic)
    }

    // Relacionamento com User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com Rate
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}