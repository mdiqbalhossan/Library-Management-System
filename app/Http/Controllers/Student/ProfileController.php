<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        $request->validate([
            'name' => 'required',
            'dept' => 'required',
            'session' => 'required',
            'student_id' => 'required'
        ]);
        
        $id = Auth::user()->id;
        $student = Student::find($id);
        $student->name = $request->name;
        $student->dept = $request->dept;
        $student->year = $request->year;
        $student->semester = $request->semester;
        $student->session = $request->session;
        $student->student_id = $request->student_id;
        $student->is_profile_complete = 1;
        $student->save();

        return redirect()->back()->with('message','Profile Updated Successfully!!');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('message','Old Password Does not match!');
        }

        Student::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->back()->with('message','Password Change Successfully!!');
    }
}
