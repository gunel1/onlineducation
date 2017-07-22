@extends('layouts.master')

@section('title', "Ana Səhifə | MÜƏLLİM AXTARIŞI")

@section('content')

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="row">
                        <ul class="portfolio-filter text-center">
                            <li><a class="btn btn-default active" href="#" data-filter="*">Kateqoriya</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".branded">Kateqoriya</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".design">Kateqoriya</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".folio">Kateqoriya</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".logos">Kateqoriya</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mobile">Kateqoriya</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Kateqoriya</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".branded">Kateqoriya</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".design">Kateqoriya</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".folio">Kateqoriya</a></li>
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
                                                <li><a href="profile-details.html"><i class="fa fa-info"></i></a></li>
                                                <li><a href="{{URL::to('images/portfolio/1.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
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
                            <h3>Fənnlər və Kateqoriyalar</h3>
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

@endsection