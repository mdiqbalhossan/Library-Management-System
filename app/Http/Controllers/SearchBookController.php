<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SearchBookController extends Controller
{
    public function index()
    {
        $books = BookResource::collection(Book::where('status',1)->orderBy('id','desc')->with('category','author','location')->paginate(6));
        return Inertia::render('Student/SearchBook',compact('books'));
    }
}
