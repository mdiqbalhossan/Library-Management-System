<?php

namespace App\Http\Controllers;

use App\Http\Resources\LocationRackResource;
use App\Models\LocationRack;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LocationRackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locationRacks = LocationRackResource::collection(LocationRack::orderBy('id','desc')->paginate(6));
        return Inertia::render('Location/Index', compact('locationRacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Location/Create');
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
            'name' => 'required',
        ]);

        LocationRack::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('location.index')->with('message','Location Rack Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocationRack  $locationRack
     * @return \Illuminate\Http\Response
     */
    public function show(LocationRack $locationRack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocationRack  $locationRack
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locationRack = new LocationRackResource(LocationRack::find($id));
        return Inertia::render('Location/Edit', compact('locationRack'));
        // dd($locationRack);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocationRack  $locationRack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $locationRack = LocationRack::find($id);

       $locationRack->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('location.index')->with('message','Location Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocationRack  $locationRack
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locationRack = LocationRack::find($id);
        $locationRack->delete();
        return redirect()->back()->with('message','Location Rack Deleted Successfully!');
    }
}
