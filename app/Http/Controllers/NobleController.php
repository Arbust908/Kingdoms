<?php

namespace App\Http\Controllers;

use App\Noble;
use Illuminate\Http\Request;

class NobleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Noble  $noble
     * @return \Illuminate\Http\Response
     */
    public function show(Noble $noble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noble  $noble
     * @return \Illuminate\Http\Response
     */
    public function edit(Noble $noble)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noble  $noble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noble $noble)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noble  $noble
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noble $noble)
    {
        //
    }

    ////

    public function generate(){
        #name
        #title
        #sobriquet
        #nobleHouse_id
        #prestige
        #birthYear
        #isFemale
    }
}
