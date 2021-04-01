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
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('ID') !!}
                                        {!! Form::text('id', $data->id, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Building Name') !!}
                                        {!! Form::text('buildingId', $data->buildingId, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('Tower') !!}
                                        {!! Form::text('numberLayer', $data->numberLayer, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('Floor') !!}
                                        {!! Form::text('floor', $data->floor, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('Room') !!}
                                        {!! Form::text('roomNumber', $data->roomNumber, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Survey&Desing') !!}
                                        {!! Form::select('exploreDesign', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->exploreDesign, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('SurveyBy') !!}
                                        {!! Form::text('exploreDesignTeam', $data->exploreDesignTeam, ['class' => 'form-control', 'placeholder' => 'Enter your floor.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('SurveyDate') !!}
                                        {!! Form::date('exploreDesignDate', $data->exploreDesignDate, ['class' => 'form-control', 'placeholder' => 'Enter your room.']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('SurveyPlan') !!}
                                        {!! Form::select('exploreDesignBy', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->exploreDesignBy, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('SurveyPlanDate') !!}
                                        {!! Form::date('exploreDesignDateBy', $data->exploreDesignDateBy, ['class' => 'form-control', 'placeholder' => 'Enter your room.']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('IFCC') !!}
                                        {!! Form::select('ifcc', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->ifcc, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('InstalledBy') !!}
                                        {!! Form::text('ifccTeam', $data->ifccTeam, ['class' => 'form-control', 'placeholder' => 'Enter your floor.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('InstallDate') !!}
                                        {!! Form::date('ifccDate', $data->ifccDate, ['class' => 'form-control', 'placeholder' => 'Enter your room.']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Wallbox') !!}
                                        {!! Form::select('wallBox', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->wallBox, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('WallBoxTeam') !!}
                                        {!! Form::text('wallBoxTeam', $data->wallBoxTeam, ['class' => 'form-control', 'placeholder' => 'Enter your floor.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('WallBoxDate') !!}
                                        {!! Form::date('wallBoxDate', $data->wallBoxDate, ['class' => 'form-control', 'placeholder' => 'Enter your room.']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Microduct(vertical)') !!}
                                        {!! Form::select('microductD', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->microductD, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('InstalledBy') !!}
                                        {!! Form::text('microductTeamD', $data->microductTeamD, ['class' => 'form-control', 'placeholder' => 'Enter your floor.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('InstallDate') !!}
                                        {!! Form::date('microductDateD', $data->microductDateD, ['class' => 'form-control', 'placeholder' => 'Enter your room.']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Microduct(diagonal)') !!}
                                        {!! Form::select('microductK', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => ''], $data->microductK, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('InstalledBy') !!}
                                        {!! Form::text('microductTeamK', $data->microductTeamK, ['class' => 'form-control', 'placeholder' => 'Enter your floor.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('InstallDate') !!}
                                        {!! Form::date('microductDateK', $data->microductDateK, ['class' => 'form-control', 'placeholder' => 'Enter your room.']) !!}
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
