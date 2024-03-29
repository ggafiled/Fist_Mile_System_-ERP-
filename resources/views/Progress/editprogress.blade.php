@extends('adminlte::page')

@section('content')
    <style>
        h3 {
            font-family: Tahoma, Verdana, sans-serif;
            font-weight: bold;
        }

    </style>
    {!! Form::open(['route' => ['progress.update', $data->id], 'method' => 'put']) !!}
    {{-- {!! Form::open(['Action' => ['progressController@update',$data->id],'method'=>'PUT']) !!} --}}
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card ">
                <div class="card-header text-white bg-dark">
                    <h3>{{ __('UPDATE PROGRESS') }}</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        {!! Form::label('ลำดับ:') !!}
                                        {{-- {!! Form::text('id',$data->id,null,["class"=>"form-control"])!!} --}}
                                        {!! Form::text('id', $data->id, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        {!! Form::label('ชื่ออาคาร(Project) :') !!}
                                        {!! Form::text('buildingName', $data->buildingName, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('FM Progress :') !!}
                                        {!! Form::select('fmProgress', ['วางโครงข่ายแล้ว' => 'วางโครงข่ายแล้ว', 'รอดำเนินการ' => 'รอดำเนินการ', 'สร้างพร้อมโครงการ' => 'สร้างพร้อมโครงการ', 'รอเข้าดำเนินการ' => 'รอเข้าดำเนินการ', '-' => '']
                                        , $data->fmProgress, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('วันที่เข้าวางโครงข่าย :') !!}
                                        {!! Form::date('dateFm', $data->dateFm, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('TOT Progress :') !!}
                                        {!! Form::select('totProgress', ['เชื่อมโครงข่ายแล้ว' => 'เชื่อมโครงข่ายแล้ว', 'กำลังดำเนินการ' => 'กำลังดำเนินการ', 'ทีโอทีว่างโครงข่ายเอง' => 'ทีโอทีว่างโครงข่ายเอง', '-' => '']
                                        , $data->totProgress, ['class' => 'form-control']) !!}

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('TOT วันวางโครงข่าย :') !!}
                                        {!! Form::date('dateTot', $data->dateTot, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('AIS Progress :') !!}
                                        {!! Form::select('aisProgress', ['เชื่อมโครงข่ายแล้ว' => 'เชื่อมโครงข่ายแล้ว', 'กำลังดำเนินการ' => 'กำลังดำเนินการ', 'เอไอเอสว่างโครงข่ายเอง' => 'เอไอเอสว่างโครงข่ายเอง', '-' => '']
                                        , $data->aisProgress, ['class' => 'form-control']) !!}
                                        {{-- {!! Form::text('aisProgress',$data->aisProgress,["class"=>"form-control"])!!} --}}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('AIS วันวางโครงข่าย :') !!}
                                        {!! Form::date('dateAis', $data->dateAis, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('3BB Progress :') !!}
                                        {!! Form::select('progress3bb', ['เชื่อมโครงข่ายแล้ว' => 'เชื่อมโครงข่ายแล้ว', 'กำลังดำเนินการ' => 'กำลังดำเนินการ', 'สามบีบีว่างโครงข่ายเอง' => 'สามบีบีว่างโครงข่ายเอง', '-' => '']
                                        , $data->progress3bb, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('3BB วันวางโครงข่าย :') !!}
                                        {!! Form::date('date3BB', $data->date3BB, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('Sinet Progress :') !!}
                                        {!! Form::select('sinetProgress', ['เชื่อมโครงข่ายแล้ว' => 'เชื่อมโครงข่ายแล้ว', 'กำลังดำเนินการ' => 'กำลังดำเนินการ', 'ไซเน็ตว่างโครงข่ายเอง' => 'ไซเน็ตว่างโครงข่ายเอง', '-' => '']
                                        , $data->sinetProgress, ['class' => 'form-control']) !!}
                                        {{-- {!! Form::text('sinetProgress',$data->sinetProgress,["class"=>"form-control"])!!} --}}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('Sinet วันวางโครงข่าย :') !!}
                                        {!! Form::date('dateSinet', $data->dateSinet, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('FN Progress :') !!}
                                        {!! Form::select('fnProgress', ['เชื่อมโครงข่ายแล้ว' => 'เชื่อมโครงข่ายแล้ว', 'กำลังดำเนินการ' => 'กำลังดำเนินการ', 'เอฟเอ็นว่างโครงข่ายเอง' => 'เอฟเอ็นว่างโครงข่ายเอง', '-' => '']
                                        , $data->fnProgress, ['class' => 'form-control']) !!}
                                        {{-- {!! Form::text('fnProgress',$data->fnProgress,["class"=>"form-control"])!!} --}}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('Sinet วันวางโครงข่าย :') !!}
                                        {!! Form::date('dateFn', $data->dateFn, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('True Progress :') !!}
                                        {!! Form::select('trueProgress', ['เชื่อมโครงข่ายแล้ว' => 'เชื่อมโครงข่ายแล้ว', 'กำลังดำเนินการ' => 'กำลังดำเนินการ', 'ทรูว่างโครงข่ายเอง' => 'ทรูว่างโครงข่ายเอง', '-' => ''], $data->trueProgress, ['class' => 'form-control']) !!}
                                        {{-- {!! Form::text('trueProgress',$data->trueProgress,["class"=>"form-control"])!!} --}}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('True วันวางโครงข่าย :') !!}
                                        {!! Form::date('dateTrue', $data->dateTrue, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                            </div>
                            <input type="submit" value="อัพเดท " class="btn btn-warning">
                            <a href="/progress" class="btn btn-success my-2">กลับ</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

            @endsection
            @section('adminlte_js')
                @include('partials.notification')
                <script src=" {{ asset('js/app.js') }}"></script>
            @endsection
