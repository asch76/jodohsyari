<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/all.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        JODOHSYARI.COM
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        @foreach(\App\Post::page()->published()->get() as $page)
                        <li class="@if (url()->current() == url('/post/'.$page->id.'-'.str_slug($page->title))) active @endif">
                            <a href="{{ url('/post/'.$page->id.'-'.str_slug($page->title)) }}">
                                {{ $page->title }}
                            </a>
                        </li>
                        @endforeach

                        <li class="@if (url()->current() == url('/post')) active @endif">
                            <a href="{{ url('/post') }}">Artikel & Video</a>
                        </li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">
                                <i class="fa fa-sign-in"></i> Login
                            </a></li>
                            <li><a href="{{ url('/register') }}">
                                <i class="fa fa-edit"></i> Register
                            </a></li>
                        @else
                            <li class="@if (url()->current() == url('/me')) active @endif">
                                <a href="/me">
                                    <i class="fa fa-user"></i>
                                    <!-- {{ Auth::user()->name }} -->
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <sup><span class="badge" style="font-size:8px;">2</span></sup>

                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}">
                                            Ini nitifikasi kok bro. Ini nitifikasi kok bro...<br>
                                            <span class="text-muted">2 mins ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}">
                                            Ini nitifikasi kok bro...<br>
                                            <span class="text-muted">2 mins ago</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @if (isset($breadcrumb))
                @include('layouts._breadcrumb')
            @endif

            @yield('content')
        </div>

        <div class="footer" style="background:#FFF;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h6>NAVIGASI</h6>
                        <ul class="list-unstyled">
                            @foreach(\App\Post::page()->published()->get() as $page)
                            <li>
                                <a href="{{ url('/post/'.$page->id.'-'.str_slug($page->title)) }}">
                                    {{ $page->title }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6>TEMUKAN KAMI</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>HUBUNGI KAMI</h6>
                    </div>
                </div>

                <hr>

                <div class="text-center">
                    &copy; {{ date('Y') }} - JodohSyari.Com
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/all.js"></script>
</body>
</html>
