@extends('adminlte::page')

@section('content')
<style>
    /* h3 {
        font-family: Tahoma, Verdana, sans-serif;
        font-weight: bold;
      } */
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
            <div class="card-header text-white bg-dark"><h>{{ __('ADD PLANNING LIST') }}</div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form action="{{ route('planning.store') }}" method="POST">
                                {{-- <form action="{{ route('planing.store') }}" method="POST"> --}}
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('Name/Company') !!}
                                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name/Company']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('LastName') !!}
                                            {!! Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'LastName']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('phoneNumber1') !!}
                                            {!! Form::text('phoneNumber1', null, ['class' => 'form-control', 'placeholder' => 'phoneNumber1']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('phoneNumber2') !!}
                                            {!! Form::text('phoneNumber2', null, ['class' => 'form-control', 'placeholder' => 'phoneNumber2']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::label('Building Name') !!}
                                            <select class="buildingId form-control" id="buildingId" name="buildingId"></select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Building No') !!}
                                            {!! Form::number('numberLayer', null, ['class' => 'form-control', 'placeholder' => 'Building No.']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('FLOOR') !!}
                                            {!! Form::number('floor', null, ['class' => 'form-control', 'placeholder' => 'Floor No..']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('ROOM') !!}
                                            {!! Form::number('roomNumber', null, ['class' => 'form-control', 'placeholder' => 'Room No.']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('ISP') !!}
                                            {!! Form::text('isp', null, ['class' => 'form-control', 'placeholder' => 'ISP']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('ISP CODE') !!}
                                            {!! Form::text('ispCode', null, ['class' => 'form-control', 'placeholder' => 'ISP CODE']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('MEMBER NUMBER') !!}
                                            {!! Form::number('memberNumber', null, ['class' => 'form-control', 'placeholder' => 'MEMBERNUMBER']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('FEES') !!}
                                            {!! Form::number('Fees', null, ['class' => 'form-control', 'placeholder' => 'FEES']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('CONFIRMING') !!}
                                            {!! Form::text('confirming', null, ['class' => 'form-control', 'placeholder' => 'CONFIRMING AN APPOINTMENT']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('TEAM') !!}
                                            {!! Form::text('Team', null, ['class' => 'form-control', 'placeholder' => 'TEAM']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('DATE') !!}
                                            {!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'DATE']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('TIME') !!}
                                            {!! Form::time('time', null, ['class' => 'form-control', 'placeholder' => 'TIME']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::label('REMARK') !!}
                                            {!! Form::text('remark', null, ['class' => 'form-control', 'placeholder' => 'REMARK']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('STATUS') !!}
                                            {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'STATUS']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('SUB STATUS') !!}
                                            {!! Form::text('subStatus', null, ['class' => 'form-control', 'placeholder' => 'SUP STATUS']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('DATE CONNECT') !!}
                                            {!! Form::date('dateConnect', null, ['class' => 'form-control', 'placeholder' => 'DATE DISCONNECT']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('DATE DISCONNECT') !!}
                                            {!! Form::date('dateDisconnect', null, ['class' => 'form-control', 'placeholder' => 'DATE DISCONNECT']) !!}
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="SAVE" class="btn btn-primary" method="POST">
                                @csrf @method('POST')
                                <a href="/planning" class="btn btn-success my-2">BACK</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection

@section('adminlte_js')
<script type="text/javascript">
    $('#buildingId').select2({
          placeholder: 'Select an building name...',
          ajax: {
            url: '/building-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
              return {
                results:  $.map(data, function (item) {
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

