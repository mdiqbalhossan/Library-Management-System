<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $student = Student::find($id);
        return Inertia::render('Student/Profile',compact('student'));
    }

    public function update(Request $request)
    {
        
        $id = Auth::user()->id;
        $student = Student::find($id);
        $student->name = $request->name;
        $student->dept = $request->dept;
        $student->year = $request->year;
        $student->semester = $request->semester;
        $student->session = $request->session;
        $student->student_id = $request->student_id;
        $student->save();

        return redirect()->back()->with('message','Profile Updated Successfully!!');
    }
}
