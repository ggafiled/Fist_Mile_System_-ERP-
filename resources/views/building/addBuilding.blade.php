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
            <div class="card-header text-white bg-dark"><h>{{ __('Add Building List') }}</div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form action="{{ route('building.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            {!! Form::label('ชื่ออาคาร(Project) :') !!}
                                            <i class="fas fa-building"></i>
                                            {!! Form::text('building',null,["class"=>"form-control",'placeholder' => 'กรอกชื่ออาคาร.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('Fm-Code :') !!}
                                            <i class="fas fa-code-branch"></i>
                                            {!! Form::text('fmCode',null,["class"=>"form-control",'placeholder' => 'กรอกโค๊ดของคุณ.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('ชื่อผู้ติดต่อ(Contact) :') !!}
                                            <i class="fas fa-id-card-alt"></i>
                                            {!! Form::text('contactName',null,["class"=>"form-control",'placeholder' => 'ชื่อผู้ติดต่อ.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('เบอร์โทรศัพท์ :') !!}
                                            <i class="fas fa-phone-square-alt"></i>
                                            {!! Form::text('phone',null,["class"=>"form-control",'placeholder' => '123-123-1234'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('พื้นที่ น. :') !!}
                                            <i class="fas fa-chart-area"></i>
                                            {!! Form::text('area',null,["class"=>"form-control",'placeholder' => 'กรอกพื้นที่.'])!!}
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('จำนวนชั้น :') !!}
                                            <i class="fas fa-layer-group"></i>
                                            {!! Form::number('numberLayer',null,["class"=>"form-control",'placeholder' => 'กรอกเลขจำนวนชั้น.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('ชั้น/อาคาร :') !!}
                                            <i class="fas fa-city"></i>
                                            {!! Form::number('floor',null,["class"=>"form-control",'placeholder' => 'กรอกชั้นและอาคาร.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('จำนวนห้อง :') !!}
                                            <i class="fab fa-buromobelexperte"></i>
                                            {!! Form::number('roomNumber',null,["class"=>"form-control",'placeholder' => 'กรอกจำนวนห้อง.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        <div class="form-group">
                                            {!! Form::label('รายละเอียดที่อยู่ :') !!}
                                            <i class="fas fa-map-marked"></i>
                                            {!! Form::text('detailAdress',null,["class"=>"form-control",'placeholder' => 'เลขที่ห้อง, บ้านเลขที่, ชื่ออาคาร, ถนน.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('สัญญา :') !!}
                                            {!! Form::date('contract',null,["class"=>"form-control"])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('วันลงนามสัญญา :') !!}
                                            {!! Form::date('contracttime',null,["class"=>"form-control"])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('เมือง/ตำบล :') !!}
                                            <i class="fas fa-city"></i>
                                            {!! Form::text('city',null,["class"=>"form-control",'placeholder' => 'กรอกตำบลและเมือง.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('เขต :') !!}
                                            <i class="fas fa-map"></i>
                                            {!! Form::text('zone',null,["class"=>"form-control",'placeholder' => 'กรอกเขต'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('จังหวัด :') !!}

                                            {!! Form::text('province',null,["class"=>"form-control",'placeholder' => 'กรอกจังหวัด'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('รหัสไปรษณีย์ :') !!}
                                            {!! Form::number('postalCode',null,["class"=>"form-control",'placeholder' => 'กรอกรหัสไปรษณีย์'])!!}
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
                                            <i class="fas fa-user-clock"></i>
                                            {!! Form::text('workingTime',null,["class"=>"form-control",'placeholder' => 'กรอกเวลาในการปฏิบัติงาน'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('ยอดเงิน :') !!}
                                            <i class="fas fa-money-bill-alt"></i>
                                            {!! Form::text('blance',null,["class"=>"form-control",'placeholder' => 'กรอกยอดเงิน.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('Developer :') !!}
                                            <i class="fas fa-laptop-code"></i>
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
                           <input type="submit" value="เพิ่มข้อมูล" class="btn btn-primary" method="POST">
                           @csrf @method('POST')
                           <a href="/home" class="btn btn-success my-2">กลับ</a>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection
