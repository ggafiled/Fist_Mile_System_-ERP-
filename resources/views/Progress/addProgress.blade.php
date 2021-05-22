@extends('adminlte::page')

@section('content')
    <style>

    </style>
    <ul>
        @if ($errors->all())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
    </ul>
       <div class="row justify-content-center">
        <div class="col-md">
            <div class="card ">
                {{-- <div class="card-header text-white bg-dark">
                    <h>{{ __('CREATE PROJECT') }}
                </div> --}}
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form action="{{ route('progress.store') }}" method="POST">
                                @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>PROJECT NAME</label>
                                        <input type="text" class="form-control" name="building_id" id="building_id"
                                            placeholder="ชื่อโปรเจ็ค">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>FM - PROGRESS</label>
                                        <select type="text" class="form-control" name="fmProgress" id="fmProgress">
                                            <option value="วางโครงข่ายแล้ว">วางโครงข่ายแล้ว</option>
                                            <option value="รอเข้า Survey">รอเข้า Survey</option>
                                            <option value="รอเข้าดำเนินการ">รอเข้าดำเนินการ</option>
                                            <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                            <option value="ดำเนิการแล้วเสร็จ">ดำเนิการแล้วเสร็จ</option>
                                            <option value="กำลังสร้างพร้อมโครงการฯ">กำลังสร้างพร้อมโครงการฯ</option>
                                            <option value="สร้างพร้อมโครงการฯ">สร้างพร้อมโครงการฯ</option>
                                            <option value="เชื่อมโครงข่ายแล้ว">เชื่อมโครงข่ายแล้ว</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>FM - DATE</label>
                                        <input type="date" class="form-control" name="dateFm" id="dateFm">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>TOT - PROGRESS</label>
                                        <select type="text" class="form-control" name="totProgress" id="totProgress">
                                            <option value="วางโครงข่ายแล้ว">วางโครงข่ายแล้ว</option>
                                            <option value="รอเข้า Survey">รอเข้า Survey</option>
                                            <option value="รอเข้าดำเนินการ">รอเข้าดำเนินการ</option>
                                            <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                            <option value="ดำเนิการแล้วเสร็จ">ดำเนิการแล้วเสร็จ</option>
                                            <option value="กำลังสร้างพร้อมโครงการฯ">กำลังสร้างพร้อมโครงการฯ</option>
                                            <option value="สร้างพร้อมโครงการฯ">สร้างพร้อมโครงการฯ</option>
                                            <option value="เชื่อมโครงข่ายแล้ว">เชื่อมโครงข่ายแล้ว</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>TOT - DATE</label>
                                        <input type="date" class="form-control" name="dateTot" id="dateTot">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>AIS - PROGRESS</label>
                                        <select type="text" class="form-control" name="aisProgress" id="aisProgress">
                                            <option value="วางโครงข่ายแล้ว">วางโครงข่ายแล้ว</option>
                                            <option value="รอเข้า Survey">รอเข้า Survey</option>
                                            <option value="รอเข้าดำเนินการ">รอเข้าดำเนินการ</option>
                                            <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                            <option value="ดำเนิการแล้วเสร็จ">ดำเนิการแล้วเสร็จ</option>
                                            <option value="กำลังสร้างพร้อมโครงการฯ">กำลังสร้างพร้อมโครงการฯ</option>
                                            <option value="สร้างพร้อมโครงการฯ">สร้างพร้อมโครงการฯ</option>
                                            <option value="เชื่อมโครงข่ายแล้ว">เชื่อมโครงข่ายแล้ว</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>AIS - DATE</label>
                                        <input type="date" class="form-control" name="dateAis" id="dateAis">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>3BB - PROGRESS</label>
                                        <select type="text" class="form-control" name="progress3bb" id="progress3bb">
                                            <option value="วางโครงข่ายแล้ว">วางโครงข่ายแล้ว</option>
                                            <option value="รอเข้า Survey">รอเข้า Survey</option>
                                            <option value="รอเข้าดำเนินการ">รอเข้าดำเนินการ</option>
                                            <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                            <option value="ดำเนิการแล้วเสร็จ">ดำเนิการแล้วเสร็จ</option>
                                            <option value="กำลังสร้างพร้อมโครงการฯ">กำลังสร้างพร้อมโครงการฯ</option>
                                            <option value="สร้างพร้อมโครงการฯ">สร้างพร้อมโครงการฯ</option>
                                            <option value="เชื่อมโครงข่ายแล้ว">เชื่อมโครงข่ายแล้ว</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>3BB - DATE</label>
                                        <input type="date" class="form-control" name="date3BB" id="date3BB">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>SINET - PROGRESS</label>
                                        <select type="text" class="form-control" name="sinetProgress" id="sinetProgress">
                                            <option value="วางโครงข่ายแล้ว">วางโครงข่ายแล้ว</option>
                                            <option value="รอเข้า Survey">รอเข้า Survey</option>
                                            <option value="รอเข้าดำเนินการ">รอเข้าดำเนินการ</option>
                                            <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                            <option value="ดำเนิการแล้วเสร็จ">ดำเนิการแล้วเสร็จ</option>
                                            <option value="กำลังสร้างพร้อมโครงการฯ">กำลังสร้างพร้อมโครงการฯ</option>
                                            <option value="สร้างพร้อมโครงการฯ">สร้างพร้อมโครงการฯ</option>
                                            <option value="เชื่อมโครงข่ายแล้ว">เชื่อมโครงข่ายแล้ว</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>SINET - DATE</label>
                                        <input type="date" class="form-control" name="dateSinet" id="dateSinet">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>FN - PROGRESS</label>
                                        <select type="text" class="form-control" name="fnProgress" id="fnProgress">
                                            <option value="วางโครงข่ายแล้ว">วางโครงข่ายแล้ว</option>
                                            <option value="รอเข้า Survey">รอเข้า Survey</option>
                                            <option value="รอเข้าดำเนินการ">รอเข้าดำเนินการ</option>
                                            <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                            <option value="ดำเนิการแล้วเสร็จ">ดำเนิการแล้วเสร็จ</option>
                                            <option value="กำลังสร้างพร้อมโครงการฯ">กำลังสร้างพร้อมโครงการฯ</option>
                                            <option value="สร้างพร้อมโครงการฯ">สร้างพร้อมโครงการฯ</option>
                                            <option value="เชื่อมโครงข่ายแล้ว">เชื่อมโครงข่ายแล้ว</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>FN - DATE</label>
                                        <input type="date" class="form-control" name="dateFn" id="dateFn">
                                    </div>
                                </div>
                                 <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>TURN - PROGRESS</label>
                                        <select type="text" class="form-control" name="trueProgress" id="trueProgress">
                                            <option value="วางโครงข่ายแล้ว">วางโครงข่ายแล้ว</option>
                                            <option value="รอเข้า Survey">รอเข้า Survey</option>
                                            <option value="รอเข้าดำเนินการ">รอเข้าดำเนินการ</option>
                                            <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                            <option value="ดำเนิการแล้วเสร็จ">ดำเนิการแล้วเสร็จ</option>
                                            <option value="กำลังสร้างพร้อมโครงการฯ">กำลังสร้างพร้อมโครงการฯ</option>
                                            <option value="สร้างพร้อมโครงการฯ">สร้างพร้อมโครงการฯ</option>
                                            <option value="เชื่อมโครงข่ายแล้ว">เชื่อมโครงข่ายแล้ว</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>TRUE - DATE</label>
                                        <input type="date" class="form-control" name="dateTrue" id="dateTrue">
                                     </div>
                                </div>
                            </div>
                            <input type="submit" value="CLICK CREATE" class="btn btn-primary" method="POST">
                            @csrf @method('POST')
                        <a href="/building" class="btn btn-success my-2">BACK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@section('adminlte_js')

@stop
@endsection
