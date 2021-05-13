<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Book_type;

class BookController extends Controller
{
    public function getType()
    {
        $book = Book_type::where("id","=","1")->get();
        return response()->json($book);
    }
}
