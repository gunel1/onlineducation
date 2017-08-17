@extends('layouts.master')

@section('title', "Müəllim Axtarışı | Onlayn Təhsil")

@section('content')

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="row">
                        <ul class="portfolio-filter text-left">
                            <li><a class="btn btn-default active" href="#" data-filter="*">Bütün Müəllimlər</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".branded">Məktəbəqədər Hazırlıq</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".design">İbtidai Sinif Hazırlığı</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".folio">Orta Sinif Hazırlığı</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".logos">Orta İxtisas Hazırlığı</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mobile">Abituriyent Hazırlığı</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Magistratura Hazırlığı</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".branded">Xarici Dil Kursları</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".design">Kompüter Kursları</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".folio">Tibb Kursları</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".logos">İdman Növləri</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mobile">Sürücülük Kursları</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Əl İşləri Hazırlığı</a></li>
                        </ul><!--/#portfolio-filter-->
                        
                        
                        <div class="portfolio-items">
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{URL::to('images/portfolio/1.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="{{URL::to('/profile-details')}}"><i class="fa fa-link"></i></a></li>
                                                <li><a href="{{URL::to('images/portfolio/1.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <h2>Müəllimin Adı, Soyadı</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item mockup folio">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{URL::to('images/portfolio/2.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="{{URL::to('/profile-details')}}"><i class="fa fa-link"></i></a></li>
                                                <li><a href="{{URL::to('images/portfolio/2.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <h2>Müəllimin Adı, Soyadı</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item design logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{URL::to('images/portfolio/3.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="{{URL::to('/profile-details')}}"><i class="fa fa-link"></i></a></li>
                                                <li><a href="{{URL::to('images/portfolio/3.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <h2>Müəllimin Adı, Soyadı</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item design logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{URL::to('images/portfolio/4.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="{{URL::to('/profile-details')}}"><i class="fa fa-link"></i></a></li>
                                                <li><a href="{{URL::to('images/portfolio/4.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <h2>Müəllimin Adı, Soyadı</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded mobile">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{URL::to('images/portfolio/5.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="{{URL::to('/profile-details')}}"><i class="fa fa-link"></i></a></li>
                                                <li><a href="{{URL::to('images/portfolio/5.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <h2>Müəllimin Adı, Soyadı</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded mockup">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{URL::to('images/portfolio/6.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="{{URL::to('/profile-details')}}"><i class="fa fa-link"></i></a></li>
                                                <li><a href="{{URL::to('images/portfolio/6.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <h2>Müəllimin Adı, Soyadı</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{URL::to('images/portfolio/7.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="{{URL::to('/profile-details')}}"><i class="fa fa-link"></i></a></li>
                                                <li><a href="{{URL::to('images/portfolio/7.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <h2>Müəllimin Adı, Soyadı</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item design logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{URL::to('images/portfolio/8.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="{{URL::to('/profile-details')}}"><i class="fa fa-link"></i></a></li>
                                                <li><a href="{{URL::to('images/portfolio/8.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <h2>Müəllimin Adı, Soyadı</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item mobile logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{URL::to('images/portfolio/9.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="{{URL::to('/profile-details')}}"><i class="fa fa-link"></i></a></li>
                                                <li><a href="{{URL::to('images/portfolio/9.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <h2>Müəllimin Adı, Soyadı</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-pagination">
                            <ul class="pagination">
                              <li><a href="#">left</a></li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li class="active"><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#">6</a></li>
                              <li><a href="#">7</a></li>
                              <li><a href="#">8</a></li>
                              <li><a href="#">9</a></li>
                              <li><a href="#">right</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 padding-top">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3>Tədris Kateqoriyaları</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="#">Fənnin Adı<span class="pull-right">(1)</span></a></li>
                                <li class="active"><a href="#">Fənnin Adı<span class="pull-right">(8)</span></a></li>
                                <li><a href="#">Fənnin Adı<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Fənnin Adı<span class="pull-right">(9)</span></a></li>
                                <li><a href="#">Fənnin Adı<span class="pull-right">(3)</span></a></li>
                                <li><a href="#">Fənnin Adı<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Fənnin Adı<span class="pull-right">(2)</span></a></li>
                                <li><a href="#">Fənnin Adı<span class="pull-right">(8)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#projects-->

@endsection