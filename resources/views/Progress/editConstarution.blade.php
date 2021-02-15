@extends('adminlte::page')

@section('content')
<div class="row justify-content-center">
     <div class="col-md">
         <div class="card ">
             <div class="card-header text-white bg-dark"><h3 >{{ __('UPDATE PROGRESS') }}</h3></div>
                 <div class="card-body">
                     <div class="form-group">
                         <div class="container-fluid mx-auto mt-2 mb-2">
                              <div class="row">
                                   <div class="col-sm-1">
                                        <div class="form-group">
                                            {!! Form::label('ลำดับ :') !!}
                                            {!! Form::text(' ',null,["class"=>"form-control"])!!}
                                            {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                        </div>
                                    </div>
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
                                            {!! Form::text('ดึงอยูู่ลจาก db ชื่อตึกมา',null,["class"=>"form-control"])!!}
                                            {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('วันที่เข้าวางโครงขาย :') !!}
                                            {!! Form::date('ดึงอยูู่ลจาก db ชื่อตึกมา',null,["class"=>"form-control"])!!}
                                            {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                        </div>
                                    </div>
                               </div>      
                               
                               <div class="row">
                                   <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('TOT Progress :') !!}
                                            {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ'],null, ['class'=>'form-control']) !!}
                                            {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                        </div>
                                    </div>
                                   <div class="col-sm-2">
                                       <div class="form-group">
                                           {!! Form::label('AIS Progress :') !!}
                                           {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ'],null, ['class'=>'form-control']) !!}
                                           {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                       </div>
                                   </div>
                                   <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('3BB Progress :') !!}
                                            {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ'],null, ['class'=>'form-control']) !!}
                                            {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('Sinet Progress :') !!}
                                            {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ'],null, ['class'=>'form-control']) !!}
                                            {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                        </div>
                                    </div>
                                   <div class="col-sm-2">
                                       <div class="form-group">
                                           {!! Form::label('FN Progress :') !!}
                                           {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ'],null, ['class'=>'form-control']) !!}
                                           {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                       </div>
                                   </div>
                                   <div class="col-sm-2">
                                        <div class="form-group">
                                            {!! Form::label('True Progress :') !!}
                                            {!! Form::select('country',['1' => 'รอดำเนินการ','2'=>'ดำเนินการแล้วเสร็จ','3'=>'วางเครือข่ายบางตึกแล้ว','4'=>'กำลังสร้างพร้อมโครงการ'],null, ['class'=>'form-control']) !!}
                                            {{-- {!! Form::select(building::all()->pluck)('building')!!} --}}
                                        </div>
                                    </div>
                               </div>    
                        <input type="submit" value="อัพเดท " class="btn btn-warning">                            
                        <a href="/home" class="btn btn-success my-2">กลับ</a>        
                 </div>
              </div>
         </div>
     </div>  
     <div class="row justify-content-center">
          <div class="col-md">
              <div class="card ">
                  <div class="card-header text-white bg-dark"><h3 >{{ __('LOG') }}</h3></div>
                      <div class="card-body">
                          <div class="form-group">
                              <div class="container-fluid mx-auto mt-2 mb-2">
      
                      </div>
                   </div>
              </div>
          </div>              
   
@endsection