@extends('adminlte::page')

@section('content')
<style>
        th {
            white-space: nowrap;
        }

        div.dataTables_wrapper {
            width: 3190px;
        }
        th { white-space: nowrap; }
</style>
<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-white bg-dark">{{ __('PROGRESS TABLE LIST') }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="example1" style="width:100%">
                        <thead >
                            <tr class="info">
                                            <th>#</th>
                                            <th>Building</th>
                                            <th>Fm-Progress</th>
                                            <th>Network Laying Date</th>
                                            <th>TOT</th>
                                            <th>Network Laying Date TOT</th>
                                            <th width="5%">AIS</th>
                                            <th>Network Laying Date AIS</th>
                                            <th width="5%">3BB</th>
                                            <th>Network Laying Date 3BB</th>
                                            <th width="5%">SINET</th>
                                            <th>Network Laying Date SINET</th>
                                            <th width="5%">FN</th>
                                            <th>Network Laying Date FN</th>
                                            <th width="5%">TRUE</th>
                                            <th>Network Laying Date TRUE</th>
                                            <th width="5%">Update</th>
                                            <th>EDIT</th>
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
    $('#example1').DataTable( {
        "scrollX": true
    } );
} );
</script>
@stop
