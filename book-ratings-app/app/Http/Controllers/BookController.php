<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
  public function index()
  {
    return view('book', [
      'books' => Book::limit(10)->get(),
    ]);
  }
}
