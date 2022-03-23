<body>
    <main id="mainContainer" class="p-b-40">
        <!--profile section-->
        <section class="userprofile" id="userprofilecontainer">
            <div>
                <h2 class="heading f-s-40">
                    Account
                </h2>
            </div>
            <div class="line"></div>
            <div class="membership d-flex flex-no-wrap space-between">
                <div class="left">
                    <h4 class="headline">
                        MEMBERSHIP & BILLING
                    </h4>
                </div>
                <div class="right">
                    <div class="d-flex space-between">
                        <div class="email">
                            <strong>{{ $username }}</strong>
                        </div>
                        <div class="link">
                            <a href="#" class="link-item">
                                Change account username
                            </a>
                        </div>
                    </div>

                    <div class="d-flex space-between">
                        <div class="email">
                            <strong>{{ $email }}</strong>
                        </div>
                        <div class="link">
                            <a href="#" class="link-item">
                                Change account email
                            </a>
                        </div>
                    </div>

                    <div class="d-flex space-between">
                        <div class="password">
                            Password: *********
                        </div>
                        <div class="link">
                            <a href="#" class="link-item">
                                Change password
                            </a>
                        </div>
                    </div>
            <div class="line"></div>

            <!--plan details-->
            <div class=" plan-details d-flex flex-middle space-between">
                <div class="left">
                    <h4 class="headline">PLAN DETAILS</h4>
                </div>
                <div class="right d-flex space-between">
                    <p>Mobile || Television </p>
                    <a href="#" class="link-item">Change plan</a>
                </div>
            </div>
            <div class="line"></div>

            <!--settings-->
            <div class="settings d-flex ">
                <div class="left">
                    <h4 class="headline">SETTINGS</h4>
                </div>
                <div class="right d-flex direction-column">
                    <a href="#" class="link-item">Test participation</a>
                    <a href="#" class="link-item">Manage download devices</a>
                    <a href="#" class="link-item">Activate a device</a>
                    <a href="#" class="link-item">Recent device streaming activity</a>
                    <a href="#" class="link-item">Sign out of all devices</a>
                    <a href="#" class="link-item">Download your personal information</a>
                </div>
            </div>

        </section>

        <!--footer section and footer fixed menu mobile-->

        <footer class="mainfooter d-flex direction-column space-between" id="footer">
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
        <a href="" class="nav-item">
            <i class="fa fa-search" aria-hidden="true"></i></br>
            Search
        </a>
        <a href="" class="nav-item">
            <i class="fa fa-film" aria-hidden="true"></i></br>
            Latest
        </a>
        <a href="" class="nav-item">
            <i class="fa fa-user" aria-hidden="true"></i></br>
            Account
        </a>
    </div>
</body>
</html>
