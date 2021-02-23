@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-between mb-auto">
        <div class="header d-flex align-content-center align-items-center">
            <h2>{{ __('User Management') }}</h2>
            <span class="ml-3 ml-xs-auto text-black-50">{{ count(\App\Models\User::get())}} {{ __('People') }}</span>
        </div>
        <div>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i> <span>{{ __('Add New User') }}</span>
            </button>
        </div>
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
                        <tbody>
                            @if($users)
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->id }}
                                        </td>
                                        <td class="dt-center">
                                            <div class="item">
                                            @if($user->image == null || $user->image.trim() == "")
                                                @if($user->isOnline())
                                                    <span class="notify-badge"><i class='fas fa-circle text-success'> </i></span>
                                                @else
                                                    <span class="notify-badge"><i class='fas fa-circle text-secondary'> </i></span>
                                                @endif                                                    <img src="/image/noimage.jpg" class="rounded mw-100" width="48px" height="48px"/>
                                            @else
                                                @if($user->isOnline())
                                                    <span class="notify-badge"><i class='fas fa-circle text-success'> </i></span>
                                                @else
                                                    <span class="notify-badge"><i class='fas fa-circle text-secondary'> </i></span>
                                                @endif
                                                <img src="{{ $user->image }}" class="rounded mw-100" width="48px" height="48px"/> 
                                            @endif
                                        </div>
                                        </td>
                                        <td>
                                            {{ $user->roles()->value('display_name') }}
                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            @if($user->email_verified_at == null || $user->email_verified_at.trim() == "") 
                                                <div class='badge badge-warning'>ยังไม่ได้ยืนยันบัญชี</div>
                                            @else
                                                <div class='badge badge-success'>ยืนยันบัญชีแล้ว</div>
                                            @endif
                                        </td>
                                        <td width="10%">
                                            <div class='d-flex'>
                                                <div class='btn btn-sm btn-delete text-danger' wire:click="click">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'
                                                        fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                                        <path
                                                            d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z' />
                                                        <path fill-rule='evenodd'
                                                            d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z' />
                                                    </svg></div>
                                                <div class='btn btn-sm btn-edit text-warning'>
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'
                                                        fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                                        <path
                                                            d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z' />
                                                    </svg></div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('adminlte_js')
<script>
$(document).ready(function () {
            var table = $("#tableUser").DataTable({
                processing: true,
                serverSide: false,
                retrieve: true,
                orderCellsTop: true,
                fixedHeader: true
            });
});
</script>
@stop

@section('css')
<style>
    .dataTables_filter {
        display: none;
    }

    div#tableUser_wrapper {
        width: 100% !important;
    }
    .item {
    position:relative;
    padding-top:20px;
    display:inline-block;
    }
    .notify-badge{
        position: absolute;
        right:-6px;
        top:12px;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        font-size:12px;
    }


</style>
@stop
