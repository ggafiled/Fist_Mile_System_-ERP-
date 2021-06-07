@extends('adminlte::page')
@section('content')
    <h3>{{ __('PROGRESS TABLE LIST') }}</h3>
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('PROGRESS TABLE') }}
                    </center>
                </div>
                <div class="card-body">
                    {{-- <a  href="/building/create"  class="btn btn-primary my-2 "><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp; Add Building</a> --}}
                    <div class="table-responsive">
                        <table class="display nowrap" id="example" style="width:100%">
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
                                <td>{{ $row->buildingName }}</td>
                                <td>{{ $row->fmProgress }}</td>
                                <td>{{ $row->dateFm }}</td>
                                <td>{{ $row->totProgress }}</td>
                                <td>{{ $row->dateTot }}</td>
                                <td>{{ $row->totProgress }}</td>
                                <td>{{ $row->dateTot }}</td>

                                <td>{{ $row->aisProgress }}</td>
                                <td>{{ $row->dateais }}</td>

                                <td>{{ $row->progress3bb }}</td>
                                <td>{{ $row->date3BB}}</td>

                                <td>{{ $row->sinetProgress }}</td>
                                <td>{{ $row->dateSinet}}</td>

                                <td>{{ $row->trueProgress }}</td>
                                <td>{{ $row->dateTrue}}</td>
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
            $('#example').DataTable({
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
