<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\building;
use DB;
use Livewire\Component;


class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $notification, $notifications = [];

    public function __construct()
    {
        $this->notification = array('message' => '', 'alert_type' => 'success');
        $this->middleware('auth');
        $this->middleware(['permission:building-create,require_all,guard:web'])->only(['create']);
        //  $this->middleware(['role:superadminstrator,require_all,guard:web'])->only(['destroy']);
    }

    public function index()
    {
        $data = Building::all();
        return view('building.tableBuilding', ['data' => $data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = DB::table('areas')->get();
        $list2 = DB::table('provinces')
             ->orderBy('name_th', 'asc')
             ->get();
        return view('building.addBuilding')->with(['list'=> $list,'list2' => $list2 ]);
        // return view('building.addBuilding')->with('list2', $list2);
    }

    // public function create()
    // {
    //     $list = DB::table('areas')
    //         ->get();

    //     return view('building.addBuilding')->with('list', $list);
    // }

    // public function create2()
    // {
    //     $list2 = DB::table('provinces')
    //         ->orderBy('name_th', 'asc')
    //         ->get();
    //     return view('building.addBuilding')->with('list2', $list2);
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
            'projectName' => 'required',
            'buildingSum' => 'required',
            'floorSum' => 'required',
            'roomSum' => 'required',
            'fmCode' => 'required',

            'nameManager' => 'required',
            'phoneManager' => 'required',
            'mailManager' => 'required',
            'nameNiti' => 'required',
            'phoneNiti' => 'required',
            'mailNiti' => 'required',

            'houseNumber' => 'required',
            'squadNumber' => 'required',
            'alleyName' => 'required',
            'roadName' => 'required',
            'districtName' => 'required',
            'countyName' => 'required',
            'provinceName' => 'required',
            'postalCode' => 'required',

            'longitude' => 'required',
            'latitude' => 'required',

            'contractSell' => 'required',
            'contractDate' => 'required',
            'spendSpace' => 'required',
            'condition' => 'required',
            'contractPeriod' => 'required',



            'bbN' => 'required',
            'area3BB' => 'required',
            'areaTrue' => 'required',
            'areaTrueNew' => 'required',
            'areaAis' => 'required',
            'areaFiberNet' => 'required',
            'operatingTime' => 'required',
        ]);
        if ($validator->fails()) {
            foreach($validator->errors()->all() as $error){
                $this->notification['message'] = $error;
                $this->notification['alert_type'] = 'error';
                array_push($this->notifications,$this->notification);
            }
            return redirect()->route('building.create')->withInput($request->input())->with('notification',$this->notifications);
        }

        Building::create($request->all());
        return redirect()->route('building.index');
    }
    public function render()
    {
        return view('livewire.tableBuilding');
    }

    public function dataAjaxProjectName(Request $request )
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data =Building::select("id","projectName")
            		->where('projectName','LIKE',"%$search%")
            		->get();
        }else{
            $data =Building::select("id","projectName")->get();
        }
        return response()->json($data);
    }


    public function showBuildingList()
    {
        $data = Building::all();
        return view('tableList.projecttable', ['data' => $data]);
    }

    public function showReportAisList()
    {
        $data = Building::all();
        return view('ReportTable.aisReport', ['data' => $data]);
    }

    public function showReport3BBList()
    {
        $data = Building::all();
        return view('ReportTable.bb3Report', ['data' => $data]);
    }

    public function showReportTrueList()
    {
        $data = Building::all();
        return view('ReportTable.trueReport', ['data' => $data]);
    }

    public function showReportTotList()
    {
        $data = Building::all();
        return view('ReportTable.totReport', ['data' => $data]);
    }

    public function showReportFinetList()
    {
        $data = Building::all();
        return view('ReportTable.finetReport', ['data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
        $data = building::find($id);
        return view('building.editBuilding', ['data' => $data]);
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
            'projectName' => 'required',
            'buildingSum' => 'required',
            'floorSum' => 'required',
            'roomSum' => 'required',
            'fmCode' => 'required',

            'nameManager' => 'required',
            'phoneManager' => 'required',
            'mailManager' => 'required',
            'nameNiti' => 'required',
            'phoneNiti' => 'required',
            'mailNiti' => 'required',

            'houseNumber' => 'required',
            'squadNumber' => 'required',
            'alleyName' => 'required',
            'roadName' => 'required',
            'districtName' => 'required',
            'countyName' => 'required',
            'provinceName' => 'required',
            'postalCode' => 'required',

            'longitude' => 'required',
            'latitude' => 'required',

            'contractSell' => 'required',
            'contractDate' => 'required',
            'spendSpace' => 'required',
            'condition' => 'required',
            'contractPeriod' => 'required',



            'bbN' => 'required',
            'area3BB' => 'required',
            'areaTrue' => 'required',
            'areaTrueNew' => 'required',
            'areaAis' => 'required',
            'areaFiberNet' => 'required',
            'operatingTime' => 'required',
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->notification['message'] = $error;
                $this->notification['alert_type'] = 'error';
                array_push($this->notifications, $this->notification);
            }
            return redirect()->route('building.edit', $id)->withInput($request->input())->with('notification', $this->notifications);
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

    function fetch(Request $request)
    {
        $id = $request->get('select');
        $result = array();
        $query = DB::table('areas')
            ->join('bbns', 'areas.id', '=', 'bbns.area_id')
            ->select('bbns.name_bbn')
            ->where('areas.id', $id)
            ->groupBy('bbns.name_bbn')
            ->get();

        $output = '<option value="">เลือกพื้นที่</option>';
        foreach ($query as $row) {
            $output .= '<option value="' . $row->name_bbn . '">' . $row->name_bbn . '</option>';
        }
        echo $output;
    }

    function fetch2(Request $request)
    {
        $id = $request->get('select');
        $result = array();
        $query = DB::table('provinces')
            ->join('amphures', 'provinces.id', '=', 'amphures.province_id')
            ->select('amphures.name_th')
            ->where('provinces.id', $id)
            ->groupBy('amphures.name_th')
            ->get();

        $output = '<option value="">เลือกอำเภอของท่าน</option>';
        foreach ($query as $row) {
            $output .= '<option value="' . $row->name_th . '">' . $row->name_th . '</option>';
        }
        echo $output;
    }
}
