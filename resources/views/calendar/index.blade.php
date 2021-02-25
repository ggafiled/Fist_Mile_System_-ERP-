@extends('adminlte::page')

@section('content')
<div>
    @livewire('appointments-calendar')
</div>
@endsection

@section('adminlte_js')
    {!! $calendar->script() !!}
@endsection
