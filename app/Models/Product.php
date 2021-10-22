<?php

namespace App\Models;

use Database\Factories\ProductsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return ProductsFactory::new();
    }

    protected $table = 'products';
    protected $fillable = [
        'name',
        'detail',
        'price',
    ];

    //produkty maja duzy kategori
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}