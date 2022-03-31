<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUpload extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_preview',
        'order_id',
        'preview_detail',
        'completed'
    ];
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
