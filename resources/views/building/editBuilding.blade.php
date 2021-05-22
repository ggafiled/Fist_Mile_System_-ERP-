@extends('adminlte::page')

@section('content')
<style>
    h3 {
        font-family: Tahoma, Verdana, sans-serif;
        font-weight: bold;
    }

</style>
{{-- <ul>
    @if($errors->all())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
</ul> --}}
{!! Form::open(array('route' => array('building.update', $data->id),'method' => 'put')) !!}
{{-- {!! Form::open(['Action' => ['BuildingController@update',$data->id],'method'=>'PUT']) !!} --}}
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
                                    {!! Form::text('id',$data->id,["class"=>"form-control",'disabled'])!!}
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    {!! Form::label('PROJECT NAME') !!}
                                    {!! Form::text('BuildingName',$data->BuildingName,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('Fm-Code') !!}
                                    {!! Form::text('fmCode',$data->fmCode,["class"=>"form-control",'placeholder' =>
                                    'Enter your code.'])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('JURISTIC PERSON NAME') !!}
                                    {!!
                                    Form::text('nameNiti',$data->nameNiti,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('PHONE NUMBER') !!}
                                    {!! Form::tel('phoneNiti',$data->phoneNiti,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('EMAIL') !!}
                                    {!! Form::text('mailNiti',$data->mailNiti,["class"=>"form-control",'placeholder' => 'Enter
                                    your area.'])!!}
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('MANAGER NAME') !!}
                                    {!!
                                    Form::text('nameManager',$data->nameManager,["class"=>"form-control",'placeholder'
                                    => 'Enter your number layer.'])!!}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('PHONE NUMBER') !!}
                                    {!! Form::tel('phoneManager',$data->phoneManager,["class"=>"form-control",'placeholder' =>
                                    'Enter your phoneManager.'])!!}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('EMAIL') !!}
                                    {!!
                                    Form::text('mailManager',$data->mailManager,["class"=>"form-control",'placeholder'
                                    => 'Enter your room.'])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('HOUSE NUMBER') !!}
                                    {!!
                                    Form::number('houseNumber',$data->houseNumber,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('VILLAGE') !!}
                                    {!! Form::number('squadNumber',$data->squadNumber,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('ALLEY') !!}
                                    {!! Form::text('alleyName',$data->alleyName,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('ROAD') !!}
                                    {!! Form::text('roadName',$data->roadName,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('DISTRICT') !!}
                                    {!! Form::text('districtName',$data->districtName,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('PROVINCE') !!}
                                    {!! Form::text('provinceName',$data->provinceName,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('COUNTY') !!}
                                    {!! Form::text('countyName',$data->countyName,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('POSTAL CODE') !!}
                                    {!!
                                    Form::text('postalCode',$data->postalCode,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('SALL CONTACT') !!}
                                    {!! Form::text('contractSell',$data->contractSell,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('CONTRACT SIGNING DATE') !!}
                                    {!! Form::date('contractDate',$data->contractDate,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('CONTRACT SIGNING TIME') !!}
                                    {!! Form::time('contractTime',$data->contractTime,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('CONTRACT MODEL') !!}
                                    {!!
                                    Form::text('spendSpace',$data->spendSpace,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('COMPENSATION') !!}
                                    {!!
                                    Form::text('condition',$data->condition,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('CONTRACT PERIOD') !!}
                                    {!! Form::date('contractPeriod',$data->contractPeriod,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('CONTRACT START DATE') !!}
                                    {!! Form::date('contractStartDate',$data->contractStartDate,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('CONTRACT EXPIRATION DATE') !!}
                                    {!! Form::date('contractExpirationDate',$data->contractExpirationDate,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('TECHINCIAN TEAM') !!}
                                    {!! Form::text('team',$data->team,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('TECHINCIAN NAME') !!}
                                    {!! Form::text('nameTechnician',$data->nameTechnician,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('TECHINCIAN PHONE') !!}
                                    {!! Form::tel('phoneTechnician',$data->phoneTechnician,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('TECHINCIAN MAIL') !!}
                                    {!! Form::email('mailTechnicianName',$data->mailTechnicianName,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    {!! Form::label('AREA') !!}
                                    {!! Form::text('areaN',$data->areaN,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('B.B.N.') !!}
                                    {!! Form::text('bbN',$data->bbN,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('AREA 3BB') !!}
                                    {!! Form::text('area3BB',$data->area3BB,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('AREA TRUE') !!}
                                    {!! Form::text('areaTrue',$data->areaTrue,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('OPERATING TIME') !!}
                                    {!! Form::text('operatingTime',$data->operatingTime,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="บันทึกแก้ไข " class="btn btn-primary">
                        <a href="/building" class="btn btn-success my-2">กลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
</div>

@endsection

@section('adminlte_js')
        @include('partials.notification')
@endsection
