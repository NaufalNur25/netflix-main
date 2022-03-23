@section('requaire')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
    integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
    <link rel="stylesheet" href="{{ asset('css/single.css') }}">

    <!--html 5 video player-->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.2/plyr.polyfilled.js"></script>

@endsection

@include('layouts.partials.head')
@include('layouts.partials.navbar')

@section('executeSINGLE')

    <!-- section video-->
    <div class="card-body">
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <img src="{{ asset('/image/'.$item->filename) }}" class="img-fluid" alt="No Image">
                </div>
                <div class="col-md-8">
                    <h6 class="card-title">Title</h6>
                    <p class="card-text">{{ $item -> m_title }}</p>
                    <h6 class="card-title">Publisher</h6>
                    <p class="card-text">{{ $item -> m_publis }}</p>
                    <h6 class="card-title">Duration</h6>
                    <p class="card-text">{{ $item -> m_time }}</p>
                </div>
            </div>
        </div>
        <br>
        <h5 class="card-title">Synopsis</h5>
        <p class="card-text">{{ $item -> m_desc }}</p>
    </div>



    <section class="movieinformation container">
        <div class="movielogo">
            <h1>{{ $item -> m_title }}</h1>
        </div>
        <div class="movierelease" style="margin-left: -10px">
            <span class="year">
                2019
            </span>
            <span class="rating">
                PG-13
            </span>
            <span class="timeduration">
                {{ $item -> m_time . ' minute'}}
            </span>
        </div>
        <div class="description">
            {{ $item -> m_desc }}
        </div>
        <div class="castinformation">
            <p><span class="name">Publisher:</span> {{ $item -> m_publis }}</p>
            <p><span class="name">Genre:</span> {{ $item -> m_tag }}</p>
        </div>
        <div class="actions d-flex flex-start flex-middle">
            <a href="#" class="link-item">
                <i class="fa fa-plus"></i></br>
                My List
            </a>
            <a href="#" class="link-item">
                <i class="fa fa-thumbs-up"></i></br>
                Like
            </a>
            <a href="#" class="link-item">
                <i class="fa fa-share"></i></br>
                Share
            </a>
            <a href="#" class="link-item">
                <i class="fa fa-download"></i></br>
                Download
            </a>
        </div>
    </section>

    </div>


    <!--footer section and footer fixed menu mobile-->

    <footer class="mainfooter d-flex direction-column space-between" id=" footer">
        <div class="container footer-container flex-start">
            <div class="widgets d-flex space-between">
                <div class="first-widget">
                    <ul>
                        <li class="list-item">Audio and Subtitles</li>
                        <li class="list-item">Media Center</li>
                        <li class="list-item">Privacy</li>
                        <li class="list-item">Contact us</li>
                    </ul>
                </div>
                <div class="second-widget">
                    <ul>
                        <li class="list-item">Help Center</li>
                        <li class="list-item">Cookie</li>
                        <li class="list-item">Jobs</li>
                    </ul>
                </div>
                <div class="third-widget">
                    <ul>
                        <li class="list-item">Audio Description</li>
                        <li class="list-item">Investor Relations</li>
                        <li class="list-item">Legal Notice</li>
                    </ul>
                </div>
                <div class="forth-widget">
                    <ul>
                        <li class="list-item">Gift Card</li>
                        <li class="list-item">Term Of Use</li>
                        <li class="list-item">Corporate Information</li>
                    </ul>
                </div>
            </div>
        </div>


    </footer>
    </div>
@endsection

@extends('layouts.singleout')
