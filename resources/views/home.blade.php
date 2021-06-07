@extends('adminlte::page')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container-fluid">
                    <h3>{{ __('Desh Board') }}</h3>
                    <div class="row">
                        @permission('building-read')
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-secondary">
                                    <div class="inner">
                                        <h4>Create Project Form</h4>

                                        <p>cick to form</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-fw fa-building"></i>
                                    </div>
                                    <a href="/building/create" class="small-box-footer">Click <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endpermission
                            {{-- @permission('building-create|building-update')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3></h3>

                                <p>Add Building List</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-calendar-alt"></i>
                            </div>
                            <a href="/building/create" class="small-box-footer">Click <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission --}}
                            @permission('constarution-read|constarution-create|constarution-update')
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h4>Create Progress Form</h4>

                                            <p>cick to form</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-fw fa-poll"></i>
                                        </div>
                                        <a href="/progress/create" class="small-box-footer">Click <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                @endpermission
                                @permission('payments-read|payments-create|payments-update')
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h4>Create Constarution Form</h4>
                                                <p>cick to form</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-fw fa-calendar-check"></i>
                                            </div>
                                            <a href="/constarution/create" class="small-box-footer">Click <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    @endpermission
                                    @permission('status-operator-read|status-operator-create|status-operator-update')
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-danger">
                                                <div class="inner">
                                                    <h4>Create Planning Form</h4>
                                                    <p>cick to form</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fas fa-fw fa-poll-h"></i>
                                                </div>
                                                <a href="/planning/create" class="small-box-footer">Click <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                        @endpermission
                                        <div class="card-body">
                                            {{-- <a  href="/building/create"  class="btn btn-primary my-2 "><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp; Add Building</a> --}}
                                            <div class="table-responsive">
                                                <table class="table table-striped" id="example0">
                                                    <thead>
                                                        <tr class="info">
                                                            <th width="1%">#</th>
                                                            <th width="5%">Projects Name</th>
                                                            <th width="5%">Manager Name</th>
                                                            <th width="3%">Phone Number</th>
                                                            <th width="3%">Mail Manager</th>
                                                        </tr>
                                                    </thead>
                                            </div>
                                            <tbody>
                                                @foreach ($data as $row)
                                                    <tr>
                                                        <th scope="row">{{ $row->id }}</th>
                                                        <td>{{ $row->buildingName }}</td>
                                                        <td>{{ $row->nameManager }}</td>
                                                        <td>{{ $row->phoneManager }}</td>
                                                        <td>{{ $row->mailManager }}</td>
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
                                $("#example0").DataTable({
                                    lengthMenu: [
                                        [10, 25, 50, -1],
                                        [10, 25, 50, "All"]
                                    ]
                                });
                            });

                        </script>
                    @stop
                @endsection
