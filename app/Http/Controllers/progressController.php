<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\progress;


class ProgressController extends Controller
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
        $data = progress::all();
        return view('progress.tableProgress',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('progress.index');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'buildingName'=>'required',
            'fmProgress'=>'required',
            'dateFm'=>'required',
            'totProgress'=>'required',
            'dateTot'=>'required',
            'aisProgress'=>'required',
            'dateAis'=>'required',
            'progress3bb'=>'required',
            'date3BB'=>'required',
            'sinetProgress'=>'required',
            'dateSinet'=>'required',
            'fnProgress'=>'required',
            'dateFn'=>'required',
            'trueProgress'=>'required',
            'dateTrue'=>'required',
        ]);
        if ($validator->fails()) {
            foreach($validator->errors()->all() as $error){
                $this->notification['message'] = $error;
                $this->notification['alert_type'] = 'error';
                array_push($this->notifications,$this->notification);
            }
            return redirect()->route('progress.create')->withInput($request->input())->with('notification',$this->notifications);
        }

        Progress::create($request->all());
        return redirect()->route('progress.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProgressList()
    {
        $data = Progress::all();
        return view('tableList.progresstable', ['data' => $data]);
    }


    public function create()
    {
        $data = Progress::all();
        return view('progress.addProgress', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Progress::find($id);
        // dd($data);
        return view('progress.editprogress',['data' => $data]);
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
            // 'buildingName'=>'required',
            'fmProgress'=>'required',
            'dateFm'=>'required',
            'totProgress'=>'required',
            'dateTot'=>'required',
            'aisProgress'=>'required',
            'dateAis'=>'required',
            'progress3bb'=>'required',
            'date3BB'=>'required',
            'sinetProgress'=>'required',
            'dateSinet'=>'required',
            'fnProgress'=>'required',
            'dateFn'=>'required',
            'trueProgress'=>'required',
            'dateTrue'=>'required',
        ]);

        if ($validator->fails()) {
            foreach($validator->errors()->all() as $error){
                $this->notification['message'] = $error;
                $this->notification['alert_type'] = 'error';
                array_push($this->notifications,$this->notification);
            }
            return redirect()->route('progress.edit',$id)->withInput($request->input())->with('notification',$this->notifications);
        }

        progress::find($id)->update($request->all());
        return redirect()->route('progress.index');
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
