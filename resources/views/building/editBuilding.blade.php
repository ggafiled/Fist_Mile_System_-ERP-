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
{!! Form::open(['Action' => "{{route('building.update', ['id'=>$data->id])}}",'method'=>'PUT']) !!}
    
<div class="row justify-content-center">
    <div class="col-md">
        <div class="card ">
           
            <div class="card-header text-white bg-primary"><h3 >{{ __('Eidt BUILDING') }}</h3></div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form>
                                @csrf
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            {!! Form::label('Building Name :') !!}
                                            {!! Form::text('building',$data->building,["class"=>"form-control",'placeholder' => 'Enter your building.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('Fm-Code :') !!}
                                            {!! Form::text('fmCode',$data->fmCode,["class"=>"form-control",'placeholder' => 'Enter your code.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('Contact Name :') !!}
                                            {!! Form::text('contactName',$data->contactName,["class"=>"form-control",'placeholder' => 'Enter contact name.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Phone :') !!}
                                            {!! Form::text('phone',$data->phone,["class"=>"form-control",'placeholder' => 'xxx-xxx-xxxx.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('Area :') !!}
                                            {!! Form::text('area',$data->area,["class"=>"form-control",'placeholder' => 'Enter your area.'])!!}
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Number Layer :') !!}
                                            {!! Form::number('numberLayer',$data->numberLayer,["class"=>"form-control",'placeholder' => 'Enter your number layer.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Floor :') !!}
                                            {!! Form::number('floor',$data->floor,["class"=>"form-control",'placeholder' => 'Enter your floor.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Room Number :') !!}
                                            {!! Form::number('roomNumber',$data->roomNumber,["class"=>"form-control",'placeholder' => 'Enter your room.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        <div class="form-group">
                                            {!! Form::label('Detail Adress :') !!}
                                            {!! Form::text('detailAdress',$data->detailAdress,["class"=>"form-control",'placeholder' => 'Unit number, house number, building, street name.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Province :') !!}
                                            {!! Form::text('province',$data->province,["class"=>"form-control",'placeholder' => 'Enter your province..'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('City :') !!}
                                            {!! Form::text('city',$data->city,["class"=>"form-control",'placeholder' => 'Enter your city.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Postal Code :') !!}
                                            {!! Form::number('postalCode',$data->postalCode,["class"=>"form-control",'placeholder' => 'Enter your postal code.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Zone :') !!}
                                            {!! Form::text('zone',$data->zone,["class"=>"form-control",'placeholder' => 'Enter your zone.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Latitude :') !!}
                                            {!! Form::number('latitude',$data->latitude,["class"=>"form-control",'placeholder' => 'Enter your latitude.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Longtude :') !!}
                                            {!! Form::number('longtude',$data->longtude,["class"=>"form-control",'placeholder' => 'Enter your longtude.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Price Square :') !!}
                                            {!! Form::text('priceSquare',$data->priceSquare,["class"=>"form-control",'placeholder' => 'Enter your price.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Working Time :') !!}
                                            {!! Form::text('workingTime',$data->workingTime,["class"=>"form-control",'placeholder' => 'Enter your latitude.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Balance :') !!}
                                            {!! Form::text('blance',$data->blance,["class"=>"form-control",'placeholder' => 'Enter your balance.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('Developer :') !!}
                                            {!! Form::text('developer',$data->developer,["class"=>"form-control",'placeholder' => 'Enter your developer.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('Grade :') !!}
                                            {!! Form::text('grade',$data->grade,["class"=>"form-control",'placeholder' => 'Enter your grade.'])!!}
                                        </div>
                                    </div>
                                </div>
                           <input type="submit" value="update Building " class="btn btn-primary">
                           <a href="/home" class="btn btn-success my-2">Back</a>
                    </div>
                </div>
             </div>
        </div>
    </div>
    {!! Form::close() !!}  
</div>               
   
@endsection