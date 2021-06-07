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
    {{-- <h3>{{ __('CREATE  PROJECT FORM') }}</h3> --}}
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card ">
                {{-- <div class="card-header text-white bg-dark">
                    <h>{{ __('CREATE PROJECT') }}
                </div> --}}
                <div class="card-body">
                    <div class="form-group">
                        <div class="container-fluid mx-auto mt-2 mb-2">
                            <form action="{{ route('constarution.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>PROJECT NAME</label>
                                            <select class="buildingName form-control" id="buildingName"
                                                name="buildingName"></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>DESING-BY</label>
                                            <select class="desingBy form-control" id="desingBy" name="desingBy"></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>SURVEY - DESING</label>
                                            <select class="surveyDesing form-control" id="surveyDesing"
                                                name="surveyDesing"></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>SURVEY - DESING - DATE</label>
                                            <input type="date" class="form-control" name="surveyDesingDate"
                                                id="surveyDesingDate">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>SURVEY - DESING - DATE - BY</label>
                                            <input type="time" class="form-control" name="surveyDesingDateBy"
                                                id="surveyDesingDateBy">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>IFCC</label>
                                            <select class="ifcc form-control" id="ifcc" name="ifcc"></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>IFCC - DATE</label>
                                            <input type="date" class="form-control" name="ifccDate" id="ifccDate">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>WALLBOX</label>
                                            <select class="wallBox form-control" id="wallBox" name="wallBox"></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>WALLBOX - DATE</label>
                                            <input type="date" class="form-control" name="wallBoxDate" id="wallBoxDate">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group ">
                                            <label>TYPE</label>
                                            <select type="text" class="form-control" name="type" id="type">
                                                <option>Choose Type</option>
                                                <option value="microduct">MICRODUCT</option>
                                                <option value="fiber">FIBER</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="microduct type">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>MICRODUCT (แนวดิ่ง)</label>
                                                <select class="microductD form-control" id="microductD"
                                                    name="microductD"></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>MICRODUCT - DATE (แนวดิ่ง)</label>
                                                <input type="date" class="form-control" name="microductDateD"
                                                    id="microductDateD">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>MICRODUCT (แนวขว้าง)</label>
                                                <select class="microductK form-control" id="microductK"
                                                    name="microductK"></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>MICRODUCT - DATE (แนวขว้าง)</label>
                                                <input type="date" class="form-control" name="microductDateK"
                                                    id="microductDateK">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>BLOW</label>
                                                <select class="blow form-control" id="blow" name="blow"></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>SPLICE</label>
                                                <select class="splice form-control" id="splice" name="splice"></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fiber type">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>FIBER - CONVERTION</label>
                                                <select class="fiberConvertion form-control" id="fiberConvertion"
                                                    name="fiberConvertion"></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>FIBER - CONVERTION - DATA </label>
                                                <input type="date" class="form-control" name="fiberConvertionDateD"
                                                    id="fiberConvertionDateD">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>SPLICE</label>
                                                <select class="splice form-control" id="splice" name="splice"></select>
                                            </div>
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

@section('adminlte_js')
    <script type="text/javascript">

        $(document).ready(function() {
            $("select").change(function() {
                $(this).find("option:selected").each(function() {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".type").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".type").hide();
                    }
                });
            }).change();
        });


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

        $('#surveyDesing').select2({
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

        $('#ifcc').select2({
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

        $('#wallBox').select2({
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

        $('#splice').select2({
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

        $('#microductD').select2({
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

        $('#microductK').select2({
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

        $('#fiberConvertion').select2({
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

        $('#splice').select2({
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

        $('#blow').select2({
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

        $('#desingBy').select2({
            placeholder: 'Select an Desing...',
            ajax: {
                url: '/dataselect-desingName',
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.desings,
                                id: item.desings
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
