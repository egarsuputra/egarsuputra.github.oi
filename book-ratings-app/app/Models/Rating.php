<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Book;

class Rating extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function ratingAvg($id)
    {
        $ratings =  Rating::where('book_id', $id)->get();
        $rating = 0;

        foreach ($ratings as $val) {
            $rating += $val->rate;
        }

        $rating /= $ratings->count();

        return $rating;
    }
}
