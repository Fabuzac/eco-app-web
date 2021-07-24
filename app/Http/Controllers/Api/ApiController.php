<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api;
use App\Models\ApiDegreeFrance;

use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ApiDegreeFrance::all();

        // $api = DB::select('select * from apis');
        // return view('planet.index', ['api' => $api]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        API::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Api $api)
    {
        return $api;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Api $api)
    {
        $api->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Api $api)
    {
        $api->delete();
    }

    //=================================
    //=================================
    //=================================

    public function list()
    {
        return response()->json(Concert::all());
    }

    public function add(Request $request)
    {
        $item = Concert::create($request->all());
        return response()->json($item);

        return response()->json(array("status" => "1"));
    }

    public function done($id) 
    {
        $api  = Api::find($id);

        if($api) {
            $api->completed = 1;

            $api->save();

            return response()->json("success");
        } else {
            return response()->json("error");
        }

        
        return response()->json(array("status" => "1"));
        // Ou en en cas échec
        return response()->json(array("status" => "0"));

    }

    public function remove($id) 
    {
        $concert = Concert::find($id);
        
        if($concert) {
            $concert->delete();

            return response()->json(["status" => "success"]);

        } else {            
            return response()->json(["status" => "error"]);            
        }

        return response()->json(array("status" => "1"));

        // Ou en en cas échec d'ajout il faudra retourner
        return response()->json(array("status" => "0"));
      
    }    
}


