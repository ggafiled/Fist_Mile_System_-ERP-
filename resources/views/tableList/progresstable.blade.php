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
    <h3>{{ __('PROGRESS TABLE LIST') }}</h3>
    <div style="display:none;" id="myDiv" class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('PROGRESS TABLE') }}
                    </center>
                </div>
                <div class="card-body">
                    {{-- <a  href="/building/create"  class="btn btn-primary my-2 "><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp; Add Building</a> --}}
                    <div class="table-responsive">
                        <table class="display nowrap" id="progressTable" style="width:100%">
                            <thead>
                                <tr class="info">
                                    <th width="1%">#</th>
                                    <th width="10%">Projects Name</th>
                                    <th width="10%">FM - PROGRESS</th>
                                    <th width="5%">DATE - FM</th>
                                    <th width="3%">TOT - PROGRESS</th>
                                    <th width="3%">DATE - TOT</th>
                                    <th width="3%">AIS - PROGRESS</th>
                                    <th width="3%">DATE - AIS</th>
                                    <th width="3%">3BB - PROGRESS</th>
                                    <th width="3%">DATE - 3BB</th>
                                    <th width="3%">SINET - PROGRESS</th>
                                    <th width="3%">DATE - SINET</th>
                                    <th width="3%">FN - PROGRESS</th>
                                    <th width="3%">DATE - FN</th>
                                    <th width="3%">TRUE - PROGRESS</th>
                                    <th width="3%">DATE - TRUE</th>
                                </tr>
                            </thead>
                    </div>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->projectName }}</td>
                                <td>{{ $row->fmProgress }}</td>
                                <td>{{ $row->dateFm }}</td>

                                <td>{{ $row->totProgress }}</td>
                                <td>{{ $row->dateTot }}</td>

                                <td>{{ $row->totProgress }}</td>
                                <td>{{ $row->dateTot }}</td>

                                <td>{{ $row->aisProgress }}</td>
                                <td>{{ $row->dateais }}</td>

                                <td>{{ $row->progress3bb }}</td>
                                <td>{{ $row->date3BB }}</td>

                                <td>{{ $row->sinetProgress }}</td>
                                <td>{{ $row->dateSinet }}</td>

                                <td>{{ $row->trueProgress }}</td>
                                <td>{{ $row->dateTrue }}</td>
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
    </div>
</body>
@endsection

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
            $('#progressTable').DataTable({
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
