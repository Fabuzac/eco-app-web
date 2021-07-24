<?php

namespace App\Http\Controllers;

use App\Models\ApiDegreeFrance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ApiDegreeFranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ApiDegreeFrance::all();
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
     * @param  \App\Models\ApiDegreeFrance  $apiDegreeFrance
     * @return \Illuminate\Http\Response
     */
    public function show(ApiDegreeFrance $apiDegreeFrance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApiDegreeFrance  $apiDegreeFrance
     * @return \Illuminate\Http\Response
     */
    public function edit(ApiDegreeFrance $apiDegreeFrance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApiDegreeFrance  $apiDegreeFrance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApiDegreeFrance $apiDegreeFrance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApiDegreeFrance  $apiDegreeFrance
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiDegreeFrance $apiDegreeFrance)
    {
        //
    }
}
