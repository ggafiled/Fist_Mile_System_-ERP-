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

        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 120px;
            height: 120px;
            margin: -76px 0 0 -76px;
            border-top: 16px solid blue;
            border-right: 16px solid green;
            border-radius: 50%;
            border-bottom: 16px solid red;
            border-left: 16px solid pink;
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
        <h3>{{ __('CONSTARUTION MANAGEMENT') }}</h3>
        <div style="display:none;" id="myDiv" class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-header text-white bg-dark">{{ __('CONSTARUTION MANAGEMENT TABLE') }}
                    </div>
                    <div class="card-body">
                        {{-- <a  href="/building/create"  class="btn btn-primary my-2 "><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp; Add Building</a> --}}
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="example1">
                                <thead>
                                    <tr class="info">
                                        <th>#</th>
                                        <th width="30%">PROJECTNAME</th>
                                        <th>สำรวจโดย</th>
                                        <th>วันที่สำรวจออกแบบ</th>
                                        <th>สำรวจออกแบบโดย</th>
                                        <th>TYPE</th>
                                        <th>Edit</th>
                                        @role('superadministrator')
                                        <th>DELETE</th>
                                        @endrole
                                    </tr>
                                </thead>
                        </div>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->projectName }}</td>
                                    <td>{{ $row->surveyDesing }}</td>
                                    <td>{{ $row->surveyDesingDate }}</td>
                                    <td>{{ $row->ifccDate }}</td>
                                    <td>{{ $row->type }}</td>
                                    <td>
                                        <form action="{{ route('constarution.edit', $row->id) }}" method="PUT">
                                            @csrf @method('HEAD')
                                            <input type="submit" value='Edit' " class=" btn btn-warning ">
                                                </form>
                                            </td>
                                            @role('superadministrator')
                                            <td>
                                                <form action=" {{ route('constarution.destroy', $row->id) }}"
                                                method="post">
                                            @csrf @method('DELETE')
                                            <input type="submit" value='Delete' class="btn btn-danger deleteForm">
                                        </form>

                                    </td>
                                    @endrole
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
            $("#example1").DataTable({
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ]
            });
        });

    </script>
@stop
@endsection
