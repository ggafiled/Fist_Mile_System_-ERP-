@extends('adminlte::page')

@section('content')
<style>
    h3 {
        font-family: Tahoma, Verdana, sans-serif;
        font-weight: bold;
      }
</style>
<ul>
    @if ($errors->all())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>
           {{$error}}
        </li>
      @endforeach
    </ul>
    @endif
</ul>
{!! Form::open(['Action' => 'BuildingController@store','method'=>'POST']) !!}
    
<div class="row justify-content-center">
    <div class="col-md">
        <div class="card ">
           
            <div class="card-header text-white bg-primary"><h3 >{{ __('ADD BUILDING') }}</h3></div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form>
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            {!! Form::label('ชื่ออาคาร(Project) :') !!}
                                            {!! Form::text('building',null,["class"=>"form-control",'placeholder' => 'กรอกชื่ออาคาร.'])!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('สำรวจออกแบบ :') !!}
                                            {{-- {!! Form::text('building',null,["class"=>"form-control",'placeholder' => 'กรอกชื่ออาคาร.'])!!} --}}
                                            {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ'],null, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('Wall Box :') !!}
                                            {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ'],null, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('Micro Duct :') !!}
                                            {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ'],null, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('ICRO Duct :') !!}
                                            {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ'],null, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('Fm-Code :') !!}
                                            {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ'],null, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('สัญญา :') !!}
                                            {!! Form::text('',null,["class"=>"form-control",'placeholder' => 'กรอกสัญญา.'])!!}
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-group">
                                            {!! Form::label('วันที่ลงนามในสัญญา :') !!}
                                            {!! Form::date('building',null,["class"=>"form-control",'placeholder' => 'กรอกชื่ออาคาร.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            {!! Form::label('วันที่เข้าวางโครงข่าย :') !!}
                                            {!! Form::date('building',null,["class"=>"form-control",'placeholder' => 'กรอกชื่ออาคาร.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            {!! Form::label('Fm Progress :') !!}
                                            {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ'],null, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    
                                </div>
                               
                </div>
             </div>
        </div>
    </div>
    {!! Form::close() !!}  
</div>               
   
@endsection