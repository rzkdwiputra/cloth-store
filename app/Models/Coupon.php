<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $casts = [
        'value' => 'float',
        'cart_value' => 'float',
    ];

    // Accessor untuk memformat `value` ke dalam format Rupiah
    public function getValueAttribute($value)
    {
        return '' . number_format($value, 0, ',', '.');
    }

    // Accessor untuk memformat `cart_value` ke dalam format Rupiah
    public function getCartValueAttribute($value)
    {
        return '' . number_format($value, 0, ',', '.');
    }
}
