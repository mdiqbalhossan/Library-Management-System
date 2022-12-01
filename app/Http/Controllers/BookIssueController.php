<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookIssueResource;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\BookIssue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookIssueController extends Controller
{
    public function index()
    {
        $issueBooks = BookIssueResource::collection(BookIssue::with('book','student')->paginate(5));
        return Inertia::render('BookIssue/Index', compact('issueBooks'));        
    }

    public function view($id)
    {
        $bookIssue = BookIssue::with('student')->find($id);
        $issue = new BookIssueResource($bookIssue);
        $book = new BookResource(Book::where('id',$bookIssue->book_id)->with('category','author','location')->first());
        return Inertia::render('BookIssue/View', compact('issue','book'));
    }

    public function statusUpdate(Request $request, $id)
    {
        $issue = BookIssue::find($id);
        $issue->issue_date = Carbon::now();
        $issue->return_date = $request->return_date;
        $issue->status = $request->status;
        $issue->save();

        return redirect()->route('book.issue')->with('message','Status Updated Successfully!!');
    }

    public function returnUpdate(Request $request, $id)
    {
        $issue = BookIssue::find($id);
        $issue->returned_date = $request->returned_date;
        $issue->fine_received = $request->fine_received;
        $issue->status = "returned";
        $issue->save();

        return redirect()->route('book.issue')->with('message','Book Returned Successfully!!');
    }

    public function search(Request $request)
    {
        $books = BookIssueResource::collection(
            BookIssue::where('unique_id','like','%'.$request->search.'%')
            ->orWhere('student_id','like','%'.$request->search.'%')
            ->orderBy('id','desc')
            ->with('book','student')
            ->paginate(5)
        );
        return Inertia::render('BookIssue/Index', compact('books'));
    }
}
