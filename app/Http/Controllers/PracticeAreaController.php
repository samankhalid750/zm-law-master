<?php

namespace App\Http\Controllers;

use App\Models\PracticeArea;
use Illuminate\Http\Request;

class PracticeAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('practice_areas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('practice_areas.create');   
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
     * @param  \App\Models\PracticeArea  $practiceArea
     * @return \Illuminate\Http\Response
     */
    public function show(PracticeArea $practiceArea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PracticeArea  $practiceArea
     * @return \Illuminate\Http\Response
     */
    public function edit(PracticeArea $practiceArea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PracticeArea  $practiceArea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PracticeArea $practiceArea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PracticeArea  $practiceArea
     * @return \Illuminate\Http\Response
     */
    public function destroy(PracticeArea $practiceArea)
    {
        //
    }
}
