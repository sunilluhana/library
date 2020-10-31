<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Book;

class BooksController extends Controller
{
    public function store()
    {
        Book::create($this->requestValidate());
    }

    public function update(Book $book)
    {
        $book->update($this->requestValidate());
    }

    public function requestValidate()
    {
        return request()->validate([
            'title'  => 'required',
            'author' => 'required'
        ]);
    }
}
