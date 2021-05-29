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
                        <table class="table table-striped table-bordered" id="example1">
                            <thead>
                                <tr class="info">
                                    <th width="1%">#</th>
                                    <th width="5%">Projects Name</th>
                                    <th width="5%">FM Code</th>
                                    <th width="5%">Niti Name</th>
                                    <th width="3%">Phone Number</th>
                                    <th width="3%">Mail Niti</th>
                                    <th width="5%">Manager Name</th>
                                    <th width="3%">Phone Number</th>
                                    <th width="3%">Mail Manager</th>
                                    <th width="3%">House Number</th>
                                    <th width="3%">Squad Number</th>
                                    <th width="3%">Alley </th>
                                    <th width="3%">Road </th>
                                    <th width="3%">District</th>
                                    <th width="3%">Province</th>
                                    <th width="3%">County</th>
                                    <th width="3%">PostalCode</th>
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
                                <td>{{ $row->districtName}}</td>
                                <td>{{ $row->provinceName}}</td>
                                <td>{{ $row->countyName}}</td>
                                <td>{{ $row->postalCode}}</td>
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
