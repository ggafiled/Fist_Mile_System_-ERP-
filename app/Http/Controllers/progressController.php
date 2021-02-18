<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\progress;


class progessController extends Controller
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

    public function progress()
    {
        return view('Progress.indexprogress');
    }
    

    public function index()
    {
        $data = progress::all();
        return view('Progress.indexprogress',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Progress.indexprogress');
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

    public function showProgressList()
    {
        $data = progress::all();
        return view('Progress.indexprogress',['data' => $data]);
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
        $data=Progress::find($id);
        return view('progress.indexprogress',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
        $validator =  Validator::make($request->all(),[
            'id'=>'required',
            'building'=>'required',
            'fmProgess'=>'required',
            'dateProgess'=>'required',
            'totProgess'=>'required',
            'aisProgess'=>'required',
            '3bbProgess'=>'required',
            'sinetProgess'=>'required',
            'trueProgess'=>'required',
        ]);

        if ($validator->fails()) {
            foreach($validator->errors()->all() as $error){
                $this->notification['message'] = $error;
                $this->notification['alert_type'] = 'error';
                array_push($this->notifications,$this->notification);
            }
            return redirect()->route('progress.progress',$id)->withInput($request->input())->with('notification',$this->notifications);
        }

        Progress::find($id)->update($request->all());
        return redirect()->back();
        
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