@extends('adminlte::page')

@section('content')
    <style>

    </style>
    <ul>
        @if ($errors->all())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
    </ul>
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card ">
                {{-- <div class="card-header text-white bg-dark">
                    <h>{{ __('CREATE PROJECT') }}
                </div> --}}
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form action="{{ route('progress.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>PROJECT NAME</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                                placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>BUILDING UNIT</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                                placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>FLOOR</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                                placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>ROOM</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                                placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        @section('adminlte_js')

        @stop
    @endsection
