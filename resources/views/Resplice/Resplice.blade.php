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

    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    th { white-space: nowrap; }

</style>
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card ">
                    <div class="card-header text-white bg-dark">
                        <h3>{{ __('TABLE PROGRESS') }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="container-fluid mx-auto mt-2 mb-2">
                                <table class="table table-striped" id="example1">
                                    <thead>
                                        <tr class="info">
                                            <th>#</th>
                                            <th>Building</th>
                                            <th>Tower</th>
                                            <th>Floor</th>
                                            <th>Room</th>
                                            <th>Zone</th>
                                            <th>TechnicianTeamStart</th>
                                            <th>StartDate</th>
                                            <th>PlanDate</th>
                                            <th>PlanFinish</th>
                                            <th>PlanStart</th>
                                            <th>PlanComplete</th>
                                            <th>TechnicianTeamEnd</th>
                                        </tr>
                                    </thead>
                            </div>
                            <tbody>
                                @foreach ($data as $row)
                                <tr>
                                 <th scope="row">{{$row->id}}</th>
                                 <td>{{$row->buildingId}}</td>
                                 <td>{{$row->numberLayer}}</td>
                                 <td>{{$row->floor}}</td>
                                 <td>{{$row->roomNumber}}</td>
                                 <td>{{$row->zone}}</td>
                                 <td>{{$row->technicianTeamStart}}</td>
                                 <td>{{$row->startDate}}</td>
                                 <td>{{$row->planDate}}</td>
                                 <td>{{$row->planFinish}}</td>
                                 <td>{{$row->planStart}}</td>
                                 <td>{{$row->planComplete}}</td>
                                 <td>{{$row->technicianTeamEnd}}</td>
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
                        $("#example1").DataTable({
                            lengthMenu: [
                                [10, 25, 50, -1],
                                [10, 25, 50, "All"]
                            ]
                        });
                    });

</script>
@stop
