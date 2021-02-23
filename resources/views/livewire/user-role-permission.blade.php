@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between mb-auto">
        <div class="header d-flex align-content-center align-items-center">
            <h2>{{ __('User Role & Permission') }}</h2>
            <span class="ml-3 ml-xs-auto text-black-50">{{ $role_count }} {{ __('Roles') }}</span>
        </div>
        <div>
            <button type="button" class="btn btn-secondary" wire:$toggle="role_count">
                <i class="fa fa-plus"></i> <span>{{ __('Add New Role') }}</span>
            </button>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <h5>{{ __('List of role on systems') }}</h5>
            <div class="container-fluid mx-auto mt-2 mb-2">
                <div class="row mx-auto justify-content-center">
                    <table id="tableRole" class="table table-bordered table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    ลำดับ
                                </th>
                                <th>
                                    ชื่อบทบาท
                                </th>
                                <th>
                                    ชื่อที่ใช้แสดง
                                </th>
                                <th>
                                    คำอธิบาย
                                </th>
                                <th>
                                    สิทธิ์การเข้าถึง
                                </th>
                                <th width="10%">
                                    จัดการ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($roles)
                                @foreach($roles as $role)
                                    <tr>
                                        <td>
                                            {{ $role->id }}
                                        </td>
                                        <td>
                                            {{ $role->name }}
                                        </td>
                                        <td>
                                            {{ $role->display_name }}
                                        </td>
                                        <td>
                                            {{ $role->description }}
                                        </td>
                                        <td>
                                            @foreach($role->permissions as $permission)
                                                <span class='badge badge-pill badge-info mr-1'>
                                                    {{ $permission->name }}
                                                </span>
                                            @endforeach
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

<<<<<<< HEAD
@section('adminlte_js')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    var table = $("#tableRole").DataTable({
    processing: true,
    serverSide: true,
    retrieve: true,
    orderCellsTop: true,
    fixedHeader: true,
    ajax: "/user_role",
    columns: [{
            className: "dt-center",
            orderable: false,
            render: function(data, type, full, meta) {
                return meta.row + 1;
            }
        },
        {
            data: "name"
        },
        {
            data: "display_name"
        },
        {
            data: "description"
        },
        {
            data: "permissions",
            render: function(data, type, row) {
                var html = "";
                $.each(data, function(i, v){
                    html += "<span class='badge badge-pill badge-info mr-1'>"+v['name']+"</span>";
                })
                return html;
            }
    },
        {
            className: "data-control",
            orderable: false,
            render: function(data, type, row) {
                return (
                    "<div class='d-flex'>" +
                    "<div class='btn btn-sm btn-delete text-danger'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'> <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/> <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/> </svg></div>" +
                    "<div class='btn btn-sm btn-edit text-warning'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'> <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/> </svg></div>" +
                    "</div>"
                );
            }
        }
    ]
});
=======
    @section('adminlte_js')
    <script>
        $(document).ready(function () {
            var table = $("#tableRole").DataTable({
                processing: true,
                serverSide: false,
                retrieve: true,
                orderCellsTop: true,
                fixedHeader: true
            });
>>>>>>> 322dea5c602838c0c594e1e81aec1d8c6b2557c5

            $("#tableRole tbody").on("click", "td.data-control .btn-delete", function (e) {
                e.preventDefault();
                var tr = $(this).closest("tr");
                var row = table.row(tr);
                var role = table.row(row).data();
                if (role != null) {
                    Swal.fire({
                        title: "{{ __('Do you want to delete this role?') }}",
                        html: "{{ __('Role name') }}:  <span class='bg-secondary rounded p-1 ml-2'>" +
                            role.display_name + "</span>",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        cancelButtonText: "{{ __('Cancel') }}",
                        confirmButtonText: "{{ __('Delete') }}",
                        focusCancel: true
                    }).then(result => {
                        if (result.value) {}
                    });
                }
            });
        });

    </script>
    @stop

        @section('css')
        <style>
            .dataTables_filter {
                display: none;
            }

            div#tableRole_wrapper {
                width: 100% !important;
            }

        </style>
        @stop
