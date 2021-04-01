<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\resplice;

class RespliceController extends Controller
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
        $data = resplice::all();
        return view('Resplice.Resplice',['data' => $data]);
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
        $data= resplice::find($id);
        return view('resplice.editResplice',['data' => $data]);
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
        $validator =  Validator::make($request->all(),[

            // 'buildingId'=>'required',
            'numberLayer'=>'required',
            'roomNumber'=>'required',
            'floor'=>'required',

            'zone'=>'required',
            'technicianTeamStart'=>'required',

            'startDate'=>'required',
            'planDate'=>'required',
            'planFinish'=>'required',

            'planStart'=>'required',
            'planComplete'=>'required',
            'technicianTeamEnd'=>'required'

        ]);

        if ($validator->fails()) {
            foreach($validator->errors()->all() as $error){
                $this->notification['message'] = $error;
                $this->notification['alert_type'] = 'error';
                array_push($this->notifications,$this->notification);
            }
            return redirect()->route('resplice.edit',$id)->withInput($request->input())->with('notification',$this->notifications);
        }

        resplice::find($id)->update($request->all());
        return redirect()->route('resplice.index');
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
