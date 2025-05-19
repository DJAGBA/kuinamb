<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    /** @use HasFactory<\Database\Factories\CategorieFactory> */
    protected $fillable = ['name', 'shop_id'];
 public function shop()
 {
 return $this->belongsTo(Shop::class);
 }
 public function products()
 {
 return $this->hasMany(Product::class);
 }
}

