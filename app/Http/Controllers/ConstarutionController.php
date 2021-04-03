<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Constarution;

class ConstarutionController extends Controller
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
        $data = Constarution::all();
        return view('Constarution.ConstarutionTable',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $data=Constarution::find($id);
        return view('Constarution.editConstarution',['data' => $data]);
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
            'buildingId'=>'required',
            'numberLayer'=>'required',
            'roomNumber'=>'required',
            'floor'=>'required',

            'exploreDesign'=>'required',
            'exploreDesignTeam'=>'required',
            'exploreDesignDate'=>'required',
            'exploreDesignBy'=>'required',
            'exploreDesignDateBy'=>'required',

            'ifcc'=>'required',
            'ifccTeam'=>'required',
            'ifccDate'=>'required',

            'wallBox'=>'required',
            'wallBoxTeam'=>'required',
            'wallBoxDate'=>'required',

            'microductD'=>'required',
            'microductTeamD'=>'required',
            'microductDateD'=>'required',

            'microductK'=>'required',
            'microductTeamK'=>'required',
            'microductDateK'=>'required'
        ]);

        if ($validator->fails()) {
            foreach($validator->errors()->all() as $error){
                $this->notification['message'] = $error;
                $this->notification['alert_type'] = 'error';
                array_push($this->notifications,$this->notification);
            }
            return redirect()->route('constarution.edit',$id)->withInput($request->input())->with('notification',$this->notifications);
        }

        constarution::find($id)->update($request->all());
        return redirect()->route('constarution.index');
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
