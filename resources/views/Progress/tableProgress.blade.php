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
<h3>{{ __('PROGRESS MANAGEMENT') }}</h3>
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('PROGRES MANAGEMENT TABLE') }}</h4>
                    </center>
                    @role('superadministrator')
                    <div class="card-tools">
                        {{-- <a type="button" href="/progress/create" class="btn btn-sm btn-primary" @click="newModal">
                            <i class="fa fa-plus-square"></i>
                            ADD NEW PROGRESS
                        </a> --}}
                        {{-- @role('superadministrator')
                    @livewire('addBuilding-create-popup')
                    @endrole --}}
                    </div>
                    @endrole
                </div>
                <div class="card-body">
                    {{-- <a  href="/building/create"  class="btn btn-primary my-2 "><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp; Add Building</a> --}}
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="example1">
                            <thead>
                                <tr class="info">
                                    <th width="1%">#</th>
                                    <th width="5%">Projects Name</th>
                                    <th width="5%">FM - PROGRESS</th>
                                    <th width="3%">FM - DATE</th>
                                    <th width="3%">TOT - PROGRESS</th>
                                    <th width="3%">TOT - DATE</th>
                                    <th width="1%">Edit</th>
                                    @role('superadministrator')
                                    <th width="1%">DELETE</th>
                                    @endrole
                                </tr>
                            </thead>
                    </div>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->buildingName }}</td>
                                <td>{{ $row->fmProgress }}</td>
                                <td>{{ $row->dateFm }}</td>
                                <td>{{ $row->totProgress }}</td>
                                <td>{{ $row->dateTot }}</td>
                                <td>
                                    <form action="{{ route('progress.edit', $row->id) }}" method="PUT">
                                        @csrf @method('HEAD')
                                        <input type="submit" value='Edit' " class=" btn btn-warning ">
                                        </form>
                                    </td>
                                    @role('superadministrator')
                                    <td>
                                        <form action=" {{ route('progress.destroy', $row->id) }}" method="post">
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
