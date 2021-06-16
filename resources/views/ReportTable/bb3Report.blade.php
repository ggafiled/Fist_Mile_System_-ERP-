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
            border-top: 16px solid rgb(255, 255, 255);
            border-right: 16px solid rgb(255, 102, 0);
            border-radius: 50%;
            border-bottom: 16px solid rgb(255, 255, 255);
            border-left: 16px solid rgb(255, 102, 0);
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
        <h3>{{ __('REPORT 3BB TABLE') }}</h3>
        <div style="display:none;" id="myDiv" class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-header text-white bg-dark">{{ __('REPORT 3BB TABLE') }}
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
                                        <th width="3%">พื้นที่.3BB</th>
                                        <th width="3%">ตึก</th>
                                        <th width="3%">ชั้น</th>
                                        <th width="3%">ห้อง</th>
                                        <th width="5%">ชื่อนิติบุคคล</th>
                                        <th width="3%">เบอร์โทรนิติบุคคล</th>
                                        <th width="3%">เมลล์นิติบุคคล</th>
                                        <th width="3%">บ้านเลขที่</th>
                                        <th width="3%">หมู่</th>
                                        <th width="3%">ซอย</th>
                                        <th width="3%">ถนน</th>
                                        <th width="3%">ตำบล/แขวง</th>
                                        <th width="3%">จังหวัด</th>
                                        <th width="3%">อำเภอ/เขต</th>
                                        <th width="3%">รหัสไปสษณี</th>
                                    </tr>
                                </thead>
                        </div>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->projectName }}</td>
                                    <td>{{ $row->area3BB }}</td>
                                    <td>{{ $row->buildingSum }}</td>
                                    <td>{{ $row->floorSum }}</td>
                                    <td>{{ $row->roomSum }}</td>
                                    <td>{{ $row->nameNiti }}</td>
                                    <td>{{ $row->phoneNiti }}</td>
                                    <td>{{ $row->mailNiti }}</td>
                                    <td>{{ $row->houseNumber }}</td>
                                    <td>{{ $row->squadNumber }}</td>
                                    <td>{{ $row->alleyName }}</td>
                                    <td>{{ $row->roadName }}</td>
                                    <td>{{ $row->districtName }}</td>
                                    <td>{{ $row->provinceName }}</td>
                                    <td>{{ $row->countyName }}</td>
                                    <td>{{ $row->postalCode }}</td>
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
