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
    <link rel="icon" href={{asset("images/icon/home.png")}}>
</head>

<body>
<<<<<<< HEAD
=======
    <div style="height:text-align:right:">
<span style="position:absolute;right:15px;top:10px; ">
<a href="?lang=2"><img width="25px" src="{{URL::to('images/icon/ru.png')}}"/></a>
</span>
<span style="position:absolute;right:55px;top:10px; ">
<a href="?lang=1"><img width="25px" src="{{URL::to('images/icon/az.png')}}"/></a>
</span>
>>>>>>> ba5326d3102b0954f3654f355b3e6ee8ba5c1c0c




    <div style="height:text-align:right:"><span style="position:absolute;right:15px;top:10px; ">
      @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                    @php
                        switch($lang){
                            case  'en' :  echo ' <a href="'.route('lang.switch', $lang).'"><img width="25px" src="images/icon/en.png"/></a>';
                                          break;
                            case  'ru':    echo ' <a href="'.route('lang.switch', $lang).'"><img width="25px" src="images/icon/ru.png"/></a>';
                                          break;
                            case  'az':    echo ' <a href="'.route('lang.switch', $lang).'"><img width="25px" src="images/icon/az.png"/></a>';
                                          break;
                          }
                    @endphp

                @endif
            @endforeach
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
<<<<<<< HEAD
                    <li class="active"><a href={{URL::to('/')}}>@lang('words.home')</a></li>
                    <li><a href={{URL::to('/service')}}>@lang('words.service')</a></li>
                    <li><a href={{URL::to('/aboutus')}}>@lang('words.about')</a></li>
                    <li><a href={{URL('/ourteam')}}>@lang('words.team')</a></li>
                    <li><a href={{URL::to('/contact')}}>@lang('words.contact')</a></li>
=======
                    <li class="active"><a href={{URL::to('/')}}><img width="60px" src="{{URL::to('images/nav-bar/home.png')}}"/></a></li>
                    <li><a href={{URL::to('/service')}}><img width="60px" src="{{URL::to('images/nav-bar/services.png')}}"/></a></li>
                    <li><a href={{URL::to('/aboutus')}}><img width="60px" src="{{URL::to('images/nav-bar/aboutus.png')}}"/></a></li>
                    <li><a href={{URL('/ourteam')}}><img width="60px" src="{{URL::to('images/nav-bar/ourteam.png')}}"/></a></li>
                    <li><a href={{URL::to('/contact')}}><img width="60px" src="{{URL::to('images/nav-bar/contact.png')}}"/></a></li>
>>>>>>> ba5326d3102b0954f3654f355b3e6ee8ba5c1c0c
                </ul>
            </div>
        </div>
    </div>
</header>
<!--/#header-->


@yield('content')





 <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src={{asset("js/jquery.js")}}></script>
<script type="text/javascript" src={{asset("js/bootstrap.min.js")}}></script>
<script type="text/javascript" src={{asset("js/lightbox.min.js")}}></script>
<script type="text/javascript" src={{asset("js/wow.min.js")}}></script>
<script type="text/javascript" src={{asset("js/main.js")}}></script>
</body>
</html>