@section('requaire')
<link rel="stylesheet" href="{{ asset('lib/owl.carousel.css') }}" />
    <script src="{{ asset('lib/jquery 3.5.0.js') }}"></script>
    <script src="{{ asset('lib/owl.carousel.js') }}"></script>
    <!--main script file-->
    <script src="{{ asset('js/main-script.js') }}"></script>


    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />
@endsection

@include('layouts.partials.head')
@include('layouts.partials.navbar')

@extends('layouts.movieout')