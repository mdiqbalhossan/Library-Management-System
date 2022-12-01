<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookIssue;
use App\Models\Category;
use App\Models\LocationRack;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $total = [
            'book' => Book::count(),
            'author' => Author::count(),
            'category' => Category::count(),
            'location' => LocationRack::count(),
            'issue_book' => BookIssue::count(),
            'return' => BookIssue::where('status','returned')->count(),
            'not_return' => BookIssue::where('status', '!=', 'returned')->count(),
            'fines' => BookIssue::sum('fine_received'),
        ];
        return Inertia::render('Dashboard', compact('total'));
    }
}
