<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed header-menu-button" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <!-- <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> -->
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="svg-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="100%" height="30px"><path d="M42 48H28V35h-8v13H6V27c0-0.6 0.4-1 1-1s1 0.4 1 1v19h10V33h12v13h10V28c0-0.6 0.4-1 1-1s1 0.4 1 1V48z"/><path d="M47 27c-0.2 0-0.5-0.1-0.7-0.3L24 5.4 1.7 26.7c-0.4 0.4-1 0.4-1.4 0 -0.4-0.4-0.4-1 0-1.4L24 2.6l23.7 22.7c0.4 0.4 0.4 1 0 1.4C47.5 26.9 47.3 27 47 27z"/><path d="M39 15c-0.6 0-1-0.4-1-1V8h-6c-0.6 0-1-0.4-1-1s0.4-1 1-1h8v8C40 14.6 39.6 15 39 15z"/></svg>
                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <!-- <ul class="nav navbar-nav">
                &nbsp;
            </ul> -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li><a href="{{ url('agents') }}">Agents</a></li>
                <li><a href="">Buy</a></li>
                <li><a href="{{ url('sell') }}">Sell</a></li>
                <li><a href="">Rent</a></li>
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        <!-- </ul> -->
                    <!-- </li> -->
                @endif
            </ul>
        </div>
    </div>
</nav>