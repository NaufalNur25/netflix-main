<header class="d-flex space-between flex-center flex-middle">
            <div class="nav-links d-flex flex-center flex-middle">
                <a href="/dashboard">
                    <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                    <h2 class="second-logo-text red-color f-s-28">N</h2>
                </a>
                <a href="/dashboard" class="nav-item home active">Home</a>
                {{-- <a href="/mylist" class="nav-item home active">My List</a> --}}
                <a href="/movie" class="nav-item">Movies</a>
            </div>
            <div class="righticons d-flex flex-end flex-middle">
                <div class="dropdown notification">
                    <div class="dropdown-content">
                    </div>
                </div>

                <div class="dropdown">
                    <span>{{ $username }}</span> <span class="profile-arrow"></span>

                    <div class="dropdown-content" style="border-radius: 12px">
                        <div class="profile-links">
                            <a href="/profile" class="profile-item last" >Manage Profiles</a>
                        </div>
                        <div class="line"></div>
                        <div class="links d-flex direction-column">
                            <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        </div>

                    </div>
                </div>

            </div>
</header>
