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

	div.dataTables_wrapper {
		width: 2900px;
		margin: 0 auto;
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
                                            <th>Fm-Progress</th>
                                            <th>วันวางโครงข่าย</th>
                                            <th>TOT</th>
                                            <th>วันวางโครงข่าย TOT</th>
                                            <th>AIS</th>
                                            <th>วันวางโครงข่าย AIS</th>
                                            <th>3BB</th>
                                            <th>วันวางโครงข่าย 3BB</th>
                                            <th>SINET</th>
                                            <th>วันวางโครงข่าย SINET</th>
                                            <th>FN</th>
                                            <th>วันวางโครงข่าย FN</th>
                                            <th>TRUE</th>
                                            <th>วันวางโครงข่าย TRUE</th>
                                            <th>Update</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>

                            </div>
                            <tbody>
                                @if($data)
                                @forelse ($data as $item)
                                <tr>
                                    <th scope="item">{{$item->id}}</th>
                                    <td>{{$item->buildingId}}</td>
                                    <td>{{$item->fmProgress}}</td>

                                    <td>{{$item->dateProgress}}</td>

                                    <td>{{$item->totProgress}}</td>
                                    <td>{{$item->totDate}}</td>

                                    <td>{{$item->aisProgress}}</td>
                                    <td>{{$item->aisDate}}</td>

                                    <td>{{$item->Progress3bb}}</td>
                                    <td>{{$item->Date3bb}}</td>

                                    <td>{{$item->sinetProgress}}</td>
                                    <td>{{$item->sinetDate}}</td>

                                    <td>{{$item->fnProgress}}</td>
                                    <td>{{$item->fnDate}}</td>

                                    <td>{{$item->trueProgress}}</td>
                                    <td>{{$item->trueDate}}</td>

                                    <td>{{$item->updated_at}}</td>
                                    <td>
                                        <form action="{{ route('progress.edit',$item->id) }}" method="PUT">

                                            <input type="submit" value='edit' " class=" btn btn-warning ">
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>{{ __('ไม่มีข้อมูลในระบบ') }}</td>
                                </tr>
                                @endforelse
                               @endif
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
