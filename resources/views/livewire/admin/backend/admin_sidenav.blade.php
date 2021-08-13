<style>
    .sidebar-nav>ul>li>a.active {
        background: #ffffff;
    }

</style>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img">
                <img src="{{ asset('assets/backend/assets/images/users/1.jpg') }}" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"><span class="heartbit"></span> <span class="point"></span></div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">

                <h5>{{ Auth::user()->name }}</h5>

                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                <a href="{{ Auth::user()->email }}" class="" data-toggle="tooltip" title="Email"><i
                        class="mdi mdi-gmail"></i></a>
                <a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class=""
                    data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                <form id="logout-form" action="#" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

                <div class="dropdown-menu animated flipInY">
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <!-- text-->

                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                            class="fa fa-power-off"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="#" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>

            </div>
        </div>
        <!-- End User profile text-->

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="nav-devider"></li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="mdi mdi-tooltip-edit"></i>
                        <span class="hide-menu">Manage Category </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.category') }}">All Category </a></li>
                    </ul>
                </li>

            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
