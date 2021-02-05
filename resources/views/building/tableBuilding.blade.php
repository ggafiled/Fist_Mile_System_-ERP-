@extends('adminlte::page')

@section('content')

<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-white bg-dark"><h3><center>{{ __('EDIT BUILDING TABLE') }}</h3></center></div>
                <div class="card-body">
                    <a  href="/add_building"  class="btn btn-primary my-2 "> + CREATE</a>
                    <div class="table-responsive">
                        <table class="table table-striped" id="example1">
                        <thead >
                            <tr class="info">
                                <th width="3%">#</th>
                                <th width="12%">ชื่อตึก</th>
                                <th width="5%">รหัส-fm</th>
                                <th width="10%">ชื่อผู้ติดต่อ</th>
                                <th width="8%">เบอร์โทร</th>
                                {{-- <th width="10%">ที่อยู่</th> --}}
                                <th width="8%">แก้ไข/ลบ</th>
                                {{-- <th width="5%">เขต</th>
                                <th width="10%">จำนวนอาคาร</th>
                                <th width="6%">ชั้น</th>
                                <th width="2%">ห้อง</th>
                                <th width="2%">รายละเอียดที่อยู่</th>
                                <th width="2%">จังหวัด</th>
                                <th width="12%">เมือง/ตำบล</th>
                                <th width="12%">รหัสไปรณี</th> --}}
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
                             {{-- <td>{{$row->detailAdress}}</td> --}}
                             <td>
                                {{-- <form action="" method="post">{{ Route('Building.Edit',$row->id) }} --}}
                                    <a href="{{ Route('Building.edit',$row->id) }}" class="btn btn-success" >Edit</a>
                                    {{-- {{ route('Building.destroy',$row->id) }} --}}
                                    <a href="" class="btn btn-danger deleteForm">Delete</a>
                                {{-- </form> --}}
                            </td>
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
