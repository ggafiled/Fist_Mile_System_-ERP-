@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    @livewire('user-role-permission')
</div>
@stop

@section('adminlte_js')
@include('partials.notification')
<script>
    $(document).ready(function () {
        var table = $("#tableRole").DataTable({
            processing: true,
            serverSide: false,
            retrieve: true,
            orderCellsTop: true,
            fixedHeader: true
        });

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
