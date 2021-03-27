@extends('adminlte::page')

@section('content')
<h1>Comming Soon</h1>
@endsection
@section('adminlte_js')
@include('partials.notification')
<script src=" {{ asset('js/app.js') }}"></script>
@endsection
