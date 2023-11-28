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
        'platform_id',
        'image',
        'gender',
        'price',
        'stock',
    ];

    public function platform()
    {
        return $this->belongsTo(Platform::class, 'platform_id');
    }
}
