<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    protected $fillable = ['name', 'description', 'image', 'price',
'stock', 'shop_id', 'category_id'];
 public function shop()
 {
 return $this->belongsTo(Shop::class);
 }
 public function category()
 {
 return $this->belongsTo(Category::class);
 }
}
