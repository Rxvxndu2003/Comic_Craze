<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'rating',
        'description'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
