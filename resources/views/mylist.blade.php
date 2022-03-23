@section('requaire')
<script src="{{ asset('lib/jquery 3.5.0.js') }}"></script>
     <!--main script file-->
     <script src="{{ asset('js/main-script.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
@endsection

@include('layouts.partials.head')
@include('layouts.partials.navbar')

@extends('layouts.listout')
