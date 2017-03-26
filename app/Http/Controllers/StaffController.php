<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use App\DatabaseSeeder;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffFName = Staff::find(2)->fname;
        $staffLName = Staff::find(2)->lname;
        $name = array(
            'fname' => $staffFName,
            'lname' => $staffLName,
        );
        $staffSchoolName = Staff::find(2)->school()->get();

        $students =  Staff::find(2)->student()->get();

//        return view('staff', [compact('staff'),compact('staffSchoolName'),compact('name'),compact('students')]);
        return view('staff', compact('staff','staffSchoolName', 'name', 'students'));
//        return view('staff', compact('name'));
    }

    public function seedDB(){
        //$seed = new DatabaseSeeder;
        //$seed->run();
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
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
