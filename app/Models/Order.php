<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'full_name','product_id', 'email', 'address', 'postal_code', 'phone', 'payment_details', 'total','is_completed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function accessory()
    {
        return $this->belongsTo(Accessories::class);
    }
}



