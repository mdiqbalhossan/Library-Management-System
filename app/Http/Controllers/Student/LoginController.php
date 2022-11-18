<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\LoginRequest;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LoginController extends Controller
{
    // use Authenticatable;

    public  function __construct()
    {
        $this->middleware('guest')->except('destroy');
        $this->middleware('guest:student')->except('destroy');
    }

    public function loginForm()
    {
        return Inertia::render('Welcome');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('student.dashboard');
    }

    public function destroy(Request $request)
    {

        Auth::guard('student')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
            
    }
}
