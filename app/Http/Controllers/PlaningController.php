<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Planing;

class PlaningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = planing::all();
        return view('fmManagement.planingTable',['data' => $data]);
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
        $request->validate([
            //    $validator = Validator::make($request->validate(),[
                    'name'=>'required',
                    'lastName'=>'required',
                    'phoneNumber1'=>'required',
                    'phoneNumber2'=>'required',
                    'buildingId'=>'required',
                    'numberLayer'=>'required',
                    'floor'=>'required',
                    'roomNumber'=>'required',
                    'isp'=>'required',
                    'ispCode'=>'required',
                    'memberNumber'=>'required',
                    'Fees'=>'required',
                    'confirming'=>'required',
                    'Team'=>'required',
                    'date'=>'required',
                    'time'=>'required',
                    'status'=>'required',
                    'subStatus'=>'required',
                    'dateConnect'=>'required',
                    'dateDisconnect'=>'required',
                ]);
                Planing::create($request->all());
                return redirect()->route('building.list');
    }

    public function showPlaningList()
    {
        $data = Planing::all();
        return view('fmManagement.planingTable',['data' => $data]);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
