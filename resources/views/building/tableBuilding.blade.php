@extends('adminlte::page')

@section('content')
<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-white bg-secondary"><h3><center>{{ __('BUILDING  LIST  TABLE') }}</h3></center></div>
                <div class="card-body">
                    <a  href=""  class="btn btn-primary my-2 "> + CREATE</a>
                    <div class="table-responsive">
                    <table class="table table-striped " id="example">
                        <thead>
                            <tr class="info">
                                <th width="3%">#</th>
                                <th width="30%">Project</th>
                                <th width="5%">FmCode</th>
                                <th width="4%">พื้นที่</th>
                                <th width="30%">ที่อยู่</th>
                                <th width="5%">เขต</th>
                                <th width="10%">ชื่อผู้ติดต่อ</th>
                                <th width="6%">เบอร์โทร</th>
                                <th width="2%">จำนวนอาคาร</th>
                                <th width="2%">ชั้น/อาคาร</th>
                                <th width="2%">จำนวนห้อง</th>
                                <th width="12%">Edit</th>
                                <th width="12%">Delete</th>
                            </tr>
                        </thead>
                    </div>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
