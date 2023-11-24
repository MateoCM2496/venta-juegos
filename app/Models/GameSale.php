<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'sale_id',
        'amount',
        
    ];

    public function game()
    {
        return $this->belongsTo(Game::class)->withDefault();
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class)->withDefault();
    }
}
