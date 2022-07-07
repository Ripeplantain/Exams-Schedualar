<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Prog_db;
use App\Models\Course_db;
use App\Models\Department;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course_count = Course_db::get()->count();
        $prog_count = Prog_db::get()->count();
        $department_count = Department::get()->count();
        $faculties = Faculty::get();

        return view('dashboard',[
            'course_count' => $course_count,
            'prog_count' => $prog_count,
            'department_count' => $department_count,
            'faculties' => $faculties
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
