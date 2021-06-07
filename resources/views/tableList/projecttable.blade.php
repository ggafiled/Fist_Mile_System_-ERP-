@extends('adminlte::page')

@section('content')
    <style>
        td.details-control {
            background: url('../resources/details_open.png') no-repeat center center;
            cursor: pointer;
        }

        tr.shown td.details-control {
            background: url('../resources/details_close.png') no-repeat center center;
        }

        div.dataTables_wrapper {
            width: 1580px;
            margin: 0 auto;
        }



    </style>
    <h3>{{ __('PROJECT TABLE LIST') }}</h3>
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('PROJECT MANAGEMENT TABLE') }}
                    </center>
                </div>
                <div class="card-body">
                    {{-- <a  href="/building/create"  class="btn btn-primary my-2 "><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp; Add Building</a> --}}
                    <div class="table-responsive">
                        <table class="display nowrap" id="tablelist" style="width:100%">
                            <thead>
                                <tr class="info">
                                    <th width="1%">#</th>
                                    <th width="10%">Projects Name</th>
                                    <th width="10%">FM Code</th>
                                    <th width="5%">ชื่อนิติบุคคล</th>
                                    <th width="3%">เบอร์โทรนิติบุคคล</th>
                                    <th width="3%">เมลล์นิติบุคคล</th>
                                    <th width="5%">ชื่อผู้จัดการ</th>
                                    <th width="3%">เบอร์โทรผู้จัดการ</th>
                                    <th width="3%">เมลล์ผู้จัดการ</th>
                                    <th width="3%">บ้านเลขที่</th>
                                    <th width="3%">หมู่</th>
                                    <th width="3%">ซอย</th>
                                    <th width="3%">ถนน</th>
                                    <th width="3%">ตำบล/แขวง</th>
                                    <th width="3%">จังหวัด</th>
                                    <th width="3%">อำเภอ/เขต</th>
                                    <th width="3%">รหัสไปสษณี</th>

                                    <th width="3%">Sallดูแลสัญญา</th>
                                    <th width="3%">วันลงนามสัญญา</th>
                                    <th width="3%">เวลาลงนามสัญญา</th>
                                    <th width="3%">รูปแบบสัญญา</th>
                                    <th width="3%">ผลตอบแทน</th>
                                    <th width="3%">ระยะเวลาสัญญา</th>
                                    <th width="3%">วันเริ่มต้นสัญญา</th>
                                    <th width="3%">วันสิ้นสุดสัญญา</th>

                                    <th width="3%">ทีมช่าง team</th>
                                    <th width="3%">ชื่อช่าง</th>
                                    <th width="3%">เบอร์ช่าง</th>
                                    <th width="3%">เมลล์ช่าง</th>
                                    <th width="3%">พื้นที่.</th>
                                    <th width="3%">บ.บ.น.</th>
                                    <th width="3%">พื้นที่.3bb</th>
                                    <th width="3%">พื้นที่.True</th>

                                </tr>
                            </thead>
                    </div>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->buildingName }}</td>
                                <td>{{ $row->fmCode }}</td>
                                <td>{{ $row->nameNiti }}</td>
                                <td>{{ $row->phoneNiti }}</td>
                                <td>{{ $row->mailNiti }}</td>
                                <td>{{ $row->nameManager }}</td>
                                <td>{{ $row->phoneManager }}</td>
                                <td>{{ $row->mailManager }}</td>
                                <td>{{ $row->houseNumber }}</td>
                                <td>{{ $row->squadNumber }}</td>
                                <td>{{ $row->alleyName }}</td>
                                <td>{{ $row->roadName }}</td>
                                <td>{{ $row->districtName }}</td>
                                <td>{{ $row->provinceName }}</td>
                                <td>{{ $row->countyName }}</td>
                                <td>{{ $row->postalCode }}</td>

                                <td>{{ $row->contractSell }}</td>
                                <td>{{ $row->contractDate }}</td>
                                <td>{{ $row->contractTime }}</td>
                                <td>{{ $row->spendSpace }}</td>
                                <td>{{ $row->condition }}</td>
                                <td>{{ $row->contractPeriod }}</td>
                                <td>{{ $row->contractStartDate }}</td>
                                <td>{{ $row->contractExpirationDate }}</td>

                                <td>{{ $row->team }}</td>
                                <td>{{ $row->nameTechnician }}</td>
                                <td>{{ $row->phoneTechnician }}</td>
                                <td>{{ $row->mailTechnicianName }}</td>
                                <td>{{ $row->areaN }}</td>
                                <td>{{ $row->bbN }}</td>
                                <td>{{ $row->area3BB }}</td>
                                <td>{{ $row->areaTrue }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@section('adminlte_js')
    <script>
        // $(document).ready(function() {
        //     $('#tablelist').DataTable({
        //         lengthMenu: [
        //             [15, 20, 50, 100, -1],
        //             [15, 20, 50, 100, "All"]
        //         ],
        //         scrollX: !0,
        //         dom: "Bfrtip",
        //         buttons: [
        //             "colvis",
        //             "copy",
        //             "csv",
        //             "excel",
        //             {
        //                 extend: "pdf",
        //                 text: "PDF",
        //                 pageSize: "A4",
        //                 pageOrientation: "landscape",
        //                 customize: function(t) {
        //                     t.defaultStyle = {
        //                         font: "THSarabun",
        //                         fontSize: 16
        //                     };
        //                 }
        //             },
        //             "print"
        //         ],
        //     });
        // });

        $(document).ready(function() {
            $('#tablelist').DataTable({
                lengthMenu: [
                    [15, 20, 50, 100, -1],
                    [15, 20, 50, 100, "All"]
                ],
            });
        });

    </script>
@stop
@endsection
