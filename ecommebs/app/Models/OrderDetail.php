<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'quantity', 'product_id', 'order_id'];

    public function product(){
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }

    public function order(){
        return $this->belongsTo(\App\Models\Order::class, 'order_id');
    }
}
