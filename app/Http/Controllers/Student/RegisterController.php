<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class RegisterController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:student');
    }

    /**
     * Display the registration view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Student/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|max:255|unique:'.Student::class,
            'password' => ['required'],
        ]);

        $user = Student::create([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('student')->login($user);

        return redirect()->route('student.profile');
    }
}
