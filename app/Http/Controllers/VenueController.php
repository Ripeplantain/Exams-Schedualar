<?php

namespace App\Http\Controllers;

use App\Models\Venue_tb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venues = Venue_tb::get();

        // if(request('search')){
        //     $venues 
        //         ->where('venue_name','like','%'.request('search').'%')->get();
        //         return $venues;
        // }

        return view('venue',[
            'venues' => $venues
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venue = Venue_tb::find($id);

        return view('edit',[
            'venue' => $venue
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Venue_tb $venue)
    {
        $attribute = request()->validate([
            'venue_name' => 'required',
            'exam_capacity' => 'required | max:255',
            'location_capacity' => 'required | max:255',
        ]);

        $venue->update($attribute);

        Session::flash('success','It has been updated successfully');
    
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
