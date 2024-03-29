@extends('adminlte::page')

@section('content')
    <style>
    </style>
    <ul>
        @if ($errors->all())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
    </ul>
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card ">
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form action="{{ route('building.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>PROJECT NAME</label>
                                            <input type="text" class="form-control" name="buildingName" id="buildingName"
                                                placeholder="ชื่อโปรเจ็ค">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>จำนวนตึก</label>
                                            <input type="number" class="form-control" name="buildingSum" id="buildingSum"
                                                placeholder="กรอกจำนวนตึก">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>จำนวนชั้น</label>
                                            <input type="text" class="form-control" name="floorSum" id="floorSum"
                                                placeholder="กรอกจำนวนชั้น">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>จำนวนห้อง</label>
                                            <input type="text" class="form-control" name="roomSum" id="roomSum"
                                                placeholder="กรอกจำนวนห้อง">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Fm-Code</label>
                                            <input type="text" class="form-control" name="fmCode" id="fmCode"
                                                placeholder="โค๊ดของคุณ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ชื่อนิติบุคคล</label>
                                            <input type="text" class="form-control" name="nameNiti" id="nameNiti"
                                                placeholder="กรอกชื่อนิติบุคคล">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>หมายเลขโทรศัพท์</label>
                                            <input type="tel" class="form-control" name="phoneNiti" id="phoneNiti"
                                                placeholder="กรอกหมายเลขโทรศัพท์นิติบุคคล">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>อีเมลล์</label>
                                            <input type="email" class="form-control" name="mailNiti" id="mailNiti"
                                                placeholder="อีเมลล์นิติบุคคล">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ชื่อผู้จัดการ</label>
                                            <input type="text" class="form-control" name="nameManager" id="nameManager"
                                                placeholder="กรอกชื่อผู้จัดการ">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>หมายเลขโทรศัพท์</label>
                                            <input type="tel" class="form-control" name="phoneManager" id="phoneManager"
                                                placeholder="หมายเลขโทรศัพท์ผู้จัดการ">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>EMAIL</label>
                                            <input type="email" class="form-control" name="mailManager" id="mailManager"
                                                placeholder="อีเมลล์">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>บ้านเลขที่</label>
                                            <input type="number" class="form-control" name="houseNumber" id="houseNumber"
                                                placeholder="บ้านเลขที่">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>หมู่</label>
                                            <input type="number" class="form-control" name="squadNumber" id="squadNumber"
                                                placeholder="เลขหมู่">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>จังหวัด</label>
                                            <select class="form-control province" name="provinceName" id="provinceName">
                                                <option value="">เลือกจังหวัดของคุณ</option>
                                                @foreach ($list2 as $row)
                                                    <option value="{{ $row->id}}">{{ $row->name_th }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>เขต/อำเภอ</label>
                                            <select type="text" class="form-control amphures" name="countyName"
                                                id="countyName">
                                                <option value="">เลือกเขตหรืออำเภอของคุณ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>ตำบล/แขวง</label>
                                            <input type="text" class="form-control" name="districtName" id="districtName"
                                                placeholder="กรอกตำบล/แขวง">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>ซอย</label>
                                            <input type="text" class="form-control" name="alleyName" id="alleyName"
                                                placeholder="กรอกซอย">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>ถนน</label>
                                            <input type="text" class="form-control" name="roadName" id="roadName"
                                                placeholder="กรอกถนน">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>รหัสไปรษณีย์</label>
                                            <input type="text" pattern="\d*" maxlength="5" class="form-control"
                                                name="postalCode" id="postalCode" placeholder="กรอกรหัสไปรษณีย์">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Longitude</label>
                                            <input type="text"  class="form-control"
                                                name="longitude" id="longitude" placeholder="กรอกLongitude">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Latitude</label>
                                            <input type="text"  class="form-control"
                                                name="latitude" id="latitude" placeholder="กรอกLatitude">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>SALL ที่ทำสัญญา</label>
                                            <select class="contractSell form-control" id="contractSell"
                                            name="contractSell"></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>วันที่ทำสัญญา</label>
                                            <input type="date" class="form-control" name="contractDate" id="contractDate">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>รูปแบบสัญญา</label>
                                            <select type="text" class="form-control" name="spendSpace" id="spendSpace">
                                                <option value="เลือกรูปแบบการชำระ">เลือกรูปแบบการชำระ</option>
                                                <option value="ไม่แบ่งรายได้">ไม่แบ่งรายได้</option>
                                                <option value="แบ่งรายได้ทุกเดือน">แบ่งรายได้ทุกเดือน</option>
                                                <option value="ชำระรายปี">ชำระรายปี</option>
                                                <option value="ชำระรายปีแล้วแบ่งรายได้">ชำระรายปีแล้วแบ่งรายได้</option>
                                                <option value="ชำระรายปีแบบขั้นบันได">ชำระรายปีแบบขั้นบันได</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>ผลตอบแทน</label>
                                            <input type="text" class="form-control" name="condition" id="condition"
                                                placeholder="ผลตอบแทน">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>ระยะเวลาสัญญา</label>
                                            <input type="text" class="form-control" name="contractPeriod"
                                                id="contractPeriod" placeholder="ระยะเวลาสัญญา">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>พื้นที่</label>
                                            <select class="form-control area" name="areaN" id="areaN">
                                                <option value="">เลือกพื้นที่</option>
                                                @foreach ($list as $sum)
                                                    <option value="{{ $sum->id }}">{{ $sum->name_area }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>บ.บ.น.</label>
                                            <select type="text" class="form-control bbns" name="bbN"
                                            id="bbN">
                                            <option value="">เลือกพื้นที่ของคุณ</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>พื้นที่ 3BB</label>
                                            <select type="text" class="form-control" name="area3BB" id="area3BB">
                                                <option value="">เลือกพื้นที่</option>
                                                <option value="RO 1">RO 1</option>
                                                <option value="RO 2">RO 2</option>
                                                <option value="RO 3">RO 3</option>
                                                <option value="RO 4">RO 4</option>
                                                <option value="RO 5">RO 5</option>
                                                <option value="RO 6">RO 6</option>
                                                <option value="RO 7">RO 7</option>
                                                <option value="RO 8">RO 8</option>
                                                <option value="RO 9">RO 9</option>
                                                <option value="RO 10">RO 10</option>
                                                <option value="RO 10/1">RO 10/1</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>พื้นที่ TRUE</label>
                                            <select type="text" class="form-control" name="areaTrue" id="areaTrue">
                                                <option value="">เลือกพื้นที่</option>
                                                <option value="BMA 1 (North West)">BMA 1 (North West)</option>
                                                <option value="BMA 2 (South West)">BMA 2 (South West)</option>
                                                <option value="BMA 3 (North East)">BMA 3 (North East)</option>
                                                <option value="BMA 4 (South East)">BMA 4 (South East)</option>
                                                <option value="BMA 5 (Central)">BMA 5 (Central)</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>พื้นที่ TRUE NEW</label>
                                            <select type="text" class="form-control" name="areaTrueNew" id="areaTrueNew">
                                                <option value="">เลือกพื้นที่</option>
                                                <option value="BMA 1 (North West)">BMA 1 (North West)</option>
                                                <option value="BMA 2 (South West)">BMA 2 (South West)</option>
                                                <option value="BMA 3 (North East)">BMA 3 (North East)</option>
                                                <option value="BMA 4 (South East)">BMA 4 (South East)</option>
                                                <option value="BMA 5 (Central)">BMA 5 (Central)</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>พื้นที่ AIS</label>
                                            <select type="text" class="form-control" name="areaAis" id="areaAis">
                                                <option value="">เลือกพื้นที่</option>
                                                <option value="Yes">Yes</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>พื้นที่ FIBERNET</label>
                                            <select type="text" class="form-control" name="areaFiberNet" id="areaFiberNet">
                                                <option value="">เลือกพื้นที่</option>
                                                <option value="Yes">Yes</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>เวลาในการปฏิบัติงาน</label>
                                            <select type="text" class="form-control" name="operatingTime" id="operatingTime">
                                                <option value="">เลือกเวลาในการปฏิบัติงาน</option>
                                                <option value="จันทร์ - ศุกร์ (9.00 - 17.00 น)">จันทร์ - ศุกร์ (9.00 - 17.00 น)</option>
                                                <option value="จันทร์ - เสาร์ (9.00 - 17.00 น)">จันทร์ - เสาร์ (9.00 - 17.00 น)</option>
                                                <option value="จันทร์ - ศุกร์ และเสาร์ครึ่งวันช่วงเช้า">จันทร์ - ศุกร์ และเสาร์ครึ่งวันช่วงเช้า</option>
                                                <option value="จันทร์ - ศุกร์ และเสาร์ครึ่งวันช่วงบ่าย">จันทร์ - ศุกร์ และเสาร์ครึ่งวันช่วงบ่าย</option>
                                                <option value="จันทร์ - ศุกร์ และวันเสาร์ ประสาน นิติฯ ก่อน">จันทร์ - ศุกร์ และวันเสาร์ ประสาน นิติฯ ก่อน</option>
                                                <option value="จันทร์ - ศุกร์ และวันเสาร์-อาทิตย์ ประสาน นิติฯ ก่อน">จันทร์ - ศุกร์ และวันเสาร์-อาทิตย์ ประสาน นิติฯ ก่อน</option>
                                                <option value="ทุกวัน">ทุกวัน</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <input type="submit" value="เพิ่มข้อมูล" class="btn btn-primary" method="POST">
                                @csrf @method('POST')
                            <a href="/building" class="btn btn-success my-2">กลับ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('adminlte_js')
    <script type="text/javascript">
        $('.area').change(function() {
            if ($(this).val() != '') {
                var select = $(this).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('building.fetch') }}",
                    method: "POST",
                    data: {
                        select: select,
                        _token: _token
                    },
                    success: function(result) {
                        $('.bbns').html(result);
                    }
                })
            }
        });

        $('.province').change(function() {
            if ($(this).val() != '') {
                var select = $(this).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('building.fetch2') }}",
                    method: "POST",
                    data: {
                        select: select,
                        _token: _token
                    },
                    success: function(result) {
                        $('.amphures').html(result);
                    }
                })
            }
        });

        $('#contractSell').select2({
        placeholder: 'Select an Contract...',
        ajax: {
            url: '/dataselect-contract',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.contract,
                            id: item.contract
                        }
                    })
                };
            },
            cache: true
        }
    });



    </script>
@stop
@endsection
