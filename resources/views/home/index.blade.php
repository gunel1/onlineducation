@extends('layouts.master')

    @section('title', "Ana Səhifə | Onlayn Təhsil")

@section('content')
<section id="home-slider">
    <div class="container">
        <div class="row">
            <div class="main-slider">
                <div class="slide-text">
                    <h1>@lang('words.oec')</h1>
                    <p>&nbsp;&nbsp;Qəbul və digər imtahanlara hazırlaşmaq üçün xidmətinizdəyik. <br/>&nbsp;&nbsp;Keyfiyyətli təhsili, savadlı müəllim axtarışını və sizə bu yolda <br/>kömək olacaq digər vasitələri sadəcə <a href="#">www.onlayn-tehsil.com</a> saytına baş çəkərək əldə edə bilərsiniz.</p>
                </div>
                <img src="images/slider/general.png" class="slider-hill" alt="slider image">
                <img src="images/slider/programming.png" class="slider-sun" alt="slider image">
                <img src="images/slider/art.png" class="slider-birds1" alt="slider image">
                <img src="images/slider/driving.png" class="slider-birds2" alt="slider image">
            </div>
        </div>
    </div>
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
</section>
<!--/#home-slider-->
@endsection