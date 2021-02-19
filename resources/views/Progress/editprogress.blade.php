@extends('adminlte::page')

@section('content')
<style>
    h3 {
        font-family: Tahoma, Verdana, sans-serif;
        font-weight: bold;
    }

</style>
{!! Form::open(array('route' => array('progress.update', $data->id),'method' => 'put')) !!}
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
                                    {!! Form::text('id',$data->id,["class"=>"form-control",'disabled'])!!}
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    {!! Form::label('ชื่ออาคาร(Project) :') !!}
                                    {!! Form::text('building',$data->building,["class"=>"form-control",'disabled'])!!}
                                    {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('FM Progress :') !!}
                                    {{-- {!! Form::select('fmProgress',$data->fmProgress,['1' =>
                                    'รอดำเนินการ','2'=>'กำลังสร้างพร้อมโครงการ','3'=>'สร้างพร้อมโครงการ','4'=>'รอเข้าดำเนินการ','5'=>''],null,
                                    ['class'=>'form-control']) !!} --}}
                                    {!! Form::text('fmProgress',$data->fmProgress,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('วันที่เข้าวางโครงข่าย :') !!}
                                    {{-- {!! Form::date('dateProgress',$data->dateProgress,["class"=>"form-control"])!!} --}}
                                    {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                    {!! Form::date('dateProgress',$data->dateProgress,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('TOT Progress :') !!}
                                    {{-- {!! Form::select('totProgress',$data->totProgress,['1' =>
                                    'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null,
                                    ['class'=>'form-control']) !!} --}}
                                    {!! Form::text('totProgress',$data->totProgress,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('AIS Progress :') !!}
                                    {{-- {!! Form::select('aisProgress',$data->aisProgress,['1' =>
                                    'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null,
                                    ['class'=>'form-control']) !!} --}}
                                    {!! Form::text('aisProgress',$data->aisProgress,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('3BB Progress :') !!}
                                    {{-- {!! Form::select('Progress3bb',$data->Progress3bb,['1' =>
                                    'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null,
                                    ['class'=>'form-control']) !!} --}}
                                    {!! Form::text('Progress3bb',$data->Progress3bb,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('Sinet Progress :') !!}
                                    {{-- {!! Form::select('sinetProgress',$data->sinetProgress,['1' =>
                                    'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null,
                                    ['class'=>'form-control']) !!} --}}
                                    {!! Form::text('sinetProgress',$data->sinetProgress,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('FN Progress :') !!}
                                    {{-- {!! Form::select('fnProgress',$data->fnProgress,['1' =>
                                    'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null,
                                    ['class'=>'form-control']) !!} --}}
                                    {!! Form::text('fnProgress',$data->fnProgress,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('True Progress :') !!}
                                    {{-- {!! Form::select('trueProgress',$data->trueProgress,['1' =>
                                    'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null,
                                    ['class'=>'form-control']) !!} --}}
                                    {!! Form::text('trueProgress',$data->trueProgress,["class"=>"form-control"])!!}
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
<script src=" {{ asset('js/app.js') }}"></script>
@endsection
