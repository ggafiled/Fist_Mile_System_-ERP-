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
                                        <select class="buildingName form-control" id="buildingName"
                                        name="buildingName"></select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>FM - PROGRESS</label>
                                        <select class="fmProgress form-control" id="fmProgress"
                                        name="fmProgress"></select>
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
                                        <select class="totProgress form-control" id="totProgress"
                                        name="totProgress"></select>
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
                                        <select class="aisProgress form-control" id="aisProgress"
                                        name="aisProgress"></select>
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
                                        <select class="progress3bb form-control" id="progress3bb"
                                        name="progress3bb"></select>
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
                                        <select class="sinetProgress form-control" id="sinetProgress"
                                        name="sinetProgress"></select>
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
                                        <select class="fnProgress form-control" id="fnProgress"
                                        name="fnProgress"></select>
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
                                        <select class="trueProgress form-control" id="trueProgress"
                                        name="trueProgress"></select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>TRUE - DATE</label>
                                        <input type="date" class="form-control" name="dateTrue" id="dateTrue">
                                     </div>
                                </div>
                            </div>
                            <input type="submit" value="เพิ่มข้อมูล" class="btn btn-primary" method="POST">
                            @csrf @method('POST')
                        <a href="/building" class="btn btn-success my-2">กลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@section('adminlte_js')
<script type="text/javascript">
    $('#buildingName').select2({
        placeholder: 'Select an building name...',
        ajax: {
            url: '/building-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.buildingName,
                            id: item.buildingName
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('#fmProgress').select2({
        placeholder: 'Select an construction operation...',
        ajax: {
            url: '/dataselect-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.constructionOperation,
                            id: item.constructionOperation
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('#totProgress').select2({
        placeholder: 'Select an construction operation...',
        ajax: {
            url: '/dataselect-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.constructionOperation,
                            id: item.constructionOperation
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('#aisProgress').select2({
        placeholder: 'Select an construction operation...',
        ajax: {
            url: '/dataselect-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.constructionOperation,
                            id: item.constructionOperation
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('#progress3bb').select2({
        placeholder: 'Select an construction operation...',
        ajax: {
            url: '/dataselect-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.constructionOperation,
                            id: item.constructionOperation
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('#sinetProgress').select2({
        placeholder: 'Select an construction operation...',
        ajax: {
            url: '/dataselect-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.constructionOperation,
                            id: item.constructionOperation
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('#fnProgress').select2({
        placeholder: 'Select an construction operation...',
        ajax: {
            url: '/dataselect-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.constructionOperation,
                            id: item.constructionOperation
                        }
                    })
                };
            },
            cache: true
        }
    });

    $('#trueProgress').select2({
        placeholder: 'Select an construction operation...',
        ajax: {
            url: '/dataselect-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.constructionOperation,
                            id: item.constructionOperation
                        }
                    })
                };
            },
            cache: true
        }
    });

</script>
@stop
@endsection
