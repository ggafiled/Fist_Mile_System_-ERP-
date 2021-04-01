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
                                    {!! Form::label('BUILDING NAME') !!}
                                    {!! Form::text('building',$data->buildingId,["class"=>"form-control"])!!}
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
                                    {!! Form::label('CONTACT NAME') !!}
                                    {!!
                                    Form::text('contactName',$data->contactName,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('PHONE NUMBER') !!}
                                    {!! Form::text('phone',$data->phone,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    {!! Form::label('AREA') !!}
                                    {!! Form::text('area',$data->area,["class"=>"form-control",'placeholder' => 'Enter
                                    your area.'])!!}
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('BUILDING NUMBER') !!}
                                    {!!
                                    Form::number('numberLayer',$data->numberLayer,["class"=>"form-control",'placeholder'
                                    => 'Enter your number layer.'])!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('FLOOR') !!}
                                    {!! Form::number('floor',$data->floor,["class"=>"form-control",'placeholder' =>
                                    'Enter your floor.'])!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('ROOM NUMBER') !!}
                                    {!!
                                    Form::number('roomNumber',$data->roomNumber,["class"=>"form-control",'placeholder'
                                    => 'Enter your room.'])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    {!! Form::label('ADDRESS') !!}
                                    {!!
                                    Form::text('detailAdress',$data->detailAdress,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('CONTRACT') !!}
                                    {!! Form::date('contract',$data->contract,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    {!! Form::label('CONTRACT DATE') !!}
                                    {!! Form::date('contracttime',$data->contracttime,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('PROVINCE') !!}
                                    {!! Form::text('province',$data->province,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('CITY') !!}
                                    {!! Form::text('city',$data->city,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('POSTAL CODE') !!}
                                    {!!
                                    Form::number('postalCode',$data->postalCode,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('ZONE') !!}
                                    {!! Form::text('zone',$data->zone,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('Latitude :') !!}
                                    {!! Form::number('latitude',$data->latitude,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('Longtude :') !!}
                                    {!! Form::number('longtude',$data->longtude,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('PRICE SQM') !!}
                                    {!!
                                    Form::text('priceSquare',$data->priceSquare,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('OPERATING TIME') !!}
                                    {!!
                                    Form::text('workingTime',$data->workingTime,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('BALANCE') !!}
                                    {!! Form::text('blance',$data->blance,["class"=>"form-control"])!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('DEVELOER :') !!}
                                    {!! Form::text('developer',$data->developer,["class"=>"form-control"])!!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('GRADE') !!}
                                    {!! Form::text('grade',$data->grade,["class"=>"form-control"])!!}
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
