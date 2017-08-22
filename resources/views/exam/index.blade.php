<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Onlayn İmtahan | Onlayn Təhsil Mərkəzi</title>
    <link  rel="stylesheet" href="{{asset('exam/css/bootstrap.min.css')}}"/>
    <link  rel="stylesheet" href="{{asset('exam/css/bootstrap-theme.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('exam/css/main.css')}}">
    <link  rel="stylesheet" href="{{asset('exam/css/font.css')}}">
    <script src="{{asset('exam/js/jquery.js')}}" type="text/javascript"></script>

    <script src="{{asset('exam/js/bootstrap.min.js')}}"  type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <?php if(@$_GET['w'])
    {echo'<script>alert("'.@$_GET['w'].'");</script>';}
    ?>
    <script>
        function validateForm()
        {var y = document.forms["form"]["name"].value;
        var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Zəhmıt Olmasa Xananı Doldurun.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("Zəhmıt Olmasa Xananı Doldurun.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Poçt Adresi Düzgün Deyil.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Zəhmıt Olmasa Xananı Doldurun.");return false;}if(a.length<5 || a.length>25){alert("Şifrəniz 5-25 Simvol Arasında Olmalıdır.");return false;}
            var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Şifrəniz Uyğunlaşmır.");return false;}}
    </script>


</head>

<body>
<div class="header">
    <div class="row">
        <div class="col-lg-6">
            <span class="logo">Onlayn İmtahan Bölməsi</span></div>
        <div class="col-md-2 col-md-offset-4">
            <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Daxil Ol</b></span></a></div>
        <!--sign in modal start-->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content title1">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title title1"><span style="color:orange">Şəxsi Kabinet</span></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                            <fieldset>


                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email"></label>
                                    <div class="col-md-6">
                                        <input id="email" name="email" placeholder="Poçt Adresinizi Daxil Edin" class="form-control input-md" type="email">

                                    </div>
                                </div>


                                <!-- Password input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="password"></label>
                                    <div class="col-md-6">
                                        <input id="password" name="password" placeholder="Şifrənizi Daxil Edin" class="form-control input-md" type="password">

                                    </div>
                                </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Bağla</button>
                        <button type="submit" class="btn btn-primary">Daxil Ol</button>
                        </fieldset>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--sign in modal closed-->

    </div><!--header row closed-->
</div>

<div class="bg1">
    <div class="row">

        <div class="col-md-7"></div>
        <div class="col-md-4 panel">
            <!-- sign in form begins -->
            <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
                <fieldset>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="name"></label>
                        <div class="col-md-12">
                            <input id="name" name="name" placeholder="Adınız və Soyadınız" class="form-control input-md" type="text">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="gender"></label>
                        <div class="col-md-12">
                            <select id="gender" name="gender" placeholder="Cinsiniz" class="form-control input-md" >
                                <option value="sex">Cinsiniz</option>
                                <option value="M">Kişi</option>
                                <option value="F">Qadın</option> </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="name"></label>
                        <div class="col-md-12">
                            <input id="college" name="college" placeholder="Məktəbiniz" class="form-control input-md" type="text">

                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label title1" for="email"></label>
                        <div class="col-md-12">
                            <input id="email" name="email" placeholder="Poçt Adresiniz" class="form-control input-md" type="email">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="mob"></label>
                        <div class="col-md-12">
                            <input id="mob" name="mob" placeholder="Telefon Nömrəniz" class="form-control input-md" type="number">

                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="password"></label>
                        <div class="col-md-12">
                            <input id="password" name="password" placeholder="Şifrəniz" class="form-control input-md" type="password">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12control-label" for="cpassword"></label>
                        <div class="col-md-12">
                            <input id="cpassword" name="cpassword" placeholder="Şifrənizin Təkrarı" class="form-control input-md" type="password">

                        </div>
                    </div>
                <?php if(@$_GET['q7'])
                { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
                <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for=""></label>
                        <div class="col-md-12">
                            <input  type="submit" class="sub" value="Qeydiyyat" class="btn btn-primary"/>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div><!--col-md-6 end-->
    </div></div>
</div><!--container end-->

<!--Footer start-->
<div class="row footer">
    <div class="col-md-3 box">
        <a href="http://www.onlayn-tehsil.com" target="_blank">Sayta Keçid</a>
    </div>
    <div class="col-md-3 box">
        <a href="#" data-toggle="modal" data-target="#login">İmtahan Nəzarətçisi</a></div>
    <div class="col-md-3 box">
        <a href="{{URL::to('/service/exam/feedback')}}" target="_blank">Şikayət və Təkliflər</a></div></div>
<!--Modal for admin login-->
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Bağla</span></button>
                <h4 class="modal-title"><span style="color:orange;font-family:'Tahoma' ">Şəxsi Kabinet</span></h4>
            </div>
            <div class="modal-body title1">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form role="form" method="post" action="admin.php?q=index.php">
                            <div class="form-group">
                                <input type="text" name="uname" maxlength="20"  placeholder="Nəzarətçinin Poçt Adresi" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" maxlength="15" placeholder="Nəzarətçin Şifrəsi" class="form-control"/>
                            </div>
                            <div class="form-group" align="center">
                                <input type="submit" name="login" value="Daxil Ol" class="btn btn-primary" />
                            </div>
                        </form>
                    </div><div class="col-md-3"></div></div>
            </div>
            <!--<div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>-->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>