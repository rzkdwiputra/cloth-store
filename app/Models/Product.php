<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // Accessor untuk regular_price dalam format Rupiah
    public function getRegularPriceAttribute($value)
    {
        return '' . number_format($value, 0, ',', '.');
    }

    // Accessor untuk sale_price dalam format Rupiah
    public function getSalePriceAttribute($value)
    {
        return '' . number_format($value, 0, ',', '.');
    }
}
