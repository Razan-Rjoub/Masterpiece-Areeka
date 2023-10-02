<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'stock',
        'image',
        'image2',
        'image3',
        'image4',
        'descrptionLong',
        'width',
        'height',
        'Depth',
        'Weight',
        'Qualitycheck',
        'descrption',
        'quantity',
        'store_id',
        'category_id',
        'status'
    ];
    public function store(){
        return $this->belongsTo(Store::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function orderitem(){
        return $this->belongsTo(OrderItem::class);
    }
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
    public function review(){
        return $this->hasMany(Review::class);
    }
    public function wishlist(){
        return $this->hasMany(Wishlist::class);
    }
}
