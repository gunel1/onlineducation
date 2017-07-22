@extends('layouts.master')
@section('title','Növbəti İmtahan | Onlayn Təhsil')
    @section('content')
    <link rel="icon" href="{{URL::to('images/icon/next.png')}}">


<span style="position:absolute;right:15px;top:10px; ">
<a href="?lang=1"><img width="25px" src="{{URL::to('images/icon/az.png')}}"/></a>
</span>
    <span style="position:absolute;right:55px;top:10px; ">
<a href="?lang=2"><img width="25px" src="{{URL::to('images/icon/ru.png')}}"/></a>
</span>
    <span style="position:absolute;right:95px;top:10px; ">
<a href="?lang=3"><img width="26px" src="{{URL::to('images/icon/en.png')}}"/></a>
        </span>
</div>
<div class="logo-image">
    <a href="index.html"><img class="img-responsive" src="{{URL::to('images/logo.png')}}" alt=""> </a>
</div>
<section id="coming-soon">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="text-center coming-content">
                    <h1>Növbəti İmtahana Qalan Vaxt</h1>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="time-count">
                    <ul id="countdown">
                        <li class="angle-one">
                            <span class="days time-font">00</span>
                            <p>Gün</p>
                        </li>
                        <li class="angle-two">
                            <span class="hours time-font">00</span>
                            <p>Saat</p>
                        </li>
                        <li class="angle-three">
                            <span class="minutes time-font">00</span>
                            <p class="minute">Dəqiqə</p>
                        </li>
                        <li class="angle-four">
                            <span class="seconds time-font">00</span>
                            <p>Saniyə</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><i class="fa fa-user-plus"></i> Abunə olun ki,</h2>
                        <p>Bütün imtahan tarixlərindən anında xəbəriniz olsun.<br/> Sadəcə poçt adresinizi yazmaq kifayətdir.</p>
                    </div>
                    <div class="col-sm-6 newsletter">
                        <form id="newsletter">
                            <input class="form-control" type="email" name="email"  value="" placeholder="Poçt adresinizi daxil edin">
                            <i class="fa fa-check"></i>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <script>
    $("#countdown").countdown({
            date: "15 july 2018 17:52:00",
            format: "on"
        },
        function() {

        });
    </script>
@endsection