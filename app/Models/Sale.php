<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pay_method_id',
        'status_sale_id',
        'date',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function status_sale()
    {
        return $this->belongsTo(StatusSale::class)->withDefault();
    }

    public function pays_method()
    {
        return $this->hasMany(PayMethod::class);
    }
}
