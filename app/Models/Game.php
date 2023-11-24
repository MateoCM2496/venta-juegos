<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'gender',
        'price',
        'stock',
    ];

    public function game()
    {
        return $this->hasMany(Game::class);
    }
}
