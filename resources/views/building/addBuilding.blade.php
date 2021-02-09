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
  
<div class="row justify-content-center">
    <div class="col-md">
        <div class="card ">
           
            <div class="card-header text-white bg-primary"><h3 >{{ __('ADD BUILDING') }}</h3></div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form action="{{ route('building.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            {!! Form::label('ชื่ออาคาร(Project) :') !!}
                                            {!! Form::text('building',null,["class"=>"form-control",'placeholder' => 'กรอกชื่ออาคาร.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('Fm-Code :') !!}
                                            {!! Form::text('fmCode',null,["class"=>"form-control",'placeholder' => 'กรอกโค๊ดของคุณ.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('ชื่อผู้ติดต่อ(Contact) :') !!}
                                            {!! Form::text('contactName',null,["class"=>"form-control",'placeholder' => 'ชื่อผู้ติดต่อ.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('เบอร์โทรศัพท์ :') !!}
                                            {!! Form::text('phone',null,["class"=>"form-control",'placeholder' => '123-123-1234'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('พื้นที่ น. :') !!}
                                            {!! Form::text('area',null,["class"=>"form-control",'placeholder' => 'กรอกพื้นที่.'])!!}
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('จำนวนชั้น :') !!}
                                            {!! Form::number('numberLayer',null,["class"=>"form-control",'placeholder' => 'กรอกเลขจำนวนชั้น.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('ชั้น/อาคาร :') !!}
                                            {!! Form::number('floor',null,["class"=>"form-control",'placeholder' => 'กรอกชั้นและอาคาร.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('จำนวนห้อง :') !!}
                                            {!! Form::number('roomNumber',null,["class"=>"form-control",'placeholder' => 'กรอกจำนวนห้อง.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        <div class="form-group">
                                            {!! Form::label('รายละเอียดที่อยู่ :') !!}
                                            {!! Form::text('detailAdress',null,["class"=>"form-control",'placeholder' => 'เลขที่ห้อง, บ้านเลขที่, ชื่ออาคาร, ถนน.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('เมือง/ตำบล :') !!}
                                            {!! Form::text('city',null,["class"=>"form-control",'placeholder' => 'กรอกตำบลและเมือง.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('เขต :') !!}
                                            {!! Form::text('zone',null,["class"=>"form-control",'placeholder' => 'Enter your postal code.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('จังหวัด :') !!}
                                            {!! Form::text('province',null,["class"=>"form-control"])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('รหัสไปรษณีย์ :') !!}
                                            {!! Form::number('postalCode',null,["class"=>"form-control",'placeholder' => 'Enter your postal code.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('Latitude :') !!}
                                            {!! Form::number('latitude',null,["class"=>"form-control",'placeholder' => 'กรอกพิกัด latitude.','min'=> '0','step'=>'any'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('Longtude :') !!}
                                            {!! Form::number ('longtude',null,["class"=>"form-control",'placeholder' => 'กรอกพิกัด longtude.','min'=> '0','step'=>'any'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('ราคาต่อ ตรม :') !!}
                                            {!! Form::text('priceSquare',null,["class"=>"form-control",'placeholder' => 'กรอกเลขราคา'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('เวลาในการปฏิบัติงาน :') !!}
                                            {!! Form::text('workingTime',null,["class"=>"form-control",'placeholder' => 'กรอกเวลาในการปฏิบัติงาน'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('ยอดเงิน :') !!}
                                            {!! Form::text('blance',null,["class"=>"form-control",'placeholder' => 'กรอกยอดเงิน.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('Developer :') !!}
                                            {!! Form::text('developer',null,["class"=>"form-control",'placeholder' => 'Enter your developer.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('Grade :') !!}
                                            {!! Form::text('grade',null,["class"=>"form-control",'placeholder' => 'Enter your grade.'])!!}
                                        </div>
                                    </div>
                                </div>
                           <input type="submit" value="Add Building " class="btn btn-primary">
                           <a href="/home" class="btn btn-success my-2">Back</a>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>               
   
@endsection