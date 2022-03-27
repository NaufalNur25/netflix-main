<!DOCTYPE html>
<html class="no-js">
@include('layouts.partials.head')
<body>
    @include('layouts.partials.navbar')
    <main id="mainContainer" class="p-b-40">
        <!-- dashboard/browse page block start | home page after login | -->
        <div>
                <!-- hero section -->
                <div class="">
                    <section id="browse-dashboard" class=" d-flex direction-column flex-start middle-align">
                        <div>
                            <video class="hero-background-image" id="hero-video"
                            poster="{{asset('images/background.jpg')}}">
                        </video>

                        <!--left shadow-->
                        <div class="shadow-layer"></div>
                    </div>

                    <div class="container text-container" style="z-index: 5;">
                        <div class="ranking d-flex m-t-20 flex-middle">
                            <h3>Hello!</h3>
                        </div>
                        <!--top 10 ranking badge svg-->
                        <div class="ranking d-flex m-t-20 flex-middle">
            </div>

            <div class="synopsis m-t-20" style="max-width: 500px;">
                <p>
                    Getting the grades? Too easy. Getting through grief? Too hard. This year, there’s just
                    one goal
                    on her mind: getting the guy.
                </p>
            </div>
            <div class="buttons-container m-t-20">

                <!--<button class="more-info-button m-t-20"><span>
                    <svg viewBox="0 0 24 24">
                        <path
                        d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10zm-2 0a8 8 0 0 0-8-8 8 8 0 0 0-8 8 8 8 0 0 0 8 8 8 8 0 0 0 8-8zm-9 6v-7h2v7h-2zm1-8.75a1.21 1.21 0 0 1-.877-.364A1.188 1.188 0 0 1 10.75 8c0-.348.123-.644.372-.886.247-.242.54-.364.878-.364.337 0 .63.122.877.364.248.242.373.538.373.886s-.124.644-.373.886A1.21 1.21 0 0 1 12 9.25z"
                        fill="currentColor"></path>
                    </svg>
                </span> More Info</button>-->
            </div>
        </div>
    </section>
</div>

<!--paretn div with black bg after main hero section-->
<div class="black-background">
    <section id="mylist" class="container">
    <h4 class="mylist-heading">
        Movies
    </h4>
    <div class="mylist-container d-flex flex-start flex-middle flex-no-wrap owl-carousel">
        <div class="video">
            <video class="mylist-img p-r-10 p-t-10 video-item"
            poster="{{ asset('images/tv-show/poster/never-have-ever-short poster.jpg') }}">
                                <source
                                src="{{ asset('images/tv-show/videos/Never Have I Ever - Official Trailer - Netflix_2.mp4') }}"
                                type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                            <div class="video-description d-flex flex-end direction-column">
                                <div class="play-button">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M6 4l15 8-15 8z" fill="black"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="heading f-w-8 text-shadow">
                                        Never Have I Ever
                                    </h4>
                                </div>
                                <div class="info d-flex flex-middle flex-no-wrap">
                                    <p class="rated text-shadow"><strong>18+</strong></p>
                                    <p class="season-count text-shadow"> 1 Season</p>
                                </div>
                                <div class="genere d-flex flex-no-wrap text-shadow">
                                    <p>#Nudeity</p>
                                    <p>#Romance</p>
                                    <p>#Love</p>
                                </div>
                            </div>
                        </div>
                </section>

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
            Home
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
