@extends('adminlte::page')

@section('content')
<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-white bg-dark"><h4><center>{{ __('EDIT BUILDING TABLE') }}</h4></center></div>
                <div class="card-body">
                    <a  href="/building/create"  class="btn btn-primary my-2 "><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp; เพิ่มข้อมูล</a>
                    <div class="table-responsive">
                        <table class="table table-striped" id="example1">
                        <thead >
                            <tr class="info">
                                <th width="1%">#</th>
                                <th width="12%">ชื่อตึก</th>
                                <th width="5%">รหัส-fm</th>
                                <th width="5%">ชื่อผู้ติดต่อ</th>
                                <th width="5%">เบอร์โทร</th>
                                <th width="1%">แก้ไข</th>
                                @role('superadministrator')
                                <th width="1%">ลบ</th>
                                @endrole
                            </tr>
                        </thead>
                    </div>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                             <th scope="row">{{$row->id}}</th>
                             <td>{{$row->buildingId}}</td>
                             <td>{{$row->fmCode}}</td>
                             <td>{{$row->contactName}}</td>
                             <td>{{$row->phone}}</td>
                             <td>
                                <form action="{{ route('building.edit',$row->id) }}" method="PUT">
                                    @csrf @method('HEAD')
                                  <input type="submit" value='แก้ไข'  " class="btn btn-warning ">
                                </form>
                            </td>
                            @role('superadministrator')
                            <td>
                                <form action="{{route('building.destroy',$row->id)}}" method="post">
                                    @csrf @method('DELETE')
                                  <input type="submit" value='ลบ'  data-name="{{$row->projecct}}" class="btn btn-danger deleteForm"
                                  onclick="return confirm('คุณต้องการลบข้อมูล {{$row->name}} ?')">
                                </form>
                            </td>
                            @endrole
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

@section('adminlte_js')
<script>
   $(document).ready(function() {
                        $("#example1").DataTable({
                            lengthMenu: [
                                [10, 25, 50, -1],
                                [10, 25, 50, "All"]
                            ]
                        });
                    });
</script>
@stop
@endsection


