<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable =
        [
            'title',
            'author',
            'publisher',
            'year',
            'description',
            'isbn',
            'series',
            'img',
            'cover',
        ];

/*
    public function update()
    {
        $book = Book::table('books')
                    ->where('id', $request->get('id'))
                    ->update();
    }
*/
}
