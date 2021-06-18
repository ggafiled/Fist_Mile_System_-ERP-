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
                                        {!! Form::text('projectName', $data->projectName, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('DESING-BY') !!}
                                        {!! Form::select('desingBy', ['คุณรดา' => 'คุณรดา', 'คณโจ' => 'คณโจ', 'คุณเบล' => 'คุณเบล', 'คุณเพชร' => 'คุณเพชร', 'คุณโอ๋' => 'คุณโอ๋', 'คุณพล' => 'คุณพล', 'คุณป้ย' => 'คุณป้ย', 'คุณแขก' => 'คุณแขก', 'คุณเต้' => 'คุณเต้', 'คุณใหม่' => 'คุณใหม่'], $data->desingBy, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('SURVEY - DESING') !!}
                                        {!! Form::select('surveyDesing', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->surveyDesing, ['class' => 'form-control']) !!}
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

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('IFCC') !!}
                                        {!! Form::select('ifcc', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->ifcc, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('IFCC - DATE') !!}
                                        {!! Form::date('ifccDate', $data->ifccDate, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('WALLBOX') !!}
                                        {!! Form::select('wallBox', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->wallBox, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('WALLBOX - DATE') !!}
                                        {!! Form::date('wallBoxDate', $data->wallBoxDate, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('TYPE') !!}
                                        {!! Form::select('type', ['microduct' => 'Microduct', 'fiber' => 'Fiber'], $data->type, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('MICRODUCT (แนวดิ่ง)') !!}
                                        {!! Form::select('microductD', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->microductD, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('MICRODUCT - DATE (แนวดิ่ง)') !!}
                                        {!! Form::date('microductDateD', $data->microductDateD, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('MICRODUCT (แนวขว้าง)') !!}
                                        {!! Form::select('microductK', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->microductK, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('MICRODUCT - DATE (แนวขว้าง)') !!}
                                        {!! Form::select('microductDateK', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->microductDateK, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('FIBER - CONVERTION') !!}
                                        {!! Form::select('fiberConvertion', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->fiberConvertion, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('FIBER - CONVERTION - DATA') !!}
                                        {!! Form::date('microductDateD', $data->microductDateD, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('MICRODUCT (แนวขว้าง)') !!}
                                        {!! Form::select('microductK', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->microductK, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('BLOW') !!}
                                    {!! Form::select('blow', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->blow, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('SPLICE') !!}
                                    {!! Form::select('splice', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->splice, ['class' => 'form-control']) !!}
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
