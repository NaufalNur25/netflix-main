<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix world – Watch TV Shows Online, Watch Movies Online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('lib/jquery 3.5.0.js') }}"></script>
     <!--main script file-->
     <script src="{{ asset('js/main-script.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/browse.css') }}">

</head>

<body>
<!-- dashboard/browse page block start | home page after login | -->
<main id="mainContainer" class="">
    <div>
        @include('layouts.partials.navbar')
        <!--my list container-->
        <section id="mylist" class="container p-t-10" style="padding-top: 100px;">
            <h4 class="romantic-heading">
                My List
            </h4>
            <div class="my-list-page-container d-flex flex-start flex-middle">
                <a href="#">
                    <img src="{{ asset('images/movies/horrible-bosses-middle-poster.webp') }}" alt=""
                        class="mylist-img p-r-10 p-t-10 image-size item"></a>
                <a href="#">
                    <img src="{{ asset('images/movies/kabir-singh-poster.webp') }}" alt=""
                        class="mylist-img p-r-10 p-t-10 image-size item"></a>
                <a href="#">
                    <img src="{{ asset('images/movies/extraction-poster.jpg') }}" alt=""
                        class="mylist-img p-r-10 p-t-10 image-size item"></a>
                <a href="#">
                    <img src="{{ asset('images/tv-show/poster/never-have-ever-short poster.jpg') }}" alt=""
                        class="mylist-img p-r-10 p-t-10 image-size item"></a>
                <a href="#">
                    <img src="{{ asset('images/movies/we-are-the-milers-poster-little.webp') }}" alt=""
                        class="mylist-img p-r-10 p-t-10 image-size item"></a>
            </div>
        </section>

    </div>
    </div>

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
</main>

<div class="footer-navigation d-flex space-between">
    <a href="browse.html" class="nav-item active">
        <i class="fa fa-home" aria-hidden="true"></i> </br>
        <span>Home</span>
    </a>
    <a href="search.html" class="nav-item">
        <i class="fa fa-search" aria-hidden="true"></i></br>
        Search
    </a>
    <a href="latest.html" class="nav-item">
        <i class="fa fa-film" aria-hidden="true"></i></br>
        Latest
    </a>
    <a href="user-profile/home.html" class="nav-item">
        <i class="fa fa-user" aria-hidden="true"></i></br>
        Account
    </a>
</div>
</body>

</html>
