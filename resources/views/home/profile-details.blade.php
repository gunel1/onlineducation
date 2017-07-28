@extends('layouts.master')

@section('title', "Bizimlə Əlaqə | Onlayn Təhsil")

@section('content')

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Müəllimin Şəxsi Məlumatları</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/portfolio-details/1.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="project-name overflow">
                        <h2 class="bold">İsaak Nyuton </h2>
                    </div> 
                        <p>06 Mart 1882-ci ildə Ağstafa şəhərində anadan olmuşam. Orta təhsilimə Ağstafa şəhər 2 saylı tam orta məktəbdə başlamış, Bakı şəhəri, kimya-biologiya təmayüllü liseydə bitirmişəm. Azərbaycan Dövlət Pedoqoji Universitetinin "Riyaziyyat Müəllimliyi" fakültəsini bitirmişəm. 2014-cü ildən şagird və abituriyent hazırlıqları ilə məşğulam. Nəticələrimlə aşağıdakı bölmədə tanış ola bilərsiniz.
                    <p><b>Üstünlüklərim</b></p>
                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i>Məlumat - Məlumat -Məlumat</li>
                            <li><i class="fa fa-angle-right"></i>Məlumat - Məlumat -Məlumat</li>
                            <li><i class="fa fa-angle-right"></i>Məlumat - Məlumat -Məlumat</li>
                        </ul>
                    </div>
                    <div class="skills overflow">
                        <h3>Tədris Fənnləri:</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-check-square"></i>Design</a></li>
                            <li><a href="#"><i class="fa fa-check-square"></i>HTML/CSS</a></li>
                            <li><a href="#"><i class="fa fa-check-square"></i>Javascript</a></li>
                            <li><a href="#"><i class="fa fa-check-square"></i>Backend</a></li>
                        </ul>
                    </div>
                <div class="live-preview">
                        <a href="#" class="btn btn-common uppercase">Qeydiyyat</a>
                    </div>
                </div>
        </div>
    </section>
     <!--/#portfolio-information-->

    <section id="related-work" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <h1 class="title text-center">Şagirdlərinin Son Nəticələri</h1>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Adı, Soyadı</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/2.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/2.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Adı, Soyadı</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/3.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/3.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Adı, Soyadı</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="images/portfolio/4.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="images/portfolio/4.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Adı, Soyadı</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!--/#related-work-->

@endsection