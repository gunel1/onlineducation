<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href={{asset("css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("css/font-awesome.min.css")}} rel="stylesheet">
    <link href={{asset("css/animate.min.css")}} rel="stylesheet">
    <link href={{asset("css/lightbox.css" )}}rel="stylesheet">
    <link href={{asset("css/main.css")}} rel="stylesheet">
    <link href={{asset("css/responsive.css")}} rel="stylesheet">
    <link href={{asset("css/style2.css")}} rel="stylesheet">
    <link rel="icon" href={{asset("images/icon/home.png")}}>
</head>

<body>
    <div style="height:text-align:right:">
<span style="position:absolute;right:15px;top:10px; ">
<a href="?lang=2"><img width="25px" src="images/icon/ru.png"/></a>
</span>
<span style="position:absolute;right:55px;top:10px; ">
<a href="?lang=1"><img width="25px" src="images/icon/az.png"/></a>
</span>

    </div>
<header id="header">
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href={{URL::to('/')}}>
                    <h1><img src="{{asset('/images/logo.png')}}" alt="logo"></h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <div class="login">
                        <li><a href="{{ route('login') }}"><i class="fa fa-sign-in fa-3x" aria-hidden="true"></i> </a></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-user-plus fa-3x" aria-hidden="true"></i></a></li>
                        </div>
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
                                        Çıxış
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href={{URL::to('/')}}>Ana Səhifə</a></li>
                    <li><a href={{URL::to('/service')}}>Xidmətlərimiz</a></li>
                    <li><a href={{URL::to('/aboutus')}}>Haqqımızda</a></li>
                    <li><a href={{URL('/ourteam')}}>Komandamız</a></li>
                    <li><a href={{URL::to('/contact')}}>Bizimlə Əlaqə</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--/#header-->


@yield('content')






<script type="text/javascript" src={{asset("js/jquery.js")}}></script>
<script type="text/javascript" src={{asset("js/bootstrap.min.js")}}></script>
<script type="text/javascript" src={{asset("js/lightbox.min.js")}}></script>
<script type="text/javascript" src={{asset("js/wow.min.js")}}></script>
<script type="text/javascript" src={{asset("js/main.js")}}></script>
</body>
</html>