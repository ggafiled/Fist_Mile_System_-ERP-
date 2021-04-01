@extends('adminlte::page')

@section('content')
{{-- <style>
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

</style> --}}
<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('RESPLICE TABLE LIST') }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="example1">
                        <thead >
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
                                            <th>Action</th>
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
                                 <td>
                                    <form action="{{ route('resplice.edit',$row->id) }}" method="PUT">
                                        @csrf @method('HEAD')
                                      <input type="submit" value='Edit'  " class="btn btn-warning ">
                                    </form>
                                </td>
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
