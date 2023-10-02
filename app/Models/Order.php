<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'payment_id',
        'user_id',
        'totalprice',
        'statusPayment',
        'status',
        'phone',
        'comment',
        'name',
        'email'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
    public function orderitem(){
        return $this->hasMany(OrderItem::class);
    }
}
