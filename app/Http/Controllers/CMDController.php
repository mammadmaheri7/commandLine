<?php

namespace App\Http\Controllers;

use App\CMD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CMDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Cache::store('redis') -> put('info','salam',60);
        $info = Cache::store('redis') -> get('info');
        return $info;
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
     * @param  \App\CMD  $cMD
     * @return \Illuminate\Http\Response
     */
    public function show(CMD $cMD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CMD  $cMD
     * @return \Illuminate\Http\Response
     */
    public function edit(CMD $cMD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CMD  $cMD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CMD $cMD)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CMD  $cMD
     * @return \Illuminate\Http\Response
     */
    public function destroy(CMD $cMD)
    {
        //
    }
}
