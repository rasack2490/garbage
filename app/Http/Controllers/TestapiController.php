<?php

namespace App\Http\Controllers;

use App\Testapi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = Testapi::all();
        $data = DB::select('select * from testapis');
        return $data;
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
     * @param  \App\Testapi  $testapi
     * @return \Illuminate\Http\Response
     */
    public function show(Testapi $testapi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testapi  $testapi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testapi $testapi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testapi  $testapi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testapi $testapi)
    {
        //
    }
}
