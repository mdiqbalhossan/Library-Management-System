<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return Inertia::render('Settings',compact('setting'));
    }

    public function store(Request $request)
    {
        $setting = Setting::find(1);
        $setting->library_name = $request->library_name;
        $setting->library_address = $request->library_address;
        $setting->library_phone = $request->library_phone;
        $setting->library_email = $request->library_email;
        $setting->fines = $request->fines;
        $setting->save();

        return redirect()->back()->with('message','Settings Update Successfully!!');
    }

    
}
