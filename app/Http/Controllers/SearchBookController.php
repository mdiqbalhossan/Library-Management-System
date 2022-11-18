<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\BookIssue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SearchBookController extends Controller
{
    public function index()
    {
        $books = BookResource::collection(Book::where('status',1)->orderBy('id','desc')->with('category','author','location')->paginate(6));
        $issueBooks = BookIssue::where('student_id',Auth::user()->id)->where('status','!=','cancel')->get();
        return Inertia::render('Student/SearchBook',compact('books','issueBooks'));
    }

    public function search(Request $request)
    {
        $books = BookResource::collection(
            Book::where('status',1)
            ->where('name','like','%'.$request->search.'%')
            ->orderBy('id','desc')
            ->with('category','author','location')
            ->paginate(6)
        );
        return Inertia::render('Student/SearchBook', compact('books'));
    }

    public function issueBook(Request $request){
        $unique_id = mt_rand(100000,999999);
        BookIssue::create([
            'student_id' => Auth::user()->id,
            'book_id' => $request->bookId,
            'apply_date' => Carbon::now(),
            'unique_id' => $unique_id,
        ]);

        return redirect()->route('success')->with('message',$unique_id);
    }
}
