@extends('adminlte::page')
@section('content')
    <style>
        h3 {
            font-family: Tahoma, Verdana, sans-serif;
            font-weight: bold;
        }

    </style>
    {!! Form::open(['route' => ['planning.update', $data->id], 'method' => 'put']) !!}
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
                                        {!! Form::text('id', $data->id, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('Name/Company') !!}
                                        {!! Form::text('name', $data->name, ['class' => 'form-control', 'placeholder' => 'Name/Company']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('LastName') !!}
                                        {!! Form::text('lastName', $data->lastName, ['class' => 'form-control', 'placeholder' => 'LastName']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('phoneNumber1') !!}
                                        {!! Form::text('phoneNumber1', $data->phoneNumber1, ['class' => 'form-control', 'placeholder' => 'phoneNumber1']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('phoneNumber2') !!}
                                        {!! Form::text('phoneNumber2', $data->phoneNumber2, ['class' => 'form-control', 'placeholder' => 'phoneNumber2']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {!! Form::label('Building Name') !!}
                                        <select class="buildingId form-control" id="buildingId" name="buildingId"></select>
                                        {{-- {!! Form::select('buildingId', $data->trueProgress, ['class' => 'buildingId form-control']) !!} --}}
                                        {{-- {!! Form::text('buildingId', $data->buildingId, ['class' => 'form-control', 'placeholder' => 'BuildingName']) !!} --}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('Building No') !!}
                                        {!! Form::number('numberLayer', $data->numberLayer, ['class' => 'form-control', 'placeholder' => 'Building No.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('FLOOR') !!}
                                        {!! Form::number('floor', $data->floor, ['class' => 'form-control', 'placeholder' => 'Floor No..']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('ROOM') !!}
                                        {!! Form::text('roomNumber', $data->roomNumber, ['class' => 'form-control', 'placeholder' => 'Room No.']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('ISP') !!}
                                        {!! Form::text('isp', $data->isp, ['class' => 'form-control', 'placeholder' => 'ISP']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('ISP CODE') !!}
                                        {!! Form::text('ispCode', $data->ispCode, ['class' => 'form-control', 'placeholder' => 'ISP CODE']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('MEMBER NUMBER') !!}
                                        {!! Form::number('memberNumber', $data->memberNumber, ['class' => 'form-control', 'placeholder' => 'MEMBERNUMBER']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('FEES') !!}
                                        {!! Form::number('Fees', $data->Fees, ['class' => 'form-control', 'placeholder' => 'FEES']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('CONFIRMING') !!}
                                        {!! Form::text('confirming', $data->confirming, ['class' => 'form-control', 'placeholder' => 'CONFIRMING AN APPOINTMENT']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('TEAM') !!}
                                        {!! Form::text('Team', $data->Team, ['class' => 'form-control', 'placeholder' => 'TEAM']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('DATE') !!}
                                        {!! Form::date('date', $data->date, ['class' => 'form-control', 'placeholder' => 'DATE']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('TIME') !!}
                                        {!! Form::time('time', $data->time, ['class' => 'form-control', 'placeholder' => 'TIME']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {!! Form::label('REMARK') !!}
                                        {!! Form::text('remark', $data->remark, ['class' => 'form-control', 'placeholder' => 'REMARK']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('STATUS') !!}
                                        {!! Form::text('status', $data->status, ['class' => 'form-control', 'placeholder' => 'STATUS']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('SUP STATUS') !!}
                                        {!! Form::text('subStatus', $data->subStatus, ['class' => 'form-control', 'placeholder' => 'SUP STATUS']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('DATE CONNECT') !!}
                                        {!! Form::date('dateConnect', $data->dateConnect, ['class' => 'form-control', 'placeholder' => 'DATE DISCONNECT']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('DATE DISCONNECT') !!}
                                        {!! Form::date('dateDisconnect', $data->dateDisconnect, ['class' => 'form-control', 'placeholder' => 'DATE DISCONNECT']) !!}
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="บันทึกแก้ไข " class="btn btn-primary">
                            <a href="/planning" class="btn btn-success my-2">กลับ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@endsection
@section('adminlte_js')
    @include('partials.notification')
    <script type="text/javascript">
        $('#buildingId').select2({
            placeholder: 'Select an building name...',
            ajax: {
                url: '/building-autocomplete-ajax',
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.buildingId,
                                id: item.buildingId
                            }
                        })
                    };
                },
                cache: true
            }
        });

    </script>
@endsection
