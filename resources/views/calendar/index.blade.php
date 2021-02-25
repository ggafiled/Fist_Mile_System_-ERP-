@extends('adminlte::page')

@section('content')
<div>
    <livewire:appointments-calendar year="2019" month="12" />
</div>
@endsection

@section('adminlte_js')
    @livewireCalendarScripts
@endsection
