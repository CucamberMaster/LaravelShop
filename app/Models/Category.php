<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = [
        'category_name',
    ];

    //wiele kategori nalezy do produktu
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
