@extends('adminlte::page')

@section('content')
    <style>
        h3 {
            font-family: Tahoma, Verdana, sans-serif;
            font-weight: bold;
        }
    </style>
    {!! Form::open(['route' => ['constarution.update', $data->id], 'method' => 'put']) !!}
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card ">
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            @csrf
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        {!! Form::label('ID') !!}
                                        {!! Form::text('id', $data->id, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('PROJECT NAME') !!}
                                        {!! Form::text('buildingName', $data->buildingName, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('DESING-BY') !!}
                                        {!! Form::text('desingBy', $data->desingBy, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('SURVEY - DESING') !!}
                                        {!! Form::select('surveyDesing', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => '']
                                        , $data->surveyDesing, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('SURVEY - DESING - DATE') !!}
                                        {!! Form::date('surveyDesingDate', $data->surveyDesingDate, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('SURVEY - DESING - DATE - BY') !!}
                                        {!! Form::time('surveyDesingDateBy', $data->surveyDesingDateBy, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>


                            <input type="submit" value="บันทึกแก้ไข " class="btn btn-primary">
                            <a href="/constarution" class="btn btn-success my-2">กลับ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {!! Form::close() !!}

@endsection
@section('adminlte_js')
    @include('partials.notification')
    <script src=" {{ asset('js/app.js') }}"></script>
@endsection
