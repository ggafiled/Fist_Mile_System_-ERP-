@extends('adminlte::page')

@section('content')
    <style>
        h3 {
            font-family: Tahoma, Verdana, sans-serif;
            font-weight: bold;
        }

    </style>
    {{-- <ul>
    @if ($errors->all())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
</ul> --}}
    {!! Form::open(['route' => ['building.update', $data->id], 'method' => 'put']) !!}
    {{-- {!! Form::open(['Action' => ['BuildingController@update',$data->id],'method'=>'PUT']) !!} --}}
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card ">
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            @csrf
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        {!! Form::label('ID') !!}
                                        {!! Form::text('id', $data->id, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('PROJECT NAME') !!}
                                        {!! Form::text('projectName', $data->projectName, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('จำนวนตึก') !!}
                                        {!! Form::number('buildingSum', $data->buildingSum, ['class' => 'form-control', 'placeholder' => 'กรอกจำนวนตึก.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('จำนวนชั้น') !!}
                                        {!! Form::number('floorSum', $data->floorSum, ['class' => 'form-control', 'placeholder' => 'กรอกจำนวนชั้น.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('จำนวนห้อง') !!}
                                        {!! Form::number('roomSum', $data->roomSum, ['class' => 'form-control', 'placeholder' => 'กรอกจำนวนห้อง.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('Fm-Code') !!}
                                        {!! Form::text('fmCode', $data->fmCode, ['class' => 'form-control', 'placeholder' => 'Enter your code.']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::label('JURISTIC PERSON NAME') !!}
                                        {!! Form::text('nameNiti', $data->nameNiti, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('PHONE NUMBER') !!}
                                        {!! Form::tel('phoneNiti', $data->phoneNiti, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('EMAIL') !!}
                                        {!! Form::text('mailNiti', $data->mailNiti, [
    'class' => 'form-control',
    'placeholder' => 'Enter
                                    your area.',
]) !!}
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::label('MANAGER NAME') !!}
                                        {!! Form::text('nameManager', $data->nameManager, ['class' => 'form-control', 'placeholder' => 'Enter your number layer.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('PHONE NUMBER') !!}
                                        {!! Form::tel('phoneManager', $data->phoneManager, ['class' => 'form-control', 'placeholder' => 'Enter your phoneManager.']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('EMAIL') !!}
                                        {!! Form::text('mailManager', $data->mailManager, ['class' => 'form-control', 'placeholder' => 'Enter your room.']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('จังหวัด') !!}
                                        {!! Form::text('provinceName', $data->provinceName, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('เขต/อำเภอ') !!}
                                        {!! Form::text('countyName', $data->countyName, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        {!! Form::label('บ้านเลขที่') !!}
                                        {!! Form::number('houseNumber', $data->houseNumber, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        {!! Form::label('หมู่') !!}
                                        {!! Form::number('squadNumber', $data->squadNumber, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('ซอย') !!}
                                        {!! Form::text('alleyName', $data->alleyName, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('ถนน') !!}
                                        {!! Form::text('roadName', $data->roadName, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('ตำบล/แขวง') !!}
                                        {!! Form::text('districtName', $data->districtName, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('รหัสไปรษณีย์') !!}
                                        {!! Form::text('postalCode', $data->postalCode, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('Longitude') !!}
                                        {!! Form::text('longitude', $data->longitude, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('Latitude') !!}
                                        {!! Form::text('latitude', $data->latitude, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('SALL CONTACT') !!}
                                        {!! Form::text('contractSell', $data->contractSell, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('CONTRACT SIGNING DATE') !!}
                                        {!! Form::date('contractDate', $data->contractDate, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('CONTRACT SIGNING TIME') !!}
                                        {!! Form::time('contractTime', $data->contractTime, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('CONTRACT MODEL') !!}
                                        {!! Form::text('spendSpace', $data->spendSpace, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('COMPENSATION') !!}
                                        {!! Form::text('condition', $data->condition, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('CONTRACT PERIOD') !!}
                                        {!! Form::date('contractPeriod', $data->contractPeriod, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('CONTRACT START DATE') !!}
                                        {!! Form::date('contractStartDate', $data->contractStartDate, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('CONTRACT EXPIRATION DATE') !!}
                                        {!! Form::date('contractExpirationDate', $data->contractExpirationDate, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('พื้นที่') !!}
                                        {!! Form::text('areaN', $data->areaN, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('บ.บ.น.') !!}
                                        {!! Form::text('bbN', $data->bbN, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('พื้นที่ 3BB') !!}
                                        {!! Form::select('area3BB', ['RO 1' => 'RO 1', 'RO 2' => 'RO 2', 'RO 3' => 'RO 3', 'RO 4' => 'RO 4', 'RO 5' => 'RO 5', 'RO 6' => 'RO 6', 'RO 7' => 'RO 7', 'RO 8' => 'RO 8', 'RO 9' => 'RO 9', 'RO 10' => 'RO 10', 'RO 10/1' => 'RO 10/1', 'N/A' => 'N/A'], $data->area3BB, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('พื้นที่ TRUE') !!}
                                        {!! Form::select('areaTrue', ['BMA 1 (North West)' => 'BMA 1 (North West)', 'BMA 2 (South West)' => 'BMA 2 (South West)', 'BMA 3 (North East)' => 'BMA 3 (North East)', 'BMA 4 (South East)' => 'BMA 4 (South East)', 'BMA 5 (Central)' => 'BMA 5 (Central)', 'N/A' => 'N/A'], $data->areaTrue, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('พื้นที่ TRUE NEW') !!}
                                        {!! Form::select('areaTrueNew', ['BMA 1 (North West)' => 'BMA 1 (North West)', 'BMA 2 (South West)' => 'BMA 2 (South West)', 'BMA 3 (North East)' => 'BMA 3 (North East)', 'BMA 4 (South East)' => 'BMA 4 (South East)', 'BMA 5 (Central)' => 'BMA 5 (Central)', 'N/A' => 'N/A'], $data->areaTrueNew, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('พื้นที่ AIS') !!}
                                        {!! Form::select('areaAis', ['YES' => 'YES','NO' => 'NO'], $data->areaAis, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        {!! Form::label('พื้นที่ FIBERNET') !!}
                                        {!! Form::select('areaFiberNet', ['YES' => 'YES','NO' => 'NO'], $data->areaFiberNet, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::label('เวลาในการปฏิบัติงาน') !!}
                                        {!! Form::text('operatingTime', $data->operatingTime, ['class' => 'form-control']) !!}
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
