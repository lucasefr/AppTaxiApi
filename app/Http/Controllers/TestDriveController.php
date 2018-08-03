<?php

namespace App\Http\Controllers;

use App\TestDrive;
use Illuminate\Http\Request;

class TestDriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return TestDrive::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        TestDrive::create($request->all());
        return $request->all();
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
     * @param  \App\TestDrive  $testDrive
     * @return \Illuminate\Http\Response
     */
    public function show(TestDrive $testDrive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestDrive  $testDrive
     * @return \Illuminate\Http\Response
     */
    public function edit(TestDrive $testDrive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestDrive  $testDrive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestDrive $testDrive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestDrive  $testDrive
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestDrive $testDrive)
    {
        //
    }
}
