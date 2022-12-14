<?php

namespace App\Models;

use Database\Factories\CategoriesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return CategoriesFactory::new();
    }

    protected $table = 'categories';

    protected $fillable = [
        'name_category',
    ];

    //wiele kategori nalezy do produktu
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
