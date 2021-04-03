@extends('adminlte::page')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('PLANING MANAGEMENT') }}</h4>
                    </center>
                    @role('superadministrator')
                    <div class="card-tools">
                        <a type="button" href="/planning/create" class="btn btn-sm btn-primary" @click="newModal">
                            <i class="fa fa-plus-square"></i>
                            Add New
                        </a>
                        {{-- @role('superadministrator')
                       @livewire('createPlaningTable')
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
                                    <th width="4%">Name/Company</th>
                                    <th width="4%">LastName</th>
                                    <th width="3%">Tel(main)</th>
                                    <th width="3%">Tel(reserve)</th>
                                    <th width="5%">BuildingName</th>
                                    <th width="1%">EDIT</th>
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
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->lastName }}</td>
                                <td>{{ $row->phoneNumber1 }}</td>
                                <td>{{ $row->phoneNumber2 }}</td>
                                <td>{{ $row->buildingId }}</td>
                                <td>
                                    <form action="{{ route('planning.edit', $row->id) }}" method="PUT">
                                        <input type="submit" value='edit' " class=" btn btn-warning ">
                                        </form>
                                    </td>
                                    @role('superadministrator')
                            <td>
                                <form action="{{route('planning.destroy',$row->id)}}" method="post">
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
