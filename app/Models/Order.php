<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    // Accessor untuk memformat `subtotal` ke dalam format Rupiah
    public function getSubtotalAttribute($value)
    {
        return '' . number_format($value, 0, ',', '.');
    }

    // Accessor untuk memformat `discount` ke dalam format Rupiah
    public function getDiscountAttribute($value)
    {
        return '' . number_format($value, 0, ',', '.');
    }

    // Accessor untuk memformat `tax` ke dalam format Rupiah
    public function getTaxAttribute($value)
    {
        return '' . number_format($value, 0, ',', '.');
    }

    // Accessor untuk memformat `total` ke dalam format Rupiah
    public function getTotalAttribute($value)
    {
        return '' . number_format($value, 0, ',', '.');
    }
}
