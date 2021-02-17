<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\building;


class BuildingController extends Controller
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
         $this->middleware(['permission:building-create,require_all,guard:web'])->only(['create']);
        //  $this->middleware(['role:superadminstrator,require_all,guard:web'])->only(['destroy']);
     }  

     public function building()
     {
         return view('building.addBuilding');
     }

    public function index()
    {
        $data = Building::all();
        return view('building.tableBuilding',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('building.addBuilding');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $request->validate([
    //    $validator = Validator::make($request->validate(),[
            'building'=>'required',
            'fmCode'=>'required',
            'contactName'=>'required',
            'phone'=>'required',
            'area'=>'required',
            'numberLayer'=>'required',
            'floor'=>'required',
            'roomNumber'=>'required',
            'detailAdress'=>'required',
            'contract'=>'required',
            'contracttime'=>'required',
            'province'=>'required',
            'city'=>'required',
            'postalCode'=>'required',
            'zone'=>'required',
            'latitude'=>'required',
            'longtude'=>'required',
            'priceSquare'=>'required',
            'workingTime'=>'required',
            'blance'=>'required',
            'developer'=>'required',
            'grade'=>'required'
        ]);

        // if ($validator->fails()) {
        //     foreach($validator->errors()->all() as $error){
        //         $this->notification['message'] = $error;
        //         $this->notification['alert_type'] = 'error';
        //         array_push($this->notifications,$this->notification);
        //     }
        //     return redirect()->route('building.create')->withInput($request->input())->with('notification',$this->notifications);
        // }

        Building::create($request->all());
        // return redirect()->back();
        return redirect()->route('building.list');
    }

    public function showBuildingList()
    {
        $data = Building::all();
        return view('building.tableBuildingList',['data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data=building::find($id);
        // dd($data);
        $data=building::find($id);
        return view('building.editBuilding',['data' => $data]);
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
            'building'=>'required',
            'fmCode'=>'required',
            'contactName'=>'required',
            'phone'=>'required',
            'area'=>'required',
            'numberLayer'=>'required',
            'floor'=>'required',
            'roomNumber'=>'required',
            'contract'=>'required',
            'contracttime'=>'required',
            'detailAdress'=>'required',
            'province'=>'required',
            'city'=>'required',
            'postalCode'=>'required',
            'zone'=>'required',
            'latitude'=>'required',
            'longtude'=>'required',
            'priceSquare'=>'required',
            'workingTime'=>'required',
            'blance'=>'required',
            'developer'=>'required',
            'grade'=>'required'
        ]);

        if ($validator->fails()) {
            foreach($validator->errors()->all() as $error){
                $this->notification['message'] = $error;
                $this->notification['alert_type'] = 'error';
                array_push($this->notifications,$this->notification);
            }
            return redirect()->route('building.edit',$id)->withInput($request->input())->with('notification',$this->notifications);
        }

        Building::find($id)->update($request->all());
        return redirect()->route('building.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Building::find($id)->delete();
        return redirect()->back();
        // return redirect()->route('building.list');
    }
}
