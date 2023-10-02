<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'method',
        'expiry',
        'name',
        'image',
        'user_id',
        
    ];
    public function order(){
        return $this->hasMany(Order::class);
    }
}
