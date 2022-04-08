<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Braintree extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_id',
        'order_id',
        'amount',
        'currency',
        'order_name',
        'payment_status',
        'card_type',
        'customer_location',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function scopeLook($query, $val)
    {
        return $query->where('payment_id', 'like', '%' . $val . '%')->orWhere('amount', 'like', '%' . $val . '%');
    }
}
