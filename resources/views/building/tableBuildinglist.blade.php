@extends('adminlte::page')
@section('content')
<style>
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }

    div.dataTables_wrapper {
        width: 4500px;
        margin: 0 auto;
    }

    th {
        white-space: nowrap;
    }

	div.dataTables_wrapper {
		width: 4500px;
		margin: 0 auto;
	}
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    th { white-space: nowrap; }

</style>

<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-white bg-dark">
                <h3>
                    <center>{{ __('BUILDING LIST TABLE') }}
                </h3>
                </center>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="example" style="width:100%">
                        <thead>
                            <tr class="info" 
                            >
                                <th width="3%">#</th>
                                <th>อาคาร</th>
                                <th>fm-code</th>
                                <th>ชื่อผู้ติดต่อ</th>
                                <th>เบอร์โทร</th>
                                <th width="1%">พื้นที่ น.</th>
                                <th width="1%">จำนวนอาคาร</th>
                                <th width="1%">ชั้น</th>
                                <th width="1%">ห้อง</th>
                                <th>ที่อยู่</th>
                                <th>สัญญา</th>
                                <th>วันลงนามสัญญา</th>
                                <th>เมือง</th>
                                <th>เขต</th>
                                <th>จังหวัด</th>
                                <th>รหัสไปรษณีย์</th>
                                <th>Latitude</th>
                                <th>Longtude </th>
                                <th>ราคาต่อ ตรม </th>
                                <th>เวลาในการปฏิบัติงาน </th>
                                <th>ยอดเงิน </th>
                                <th>Developer </th>
                                <th>Grade </th>
                            </tr>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>อาคาร</th>
                                <th>fm-code</th>
                                <th>ชื่อผู้ติดต่อ</th>
                                <th>เบอร์โทร</th>
                                <th>พื้นที่ น.</th>
                                <th>จำนวนอาคาร</th>
                                <th>ชั้น</th>
                                <th>ห้อง</th>
                                <th>ที่อยู่</th>
                                <th>สัญญา</th>
                                <th>วันลงนามสัญญา</th>
                                <th>เมือง</th>
                                <th>เขต</th>
                                <th>จังหวัด</th>
                                <th>รหัสไปรษณีย์</th>
                                <th>Latitude</th>
                                <th>Longtude </th>
                                <th>ราคาต่อ ตรม </th>
                                <th>เวลาในการปฏิบัติงาน </th>
                                <th>ยอดเงิน </th>
                                <th>Developer </th>
                                <th>Grade </th>
                            </tr>
                        </tfoot>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{$row->id}}</th>
                                <td>{{$row->buildingId}}</td>
                                <td>{{$row->fmCode}}</td>
                                <td>{{$row->contactName}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->area}}</td>
                                <td>{{$row->numberLayer}}</td>
                                <td>{{$row->floor}}</td>
                                <td>{{$row->roomNumber}}</td>
                                <td>{{$row->detailAdress}}</td>
                                <td>{{$row->contract}}</td>
                                <td>{{$row->contracttime}}</td>
                                <td>{{$row->city}}</td>
                                <td>{{$row->zone}}</td>
                                <td>{{$row->province}}</td>
                                <td>{{$row->postalCode}}</td>
                                <td>{{$row->latitude}}</td>
                                <td>{{$row->longtude}}</td>
                                <td>{{$row->priceSquare}}</td>
                                <td>{{$row->workingTime}}</td>
                                <td>{{$row->blance}}</td>
                                <td>{{$row->developer}}</td>
                                <td>{{$row->grade}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection

@section('adminlte_js')
<script src="{{ asset('js/app.js') }}"></script>
@endsection
