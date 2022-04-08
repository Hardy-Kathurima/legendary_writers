<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'order_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('payer_email', 'like', '%' . $val . '%')->orWhere('amount', 'like', '%' . $val . '%');
    }
}
