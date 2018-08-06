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
    public function create(Request $request)
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
        $testDrive = new TestDrive;
        $testDrive->usuarios_id = $request->usuarios_id;
        $testDrive->data = $request->data;
        $testDrive->concessionarias_id = $request->concessionarias_id;
        $testDrive->save();
        return $request->all();
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
        return $testDrive->all();
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
