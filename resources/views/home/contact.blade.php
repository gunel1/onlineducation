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
                        <div class="media">
                            <div class="pull-left">
                            </div>
                            <div class="social-icons pull-center">
                        <ul class="nav nav-pills">
                            <li><a href=""><img width="120px" src="images/social/facebook.png"/></a></li>
                            <li><a href=""><img width="120px" src="images/social/twitter.png"/></a></li>
                            <li><a href=""><img width="120px" src="images/social/google-plus.png"/></a></li>
                            <li><a href=""><img width="120px" src="images/social/instagram.png"/></a></li>
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
                        <img width="250px" src="images/social/cu.png"/>
                        <address>
                        <b> E-Mail: </b><a href="mailto:info@onlayn-tehsil.com">&nbsp;info@onlayn-tehsil.com</a> <br> 
                        <b> Telefon *1: </b> (55) 538 7503 <br> 
                        <b> Telefon *2: </b> (70) 538 7503 <br>
                            <br>
                        Nəsimi rayonu, 28 May metrosu <br> 
                        Nizami küç., 203B <br> 
                        Bakı, AZ1010 <br> 
                        Azərbaycan Respublikası <br>
                        </address>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Adınız">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Poçt adresiniz">
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
