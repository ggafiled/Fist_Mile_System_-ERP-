@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between mb-auto">
        <h2>User Management</h2>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus"></i> <span>{{ __('Add New User') }}</span>
        </button>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <h5>{{ __('List of user on systems') }}</h5>
            <div class="container-fluid mx-auto mt-2 mb-2">
                <div class="row mx-auto">
                    <table id="tableUser" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>
                                    ลำดับ
                                </th>
                                <th>
                                    รูปภาพโปรไฟล์
                                </th>
                                <th>
                                    สถานะการใช้งาน
                                </th>
                                <th>
                                    สิทธิ์การใช้งาน
                                </th>
                                <th>
                                    ชื่อผู้ใช้งาน
                                </th>
                                <th>
                                    อีเมล์
                                </th>
                                <th>
                                    การยืนยันบัญชี
                                </th>
                                <th width="10%">
                                    จัดการ
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('adminlte_js')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@stop

@section('css')
<style>
    .dataTables_filter {
        display: none;
    }

    div#tableUser_wrapper {
        width: 100% !important;
    }


</style>
@stop
