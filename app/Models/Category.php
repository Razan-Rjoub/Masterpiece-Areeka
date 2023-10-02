<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'store_id'

    ];
    // public function categorystore(){
    //     return $this->belongsTo(CategoryStore::class);
    // }
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function store(){
        return $this->belongsTo(Store::class);
    }
}
