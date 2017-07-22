@extends('layouts.master')

@section('title', "Bizimlə Əlaqə | Onlayn Təhsil")

@section('content')

    <section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">BİZİMLƏ ƏLAQƏ</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="testimonial bottom">
                        <h2>Sosial Şəbəkələrdə Biz</h2>
                        <div class="media">
                            <div class="pull-left">
                            </div>
                            <div class="social-icons pull-center">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> 
                         </div>
                        <div class="media">
                            <div class="pull-left">
                            </div>
                            
                        </div>   
                    </div> 
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="contact-info bottom">
                    <h2><i class="fa fa-phone" aria-hidden="true"></i> Əlaqə </h2>
                    <address>
                        E-mail: <a href="mailto:info@onlayn-tehsil.com">info@onlayn-tehsil.com</a> <br>
                        <b>Bakcell</b> : +994 (55) 538 7503 <br>
                        <b>Nar Mobile</b> : +994 (70) 538 7503 <br>
                        <b>Azercell</b> : +994 (51) 538 7503 <br>
                    </address>

                    <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Ünvan</h2>
                    <address>
                        Nəsimi rayonu, 28 May metrosu <br>
                        Nizami küç., 203B <br>
                        Bakı, AZ1010 <br>
                        Azərbaycan Respublikası <br>
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="contact-form bottom">
                    <h2><i class="fa fa-xing" aria-hidden="true"></i> Şikayət və ya Təklifiniz</h2>
                    <form id="main-contact-form" name="contact-form" method="post" action="{{URL::to('/sendemail')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="text" id="name" class="form-control" required="required" placeholder="Adınız">
                        </div>
                        <div class="form-group">
                            <input type="email"  id="email" class="form-control" required="required" placeholder="Poçt adresiniz">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Müraciətiniz"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Göndər">
                        </div>
                    </form>
                </div>
            </div>
            <br/>
            <br/>

        </div>
    </div>
</footer>
@endsection
