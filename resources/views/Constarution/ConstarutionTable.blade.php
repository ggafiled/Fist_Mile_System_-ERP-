@extends('adminlte::page')

@section('content')

<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('CONSTARTION TABLE LIST') }}</div>
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

                                <th>Survey&Desing</th>
                                <th>SurveyBy</th>
                                <th>SurveyDate</th>
                                <th>SurveyPlan</th>
                                <th>SurveyPlanDate</th>

                                <th>IFCC</th>
                                <th>InstalledBy</th>
                                <th>InstallDate</th>

                                <th>WallBox</th>
                                <th>InstalledBy</th>
                                <th>InstallDate</th>

                                <th>Microduct(vertical)</th>
                                <th>InstalledBy</th>
                                <th>InstallDate</th>

                                <th>Microduct(diagonal)</th>
                                <th>InstalledBy</th>
                                <th>InstallDate</th>
                                <th>Action</th>
                                {{-- @role('superadministrator')

                                @endrole --}}
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

                             <td>{{$row->exploreDesign}}</td>
                             <td>{{$row->exploreDesignTeam}}</td>
                             <td>{{$row->exploreDesignDate}}</td>
                             <td>{{$row->exploreDesignBy}}</td>
                             <td>{{$row->exploreDesignDateBy}}</td>

                             <td>{{$row->ifcc}}</td>
                             <td>{{$row->ifccTeam}}</td>
                             <td>{{$row->ifccDate}}</td>

                             <td>{{$row->wallBox}}</td>
                             <td>{{$row->wallBoxTeam}}</td>
                             <td>{{$row->wallBoxDate}}</td>

                             <td>{{$row->microductD}}</td>
                             <td>{{$row->microductTeamD}}</td>
                             <td>{{$row->microductDateD}}</td>

                             <td>{{$row->microductK}}</td>
                             <td>{{$row->microductTeamK}}</td>
                             <td>{{$row->microductDateK}}</td>
                             <td>
                                <form action="{{ route('constarution.edit',$row->id) }}" method="PUT">

                                    <input type="submit" value='edit' " class=" btn btn-warning ">
                                </form>
                            </td>
                            {{-- @role('superadministrator')
                            <td>
                                <form action="{{route('building.destroy',$row->id)}}" method="post">
                                    @csrf @method('DELETE')
                                  <input type="submit" value='ลบ' class="btn btn-danger deleteForm">
                                </form>
                            </td>
                            @endrole --}}
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
    $('#example1').DataTable( {
        "scrollX": true
    } );
} );

</script>
@stop




