<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    
    protected $fillable=['fullName', 'email', 'pass', 'address', 'phone'];

    // protected $fillable = ['id', 'fullname', 'email', 'pass', 'address', 'phone', ''];

    public function order(){
        return $this->hasMany(\App\Models\Order::class, 'customer_id');
    }
}
