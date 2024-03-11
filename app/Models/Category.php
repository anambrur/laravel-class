<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category'
    ];
    // function product()
    // {
    //     return $this->hasMany(Product::class);
    // }
    function product()
    {
        return $this->hasManyThrough(Product::class, User::class);
    }
    function user()
    {
        return $this->hasMany(user::class);
    }
}
