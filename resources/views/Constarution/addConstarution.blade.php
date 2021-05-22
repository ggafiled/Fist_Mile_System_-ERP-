@extends('adminlte::page')

@section('content')
    <style>
        /* h3 {
                                                font-family: Tahoma, Verdana, sans-serif;
                                                font-weight: bold;
                                              } */

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
    {{-- <h3>{{ __('CREATE  PROJECT FORM') }}</h3> --}}
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card ">
                {{-- <div class="card-header text-white bg-dark">
                    <h>{{ __('CREATE PROJECT') }}
                </div> --}}
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form action="{{ route('building.store') }}" method="POST">
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
                                            <label>surveyDesing</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>surveyDesingDate</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>surveyDesingDateBy</label>
                                        <input type="text" class="form-control" name="building_id" id="building_id"
                                        placeholder="ชื่อโปรเจ็ค">
                                    </div>
                                </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>ifcc</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>ifccDate</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>wallBox</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>wallBoxDate</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>type</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>microductD</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>microductDateD</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>microductK</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>microductDateK</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>fiberConvertion</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>fiberConvertionDateD</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>blow</label>
                                            <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>splice</label>
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
    <script type="text/javascript">

    </script>
@stop
@endsection
