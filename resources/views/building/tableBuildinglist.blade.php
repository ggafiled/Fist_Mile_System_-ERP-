@extends('adminlte::page')

@section('content')

<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-white bg-info"><h3><center>{{ __('BUILDING LIST TABLE') }}</h3></center></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr class="info">
                                <th width="2%">#</th>
                                <th width="15%">ชื่อตึก</th>
                                <th width="7%">รหัส-fm</th>
                                <th width="8%">ชื่อผู้ติดต่อ</th>
                                <th width="10%">เบอร์โทร</th>
                                <th width="13%">ที่อยู่</th>
                                <th width="5%">เขต</th>
                                <th width="5%">จังหวัด</th>
                                <th width="5%">รหัสไปรษณีย์</th>
                                <th width="2%">จำนวนอาคาร</th>
                                <th width="2%">ชั้น</th>
                                <th width="2%">ห้อง</th>
                            </tr>
                        </thead>
                    </div>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                             <th scope="row">{{$row->id}}</th>
                             <td>{{$row->building}}</td>
                             <td>{{$row->fmCode}}</td>
                             <td>{{$row->contactName}}</td>
                             <td>{{$row->phone}}</td>
                             <td>{{$row->detailAdress}}</td>
                             <td>{{$row->zone}}</td>
                             <td>{{$row->province}}</td>
                             <td>{{$row->postalCode}}</td>
                             <td>{{$row->numberLayer}}</td>
                             <td>{{$row->floor}}</td>
                             <td>{{$row->roomNumber}}</td>
                             
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
@endsection
