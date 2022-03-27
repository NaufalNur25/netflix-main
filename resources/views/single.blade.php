@section('requaire')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
    integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">
    <link rel="stylesheet" href="{{ asset('css/single.css') }}">

    <!--html 5 video player-->

@endsection

@include('layouts.partials.head')
@include('layouts.partials.popup')

@section('executeSINGLE')
    <!-- section video-->
<div class="container">
    <a href="/app/movie" class="btn btn-danger mt-4">< back</a>

    <div class="row">
        <div class="col-6">
            <div class="align-items-center">
            <div class="card bg-dark mb-3 px-3 mt-3"><br>
            <div class="card text-white bg-dark mb-3">
            <div class="card-header" style="background-color: black">Detail</div>
            </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('/image/'.$item->filename) }}" class="img-fluid" alt="No Image" style="border-radius: 10px"><br>
                    </div>
                    <div class="col-md-8 pt-3">
                        <div class="card-body">
                            <h6 class="card-title"><b>Title</b> <p class="card-text fs-6">{{ $item -> m_title }}</p></h6>
                            <h6 class="card-title"><b>Publisher</b> <p class="card-text fs-6">{{ $item -> m_publis }}</p></h6>
                            <h6 class="card-title"><b>Duration</b> <p class="card-text fs-6">{{ $item -> m_time .' Minute'}}</p></h6>
                            <h6 class="card-title"><b>Synopsis</b> <p class="card-text fs-6">{{ $item -> m_desc }}</p></h6>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-6 mt-5">
                <div class="movielogo ">
                    <h1><b>{{ $item -> m_title }}</b></h1>
                </div>
                <div class="movierelease" style="margin-left: -10px">
                    <span class="year">
                        <b>Release :</b> {{  $item -> m_release }}
                    </span>
                    <span class="rating">
                        {{'PG - '. $item -> m_age . '+'}}
                    </span>
                    <span class="timeduration">
                        {{ $item -> m_time . ' minute'}}
                    </span>
                </div>
                <div class="castinformation">
                    <p><span class="name">Genre : </span> {{ $item -> m_tag }} | <b> Rating : </b>{{ $item -> m_rate}}/10</p>
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
                <a href="/edit/{{ $item->id }}" class="btn btn-primary col-12 mt-3">Edit Data Movie</a>
        </div>
    </div>
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
