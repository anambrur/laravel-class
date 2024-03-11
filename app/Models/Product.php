<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'details', 'price', 'data'];
    function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $casts = [
        'data' => 'array'
    ];
    // function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

}
