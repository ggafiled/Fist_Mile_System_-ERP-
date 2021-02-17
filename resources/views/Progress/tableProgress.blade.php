@extends('adminlte::page')

@section('content')
<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-white bg-dark"><h3><center>{{ __('EDIT BUILDING TABLE') }}</h3></center></div>
                <div class="card-body">
                    <a  href="/building/create"  class="btn btn-primary my-2 "><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp; เพิ่มข้อมูล</a>
                    <div class="table-responsive">
                        <table class="table table-striped" id="example1">
                        <thead >
                            <tr class="info">
                                <th width="3%">#</th>
                                <th width="12%">ชื่อตึก</th>
                                <th width="5%">รหัส-fm</th>
                                <th width="5%">ชื่อผู้ติดต่อ</th>
                                <th width="5%">เบอร์โทร</th>
                                <th width="5%">เลขห้อง</th>
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
@section('adminlte_js')
<script src="{{ asset('js/app.js') }}"></script>
@endsection