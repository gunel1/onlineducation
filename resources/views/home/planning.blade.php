@extends('layouts.master')
@section('title','Planlaşdırma | Onlayn Təhsil')
@section('content')
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/services/more.png" alt="">
                    </div>
                    <h2>Tədris Planının Düzgün Bölüşdürülməsi</h2>
                    <p>Məlumat - Məlumat - Məlumat</p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                        <img src="images/services/quiz.png" alt="">
                    </div>
                    <h2>Tədris Planına Uyğun Test Tapşırıqları</h2>
                    <p>Məlumat - Məlumat - Məlumat</p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                        <img src="images/services/first.png" alt="">
                    </div>
                    <h2>Tədris Planına Uyğun Əlavə Məntiqi Tapşırıqlar</h2>
                    <p>Məlumat - Məlumat - Məlumat</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/services/meet.png" alt="">
                    </div>
                    <h2>Həftəlik Ümumi Görüş və Məsləhətlər</h2>
                    <p>Məlumat - Məlumat - Məlumat</p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                        <img src="images/services/parents.png" alt="">
                    </div>
                    <h2>Valideynlərlə Həftəlik<br>Görüşlər</h2>
                    <p>Məlumat - Məlumat - Məlumat</p>
                </div>
            </div>
            <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="single-service">
                    <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                        <img src="images/services/psy.png" alt="">
                    </div>
                    <h2>Həftəlik Psixoloji<br>Təlimlər</h2>
                    <p>Məlumat - Məlumat - Məlumat</p>
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
                        <h2><i class="fa fa-user-plus"></i> Qeydiyyat Üçün</h2>
                        <p>müvafiq xanaya tələb olunan məlumatları<br/> əlavə edin.</p>
                    </div>
                    <div class="col-sm-6 newsletter">
                        <form id="newsletter">
                            <input class="form-control" type="number" name="phone_number"  value="" placeholder="Telefon nömrənizi daxil edin">
                            <i class="fa fa-check"></i>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br/>
@endsection