<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function getAllBooks(Request $request)
    {
        $books = Book::all();

        return json_encode($books);
    }

    public function saveBook(Request $request)
    {
        $book = new Book(
        [
            'name'        => $request->get('name'),
            'title'       => $request->get('title'),
            'author'      => $request->get('author'),
            'publisher'   => $request->get('publisher'),
            'year'        => $request->get('year'),
            'description' => $request->get('description'),
            'isbn'        => $request->get('isbn'),
            'series'      => $request->get('series'),
            'img'         => $request->get('img') ? $request->get('img') : '',
            'cover'       => $request->get('cover'),
        ]);

        $book->save();

        return response()->json('Successfully added');
    }

    public function updateBook(Request $request)
    {
        return response()->json('Try to update book');
        //return Book::update($request);
    }

    public function deleteBook($id)
    {
        DB::table('books')->where('id', $id)->delete();

        return response()->json('Successfully deleted');
    }
}
