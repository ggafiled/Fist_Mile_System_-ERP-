@extends('adminlte::page')

@section('content')
<div>
    {!! $calendar->calendar() !!} 
</div>
@endsection

@section('adminlte_js')
    {!! $calendar->script() !!}
@endsection
