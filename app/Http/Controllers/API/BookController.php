<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function books()
    {
        try {
            $books = Book::all();

            return response()->json([
                'message'   => 'success',
                'books'     => $books
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message'   => 'Request failed'
            ], 401);
        }
    }
}
