@extends('adminlte::page')

@section('content')
<style>
    h3 {
        font-family: Tahoma, Verdana, sans-serif;
        font-weight: bold;
    }

</style>
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card ">
                    <div class="card-header text-white bg-dark">
                        <h3>{{ __('TABLE PROGRESS') }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="container-fluid mx-auto mt-2 mb-2">
                                <table class="table table-striped" id="example1">
                                    <thead>
                                        <tr class="info">
                                            <th width="2%">#</th>
                                            <th width="10%">Building</th>
                                            <th width="5%">Fm-Progress</th>
                                            <th width="8%">วันวางโครงข่าย</th>
                                            <th width="5%">TOT</th>
                                            <th width="5%">AIS</th>
                                            <th width="5%">3BB</th>
                                            <th width="5%">SINET</th>
                                            <th width="5%">FN</th>
                                            <th width="5%">TRUE</th>
                                            <th width="5%">Update</th>
                                            <th width="2%">Edit</th>
                                            <th width="2%">History</th>
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
                                    <td>{{$item->aisProgress}}</td>
                                    <td>{{$item->Progress3bb}}</td>
                                    <td>{{$item->sinetProgress}}</td>
                                    <td>{{$item->fnProgress}}</td>
                                    <td>{{$item->trueProgress}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>
                                        <form action="{{ route('progress.edit',$item->id) }}" method="PUT">
                                         
                                            <input type="submit" value='edit' " class=" btn btn-warning ">
                                        </form>
                                    </td>
                                    <td>
                                        {{-- <form action="{{ route('progress.edit',$item->id) }}" method="PUT"> --}}
                                         
                                            <input type="submit" value='view' " class=" btn btn-info ">
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
<script src=" {{ asset('js/app.js') }}"></script>
@endsection
