@extends('adminlte::page')
@section('content')
    <style>
        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }

        th {
            white-space: nowrap;
        }

        div.dataTables_wrapper {
            width: 4500px;
            margin: 0 auto;
        }

        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }

        th {
            white-space: nowrap;
        }

    </style>
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white bg-dark">
                    {{ __('PLANNING LIST TABLE') }}
                    </center>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="tablelist" style="width:100%">
                            <thead>
                                <tr class="info">
                                    <th width="1%">#</th>
                                    <th width="4%">Name/Company</th>
                                    <th width="4%">LastName</th>
                                    <th width="3%">Tel(main)</th>
                                    <th width="3%">Tel(reserve)</th>
                                    <th width="5%">BuildingName</th>
                                    <th width="1%">Building No</th>
                                    <th width="4%">FLOOR</th>
                                    <th width="4%">ROOM</th>
                                    <th width="3%">ISP(main)</th>
                                    <th width="3%">ISP CODE</th>
                                    <th width="5%">MEMBER NUMBER</th>
                                    <th width="5%">FEES</th>
                                    <th width="5%">CONFIRMING</th>
                                    <th width="5%">TEAM</th>
                                    <th width="5%">DATE</th>
                                    <th width="5%">TIME</th>
                                    <th width="5%">REMARK</th>
                                    <th width="5%">STATUS</th>
                                    <th width="5%">SUB STATUS</th>
                                    <th width="5%">DATE CONNECT</th>
                                    <th width="5%">DATE DISCONNECT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $row->id }}</th>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->lastName }}</td>
                                        <td>{{ $row->phoneNumber1 }}</td>
                                        <td>{{ $row->phoneNumber2 }}</td>
                                        <td>{{ $row->buildingId }}</td>
                                        <td>{{ $row->numberLayer }}</td>
                                        <td>{{ $row->floor }}</td>
                                        <td>{{ $row->roomNumber }}</td>
                                        <td>{{ $row->isp }}</td>
                                        <td>{{ $row->ispCode }}</td>
                                        <td>{{ $row->memberNumber }}</td>
                                        <td>{{ $row->Fees }}</td>
                                        <td>{{ $row->confirming }}</td>
                                        <td>{{ $row->Team }}</td>
                                        <td>{{ $row->remark }}</td>
                                        <td>{{ $row->date }}</td>
                                        <td>{{ $row->time }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>{{ $row->subStatus }}</td>
                                        <td>{{ $row->dateConnect }}</td>
                                        <td>{{ $row->dateDisconnect }}</td>
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
@endsection

@section('adminlte_js')

    <script>
        $(document).ready(function() {
            $('#tablelist').DataTable({
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
