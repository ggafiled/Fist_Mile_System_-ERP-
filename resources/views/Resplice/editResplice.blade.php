@extends('adminlte::page')

@section('content')
    <style>
        h3 {
            font-family: Tahoma, Verdana, sans-serif;
            font-weight: bold;
        }

    </style>
    {!! Form::open(['route' => ['resplice.update', $data->id], 'method' => 'put']) !!}
    {{-- {!! Form::open(['Action' => ['progressController@update',$data->id],'method'=>'PUT']) !!} --}}
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card ">
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
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
                                        {!! Form::text('building', $data->buildingId, ['class' => 'form-control', 'disabled']) !!}
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

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('Zone') !!}
                                        {!! Form::text('zone', $data->zone, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        {!! Form::label('TechnicianTeam(Start)') !!}
                                        {!! Form::text('technicianTeamStart', $data->technicianTeamStart, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('StartDate') !!}
                                        {!! Form::date('startDate', $data->startDate, ['class' => 'form-control']) !!}
                                        {{-- {!! Form::text('Progress3bb',$data->Progress3bb,["class"=>"form-control"])!!} --}}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('PlanDate') !!}
                                        {!! Form::date('planDate', $data->planDate, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('PlanFinish') !!}
                                        {!! Form::date('planFinish', $data->planFinish, ['class' => 'form-control']) !!}
                                        {{-- {!! Form::text('sinetProgress',$data->sinetProgress,["class"=>"form-control"])!!} --}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('PlanStart') !!}
                                        {!! Form::date('planStart', $data->planStart, ['class' => 'form-control']) !!}
                                        {{-- {!! Form::text('Progress3bb',$data->Progress3bb,["class"=>"form-control"])!!} --}}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('PlanComplete') !!}
                                        {!! Form::date('planComplete', $data->planComplete, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('TechnicianTeam(End)') !!}
                                        {!! Form::text('technicianTeamEnd', $data->technicianTeamEnd, ['class' => 'form-control']) !!}
                                        {{-- {!! Form::text('sinetProgress',$data->sinetProgress,["class"=>"form-control"])!!} --}}
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="UPDATE" class="btn btn-warning">
                            <a href="/resplice" class="btn btn-success my-2">BACK</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

            @endsection
            @section('adminlte_js')
                @include('partials.notification')
                <script src=" {{ asset('js/app.js') }}"></script>
            @endsection
