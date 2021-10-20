<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'price',
    ];

    public function products()
    {
        return $this->belongsTo('App\Product', 'products');
    }
}
