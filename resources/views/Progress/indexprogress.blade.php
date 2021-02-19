@extends('adminlte::page')

@section('content') 
{{-- {!! Form::open(array('route' => array('building.update', $data->id),'method' => 'put')) !!} --}}
<div class="row justify-content-center">
    <div class="col-md">
        <div class="card ">
            <div class="card-header text-white bg-dark"><h3 >{{ __('UPDATE PROGRESS') }}</h3></div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                             <div class="row">
                                  <div class="col">
                                      <div class="form-group">
                                          {!! Form::label('ชื่ออาคาร(Project) :') !!}
                                          {!! Form::text('ดึงอยูู่ลจาก db ชื่อตึกมา',null,["class"=>"form-control"])!!}
                                          {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                      </div>
                                  </div>
                                  <div class="col-sm-2">
                                       <div class="form-group">
                                           {!! Form::label('FM Progress :') !!}
                                           {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'กำลังสร้างพร้อมโครงการ','3'=>'สร้างพร้อมโครงการ','4'=>'รอเข้าดำเนินการ','5'=>''],null, ['class'=>'form-control']) !!}
                                           {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                       </div>
                                   </div>
                                   <div class="col-sm-2">
                                       <div class="form-group">
                                           {!! Form::label('วันที่เข้าวางโครงข่าย :') !!}
                                           {!! Form::date('dateProgress',null,["class"=>"form-control"])!!}
                                           {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                       </div>
                                   </div>
                              </div>      
                              
                              <div class="row">
                                  <div class="col-sm-2">
                                       <div class="form-group">
                                           {!! Form::label('TOT Progress :') !!}
                                           {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null, ['class'=>'form-control']) !!}
                                           {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                       </div>
                                   </div>
                                  <div class="col-sm-2">
                                      <div class="form-group">
                                          {!! Form::label('AIS Progress :') !!}
                                          {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null, ['class'=>'form-control']) !!}
                                          {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                      </div>
                                  </div>
                                  <div class="col-sm-2">
                                       <div class="form-group">
                                           {!! Form::label('3BB Progress :') !!}
                                           {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null, ['class'=>'form-control']) !!}
                                           {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                       </div>
                                   </div>
                                   <div class="col-sm-2">
                                       <div class="form-group">
                                           {!! Form::label('Sinet Progress :') !!}
                                           {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null, ['class'=>'form-control']) !!}
                                           {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                       </div>
                                   </div>
                                  <div class="col-sm-2">
                                      <div class="form-group">
                                          {!! Form::label('FN Progress :') !!}
                                          {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null, ['class'=>'form-control']) !!}
                                          {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                      </div>
                                  </div>
                                  <div class="col-sm-2">
                                       <div class="form-group">
                                           {!! Form::label('True Progress :') !!}
                                           {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ','5'=>''],null, ['class'=>'form-control']) !!}
                                           {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                       </div>
                                   </div>
                              </div>    
                       <input type="submit" value="อัพเดท " class="btn btn-warning">                            
                       <a href="/home" class="btn btn-success my-2">กลับ</a>        
                </div>
             </div>
        </div>
        {!! Form::close() !!}
    </div>  
    <div class="row justify-content-center">
         <div class="col-md">
             <div class="card ">
                 <div class="card-header text-white bg-dark"><h3 >{{ __('TABLE PROGRESS') }}</h3></div>
                     <div class="card-body">
                         <div class="form-group">
                             <div class="container-fluid mx-auto mt-2 mb-2">
                               <table class="table table-striped" id="example1">
                                   <thead >
                                       <tr class="info">
                                        <th width="12%">#</th>
                                           <th width="12%">ชื่ออาคาร</th>
                                           <th width="5%">fm-progress</th>
                                           <th width="5%">วันวางโครงข่าย</th>
                                           <th width="5%">TOT</th>
                                           <th width="5%">AIS</th>
                                           <th width="5%">3BB</th>
                                           <th width="5%">SINET</th>
                                           <th width="5%">FN</th>
                                           <th width="5%">TRUE</th>
                                           <th width="5%">แก้ไข</th>
                                        
                                       </tr>
                                   </thead>
                                 
                               </div>
                               <tbody>
                                @foreach ($data as $row)
                                <tr>
                                    <th scope="row">{{$row->id}}</th>
                                    <td>{{$row->building}}</td>
                                    <td>{{$row->fmProgress}}</td>
                                    <td>{{$row->dateProgress}}</td>
                                    <td>{{$row->totProgress}}</td>
                                    <td>{{$row->aisProgress}}</td>
                                    <td>{{$row->Progress3bb}}</td>
                                    <td>{{$row->sinetProgress}}</td>
                                    <td>{{$row->fnProgress}}</td>
                                    <td>{{$row->trueProgress}}</td>
                                    <td>
                                        <form action="{{ route('progress.edit',$row->id) }}" method="PUT">
                                            @csrf @method('HEAD')
                                          <input type="submit" value='แก้ไข'  " class="btn btn-warning ">
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
<script src="{{ asset('js/app.js') }}"></script>
@endsection