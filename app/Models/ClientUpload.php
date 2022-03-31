<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_file',
        'order_detail',
        'order_id'
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
