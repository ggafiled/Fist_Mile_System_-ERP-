
    <a type="button" class="btn btn-success" wire:clck="user_count" data-bs-toggle="modal" data-bs-target="#exampleModal">
         <i class="fa fa-plus-square"></i>
                        Add New
    </a>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Membership</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    {{-- <form action="{{ route('usermanagement.store') }}" method="POST"> --}}
                        <form action="{{ route('Register.create') }}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Full name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>



                            <div class="input-group mb-3">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="input-group mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div> --}}
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('AddNewUser') }}
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="planingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="planiModalLabel">ADD PLANNING</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form action="{{ route('building.store') }}" method="POST">
                                {{-- <form action="{{ route('planing.store') }}" method="POST"> --}}
                                @csrf
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('Name/Company') !!}
                                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name/Company']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('LastName') !!}
                                            {!! Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'LastName']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('phoneNumber1') !!}
                                            {!! Form::text('phoneNumber1', null, ['class' => 'form-control', 'placeholder' => 'phoneNumber1']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('phoneNumber2') !!}
                                            {!! Form::text('phoneNumber2', null, ['class' => 'form-control', 'placeholder' => 'phoneNumber2']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::label('Name/Company') !!}
                                            {!! Form::text('buildingId', null, ['class' => 'form-control', 'placeholder' => 'BuildingName']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Building No') !!}
                                            {!! Form::number('numberLayer', null, ['class' => 'form-control', 'placeholder' => 'Building No.']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('FLOOR') !!}
                                            {!! Form::number('floor', null, ['class' => 'form-control', 'placeholder' => 'Floor No..']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('ROOM') !!}
                                            {!! Form::number('roomNumber', null, ['class' => 'form-control', 'placeholder' => 'Room No.']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('ISP') !!}
                                            {!! Form::text('isp', null, ['class' => 'form-control', 'placeholder' => 'ISP']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('ISP CODE') !!}
                                            {!! Form::text('ispCode', null, ['class' => 'form-control', 'placeholder' => 'ISP CODE']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('MEMBER NUMBER') !!}
                                            {!! Form::number('memberNumber', null, ['class' => 'form-control', 'placeholder' => 'MEMBERNUMBER']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('FEES') !!}
                                            {!! Form::number('Fees', null, ['class' => 'form-control', 'placeholder' => 'FEES']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('CONFIRMING') !!}
                                            {!! Form::text('confirming', null, ['class' => 'form-control', 'placeholder' => 'CONFIRMING AN APPOINTMENT']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('TEAM') !!}
                                            {!! Form::text('Team', null, ['class' => 'form-control', 'placeholder' => 'TEAM']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('DATE') !!}
                                            {!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'DATE']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('TIME') !!}
                                            {!! Form::time('time', null, ['class' => 'form-control', 'placeholder' => 'TIME']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::label('REMARK') !!}
                                            {!! Form::text('remark', null, ['class' => 'form-control', 'placeholder' => 'REMARK']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('STATUS') !!}
                                            {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'STATUS']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('SUP STATUS') !!}
                                            {!! Form::text('supStatus', null, ['class' => 'form-control', 'placeholder' => 'SUP STATUS']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('DATE CONNECT') !!}
                                            {!! Form::date('dateConnect', null, ['class' => 'form-control', 'placeholder' => 'DATE DISCONNECT']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('DATE DISCONNECT') !!}
                                            {!! Form::time('dateDisconnect', null, ['class' => 'form-control', 'placeholder' => 'DATE DISCONNECT']) !!}
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="SAVE" class="btn btn-primary" method="POST">
                                @csrf @method('POST')
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="planingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD PLANNING</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form action="{{ route('building.store') }}" method="POST">
                                {{-- <form action="{{ route('planing.store') }}" method="POST"> --}}
                                @csrf
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('Name/Company') !!}
                                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name/Company']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('LastName') !!}
                                            {!! Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'LastName']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('phoneNumber1') !!}
                                            {!! Form::text('phoneNumber1', null, ['class' => 'form-control', 'placeholder' => 'phoneNumber1']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('phoneNumber2') !!}
                                            {!! Form::text('phoneNumber2', null, ['class' => 'form-control', 'placeholder' => 'phoneNumber2']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::label('Name/Company') !!}
                                            {!! Form::text('buildingId', null, ['class' => 'form-control', 'placeholder' => 'BuildingName']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('Building No') !!}
                                            {!! Form::number('numberLayer', null, ['class' => 'form-control', 'placeholder' => 'Building No.']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('FLOOR') !!}
                                            {!! Form::number('floor', null, ['class' => 'form-control', 'placeholder' => 'Floor No..']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('ROOM') !!}
                                            {!! Form::number('roomNumber', null, ['class' => 'form-control', 'placeholder' => 'Room No.']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('ISP') !!}
                                            {!! Form::text('isp', null, ['class' => 'form-control', 'placeholder' => 'ISP']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('ISP CODE') !!}
                                            {!! Form::text('ispCode', null, ['class' => 'form-control', 'placeholder' => 'ISP CODE']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('MEMBER NUMBER') !!}
                                            {!! Form::number('memberNumber', null, ['class' => 'form-control', 'placeholder' => 'MEMBERNUMBER']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('FEES') !!}
                                            {!! Form::number('Fees', null, ['class' => 'form-control', 'placeholder' => 'FEES']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('CONFIRMING') !!}
                                            {!! Form::text('confirming', null, ['class' => 'form-control', 'placeholder' => 'CONFIRMING AN APPOINTMENT']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('TEAM') !!}
                                            {!! Form::text('Team', null, ['class' => 'form-control', 'placeholder' => 'TEAM']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('DATE') !!}
                                            {!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'DATE']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('TIME') !!}
                                            {!! Form::time('time', null, ['class' => 'form-control', 'placeholder' => 'TIME']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::label('REMARK') !!}
                                            {!! Form::text('remark', null, ['class' => 'form-control', 'placeholder' => 'REMARK']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('STATUS') !!}
                                            {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'STATUS']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('SUP STATUS') !!}
                                            {!! Form::text('supStatus', null, ['class' => 'form-control', 'placeholder' => 'SUP STATUS']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('DATE CONNECT') !!}
                                            {!! Form::date('dateConnect', null, ['class' => 'form-control', 'placeholder' => 'DATE DISCONNECT']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!! Form::label('DATE DISCONNECT') !!}
                                            {!! Form::time('dateDisconnect', null, ['class' => 'form-control', 'placeholder' => 'DATE DISCONNECT']) !!}
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="SAVE" class="btn btn-primary" method="POST">
                                @csrf @method('POST')
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
