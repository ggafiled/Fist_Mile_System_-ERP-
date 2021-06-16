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
                <div class="card-header text-white bg-dark">{{ __('CONSTARUTION MANAGEMENT TABLE') }}</h4>
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
                                    <th>#</th>
                                    <th>PROJECTNAME</th>
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
                                <td>{{ $row->type}}</td>
                                <td>
                                    <form action="{{ route('constarution.edit', $row->id) }}" method="PUT">
                                        @csrf @method('HEAD')
                                        <input type="submit" value='Edit' " class=" btn btn-warning ">
                                        </form>
                                    </td>
                                    @role('superadministrator')
                                    <td>
                                        <form action=" {{ route('constarution.destroy', $row->id) }}" method="post">
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

    });

    </script>
@stop
@endsection
