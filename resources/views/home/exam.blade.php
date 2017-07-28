@extends('layouts.master')
@section('title','Növbəti İmtahan | Onlayn Təhsil')
    @section('content')
    <link rel="icon" href="{{URL::to('images/icon/next.png')}}">
<section id="coming-soon">
    <div class="container">
        <div class="row">
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
            date: "01 august 2017 13:00:00",
            format: "on"
        },
        function() {

        });
    </script>
@endsection