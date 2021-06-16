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

        /* Center the loader */
        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 120px;
            height: 120px;
            margin: -76px 0 0 -76px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        #myDiv {
            display: none;
        }

    </style>

<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
        <h3>{{ __('PROJECT TABLE LIST') }}</h3>
            <div style="display:none;" id="myDiv" class="row justify-content-center">
                <div class="col-md">
                    <div class="card">
                        <div class="card-header text-white bg-dark">{{ __('PROJECT MANAGEMENT TABLE') }}
                            </center>
                        </div>
                        <div class="card-body">
                            {{-- <a  href="/building/create"  class="btn btn-primary my-2 "><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp; Add Building</a> --}}
                            <div class="table-responsive">
                                <table class="display nowrap" id="projectTable" style="width:100%">
                                    <thead>
                                        <tr class="info">
                                            <th width="1%">#</th>
                                            <th width="10%">Projects Name</th>
                                            <th width="3%">ตึก</th>
                                            <th width="3%">ชั้น</th>
                                            <th width="3%">ห้อง</th>
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

                                            <th width="3%">ลองจิจูด</th>
                                            <th width="3%">ละติจูด</th>

                                            <th width="3%">Sallดูแลสัญญา</th>
                                            <th width="3%">วันลงนามสัญญา</th>

                                            <th width="3%">รูปแบบสัญญา</th>
                                            <th width="3%">ผลตอบแทน</th>
                                            <th width="3%">ระยะเวลาสัญญา</th>

                                            <th width="3%">พื้นที่.</th>
                                            <th width="3%">บ.บ.น.</th>
                                            <th width="3%">พื้นที่.3bb</th>
                                            <th width="3%">พื้นที่.True</th>
                                            <th width="3%">พื้นที่.True ใหม่</th>
                                            <th width="3%">พื้นที่.AIS</th>
                                            <th width="3%">พื้นที่.Finet</th>
                                            <th width="3%">เวลาในการปฏิบัติงาน</th>

                                        </tr>
                                    </thead>
                            </div>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $row->id }}</th>
                                        <td>{{ $row->projectName }}</td>
                                        <td>{{ $row->buildingSum }}</td>
                                        <td>{{ $row->floorSum }}</td>
                                        <td>{{ $row->roomSum }}</td>
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
                                        <td>{{ $row->longitude }}</td>
                                        <td>{{ $row->latitude }}</td>

                                        <td>{{ $row->contractSell }}</td>
                                        <td>{{ $row->contractDate }}</td>

                                        <td>{{ $row->spendSpace }}</td>
                                        <td>{{ $row->condition }}</td>
                                        <td>{{ $row->contractPeriod }}</td>

                                        <td>{{ $row->areaN }}</td>
                                        <td>{{ $row->bbN }}</td>
                                        <td>{{ $row->area3BB }}</td>
                                        <td>{{ $row->areaTrue }}</td>
                                        <td>{{ $row->areaTrueNew }}</td>
                                        <td>{{ $row->areaAis }}</td>
                                        <td>{{ $row->areaFiberNet }}</td>
                                        <td>{{ $row->operatingTime }}</td>
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

    </body>
@section('adminlte_js')
    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 3000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
        $(document).ready(function() {
            $('#projectTable').DataTable({
                lengthMenu: [
                    [15, 20, 50, 100, -1],
                    [15, 20, 50, 100, "All"]
                ],
                scrollX: !0,
                dom: "Bfrtip",
                buttons: [
                    "colvis",
                    "copy",
                    "csv",
                    "excel",
                    {
                        extend: "pdf",
                        text: "PDF",
                        pageSize: "A4",
                        pageOrientation: "landscape",
                        customize: function(t) {
                            t.defaultStyle = {
                                font: "THSarabun",
                                fontSize: 16
                            };
                        }
                    },
                    "print"
                ],
            });
        });

    </script>
@stop
@endsection
