<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $with = ['author', 'category', 'rating'];

    // public function Author()
    // {
    //     return $this->hasOne(Author::class, 'id');
    // }

    // public function Category()
    // {
    //     return $this->hasOne(Category::class, 'id');
    // }

    // public function Rating()
    // {
    //     return $this->hasMany(Rating::class, 'book_id');
    // }
}
