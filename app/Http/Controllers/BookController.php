<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\LocationRack;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = BookResource::collection(Book::orderBy('id','desc')->with('category','author','location')->paginate(6));
        return Inertia::render('Book/Index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::where('status',1)->get();
        $locations = LocationRack::where('status',1)->get();
        return Inertia::render('Book/Create',compact('categories','authors','locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | min:3',
            'isbn_no' => 'required',
            'no_of_copy' => 'required | numeric',
            'status' => 'required',
            'category' => 'required',
            'author' => 'required',
            'location' => 'required',
        ]);

        Book::create([
            'name' => $request->name,
            'isbn_no' => $request->isbn_no,
            'no_of_copy' => $request->no_of_copy,
            'status' => $request->status,
            'category_id' => $request->category,
            'author_id' => $request->author,
            'location_rack_id' => $request->location,
        ]);

        return redirect()->route('book.index')->with('message','Book Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        $authors = Author::where('status',1)->get();
        $locations = LocationRack::where('status',1)->get();
        return Inertia::render('Book/Edit', compact('book','categories','authors','locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required | min:3',
            'isbn_no' => 'required',
            'no_of_copy' => 'required | numeric',
            'status' => 'required',
            'category' => 'required',
            'author' => 'required',
            'location' => 'required',
        ]);

        $book->update([
            'name' => $request->name,
            'isbn_no' => $request->isbn_no,
            'no_of_copy' => $request->no_of_copy,
            'status' => $request->status,
            'category_id' => $request->category,
            'author_id' => $request->author,
            'location_rack_id' => $request->location,
        ]);

        return redirect()->route('book.index')->with('message','Book Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back()->with('message','Book Deleted Successfully!');
    }
}
