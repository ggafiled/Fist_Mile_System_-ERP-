@extends('adminlte::page')

@section('content')
<style>
    h3 {
        font-family: Tahoma, Verdana, sans-serif;
        font-weight: bold;
      }
</style>
{!! Form::open(['Action' => 'addBuildingController@store','method'=>'POST']) !!}
    <div class="row justify-content-center">
    <div class="col-md">
        <div class="card ">
            <div class="card-header text-white bg-secondary"><h3 >{{ __('ADD BUILDING') }}</h3></div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form>
                                @csrf
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            {!! Form::label('Building Name :') !!}
                                            {!! Form::text('building',null,["class"=>"form-control",'placeholder' => 'Enter your building.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('Fm-Code :') !!}
                                            {!! Form::text('fmCode',null,["class"=>"form-control",'placeholder' => 'Enter your code.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('Contact Name :') !!}
                                            {!! Form::text('contactName',null,["class"=>"form-control",'placeholder' => 'Enter contact name.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Phone :') !!}
                                            {!! Form::text('phone',null,["class"=>"form-control",'placeholder' => 'xxx-xxx-xxxx.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('Area :') !!}
                                            {!! Form::text('area',null,["class"=>"form-control",'placeholder' => 'Enter your area.'])!!}
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Number Layer :') !!}
                                            {!! Form::text('numberLayer',null,["class"=>"form-control",'placeholder' => 'Enter your number layer.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Floor :') !!}
                                            {!! Form::text('floor',null,["class"=>"form-control",'placeholder' => 'Enter your floor.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Room Number :') !!}
                                            {!! Form::text('roomNumber',null,["class"=>"form-control",'placeholder' => 'Enter your room.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        <div class="form-group">
                                            {!! Form::label('Detail Adress :') !!}
                                            {!! Form::text('detailAdress',null,["class"=>"form-control",'placeholder' => 'Unit number, house number, building, street name.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Province :') !!}
                                            {!! Form::text('province',null,["class"=>"form-control",'placeholder' => 'Enter your province..'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('City :') !!}
                                            {!! Form::text('city',null,["class"=>"form-control",'placeholder' => 'Enter your city.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Postal Code :') !!}
                                            {!! Form::text('postalCode',null,["class"=>"form-control",'placeholder' => 'Enter your postal code.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Zone :') !!}
                                            {!! Form::text('zone',null,["class"=>"form-control",'placeholder' => 'Enter your zone.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Latitude :') !!}
                                            {!! Form::text('latitude',null,["class"=>"form-control",'placeholder' => 'Enter your latitude.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Longtude :') !!}
                                            {!! Form::text('longtude',null,["class"=>"form-control",'placeholder' => 'Enter your longtude.'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Price Square :') !!}
                                            {!! Form::text('priceSquare',null,["class"=>"form-control",'placeholder' => 'Enter your price.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Working Time :') !!}
                                            {!! Form::text('workingTime',null,["class"=>"form-control",'placeholder' => 'Enter your latitude.'])!!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Balance :') !!}
                                            {!! Form::text('blance',null,["class"=>"form-control",'placeholder' => 'Enter your balance.'])!!}
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
                           <a href="/building" class="btn btn-success my-2">Back</a>
                    </div>
                </div>
             </div>
        </div>
    </div>
    {!! Form::close() !!}  
</div>               
   
@endsection