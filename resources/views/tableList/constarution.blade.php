@extends('adminlte::page')
@section('content')
    <h3>{{ __('PROGRESS TABLE LIST') }}</h3>
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('CONSTARUTION TABLE') }}
                    </center>
                </div>
                <div class="card-body">
                    {{-- <a  href="/building/create"  class="btn btn-primary my-2 "><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp; Add Building</a> --}}
                    <div class="table-responsive">
                        <table class="display nowrap" id="example1" style="width:100%">
                            <thead>
                                <tr class="info">
                                    <th width="1%">#</th>
                                    <th width="10%">Projects Name</th>
                                    <th width="10%">DESING - BY</th>
                                    <th width="10%">SURVEY - DESING</th>
                                    <th width="10%">SURVEY - DESING - DATE</th>
                                    <th width="10%">SURVEY - DESING - DATE - BY</th>
                                    <th width="10%">IFCC</th>
                                    <th width="10%">IFCC - DATE</th>
                                    <th width="10%">WALLBOX</th>
                                    <th width="10%">WALLBOX - DATE</th>
                                    <th width="10%">TYPE</th>
                                    <th width="10%">MICRODUCT - D</th>
                                    <th width="10%">MICRODUCT - DateD</th>
                                    <th width="10%">MICRODUCT - K</th>
                                    <th width="10%">MICRODUCT - DateK</th>
                                    <th width="10%">fiberConvertion</th>
                                    <th width="10%">fiberConvertionDateD</th>
                                    <th width="10%">BLOW</th>
                                    <th width="10%">splice</th>
                                </tr>
                            </thead>
                    </div>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->buildingName }}</td>
                                <td>{{ $row->desingBy }}</td>
                                <td>{{ $row->surveyDesing }}</td>
                                <td>{{ $row->surveyDesingDate }}</td>
                                <td>{{ $row->surveyDesingDateBy }}</td>
                                <td>{{ $row->ifcc }}</td>
                                <td>{{ $row->ifccDate }}</td>
                                <td>{{ $row->wallBox }}</td>
                                <td>{{ $row->wallBoxDate }}</td>
                                <td>{{ $row->type }}</td>
                                <td>{{ $row->microductD }}</td>
                                <td>{{ $row->microductDateD }}</td>
                                <td>{{ $row->microductK }}</td>
                                <td>{{ $row->microductDateK }}</td>
                                <td>{{ $row->fiberConvertion }}</td>
                                <td>{{ $row->blow }}</td>
                                <td>{{ $row->splice }}</td>
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
@endsection

@section('adminlte_js')

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "scrollX": true
            });
        });

        $(document).ready(function() {
            $('#example1').DataTable({
                "scrollX": true
            });
        });
        // $(document).ready(function() {
        //     $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        //         $.fn.dataTable.tables({
        //             visible: true,
        //             api: true
        //         }).columns.adjust();
        //     });

        //     $('table.table').DataTable({
        //         scrollY: 200,
        //         scrollCollapse: true,
        //         paging: false
        //     });

        //     // Apply a search to the second table for the demo
        //     $('#myTable2').DataTable().search('New York').draw();
        // });

    </script>
@stop
