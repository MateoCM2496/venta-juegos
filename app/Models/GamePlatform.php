<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePlatform extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'platform_id',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class)->withDefault();
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class)->withDefault();
    }
}
