<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /** @use HasFactory<\Database\Factories\ShopFactory> */
    protected $fillable = ['user_id', 'name', 'slug', 'logo',
'description'];
 public function user()
 {
 return $this->belongsTo(User::class);
 }
 public function categories()
 {
 return $this->hasMany(Category::class);
 }
 public function products()
 {
 return $this->hasMany(Product::class);
 }
 public function orders()
 {
 return $this->hasMany(Order::class);
 }
}

