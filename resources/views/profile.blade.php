@section('requaire')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
            integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />
    <!--for global styling-->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <!-- for footer and header-->
    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
    <!--custom styling-->
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
@endsection

@include('layouts.partials.head')
@include('layouts.partials.navbar')

@extends('layouts.proflayout')
