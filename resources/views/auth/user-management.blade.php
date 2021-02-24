@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    @livewire('user-management')
</div>

@stop

@section('adminlte_js')
@include('partials.notification')
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
        position: relative;
        padding-top: 20px;
        display: inline-block;
    }

    .notify-badge {
        position: absolute;
        right: -6px;
        top: 12px;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        font-size: 12px;
    }

</style>
@stop
