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

    protected $notification, $notifications = [];

    public function __construct(){

        $this->notification = array('message' => '','alert_type' => 'success');
        $this->middleware('auth');
        // $this->middleware(['permission:building-create,require_all,guard:web'])->only(['create']);
       //  $this->middleware(['role:superadminstrator,require_all,guard:web'])->only(['destroy']);
    }
    public function index()
    {
        $data = planing::all();
        return view('fmManagement.planingTable', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fmManagement.addPlaning');
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
            'name' => 'required',
            'lastName' => 'required',
            'phoneNumber1' => 'required',
            'phoneNumber2' => 'required',
            'buildingId' => 'required',
            'numberLayer' => 'required',
            'floor' => 'required',
            'roomNumber' => 'required',
            'isp' => 'required',
            'ispCode' => 'required',
            'memberNumber' => 'required',
            'Fees' => 'required',
            'confirming' => 'required',
            'Team' => 'required',
            'remark' => 'required',
            'date' => 'required',
            'time' => 'required',
            'status' => 'required',
            'subStatus' => 'required',
            'dateConnect' => 'required',
            'dateDisconnect' => 'required',
        ]);
        Planing::create($request->all());
        return redirect()->route('planning.list');
    }

    public function showPlaningList()
    {
        $data = Planing::all();
        return view('fmManagement.tablePlanninglist', ['data' => $data]);
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
        $data=Planing::find($id);
        return view('fmManagement.editPlaning',['data' => $data]);
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
        $validator =  Validator::make($request->all(), [
            'name' => 'required',
            'lastName' => 'required',
            'phoneNumber1' => 'required',
            'phoneNumber2' => 'required',
            'buildingId' => 'required',
            'numberLayer' => 'required',
            'floor' => 'required',
            'roomNumber' => 'required',
            'isp' => 'required',
            'ispCode' => 'required',
            'memberNumber' => 'required',
            'Fees' => 'required',
            'confirming' => 'required',
            'Team' => 'required',
            'remark' => 'required',
            'date' => 'required',
            'time' => 'required',
            'status' => 'required',
            'subStatus' => 'required',
            'dateConnect' => 'required',
            'dateDisconnect' => 'required',
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->notification['message'] = $error;
                $this->notification['alert_type'] = 'error';
                array_push($this->notifications, $this->notification);
            }
            return redirect()->route('planning.edit', $id)->withInput($request->input())->with('notification', $this->notifications);
        }

        planing::find($id)->update($request->all());
        return redirect()->route('planning.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        planing::find($id)->delete();
        return redirect()->back();
    }
}
