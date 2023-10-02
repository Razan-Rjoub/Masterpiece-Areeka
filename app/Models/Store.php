<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'totalproduct',
        'totalearning',
        'image',
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
    public function review(){
        return $this->hasMany(Review::class);
    }
    public function category(){
        return $this->hasMany(Category::class);
    }
    public function orderitem(){
        return $this->hasMany(OrderItem::class);
    }
}
