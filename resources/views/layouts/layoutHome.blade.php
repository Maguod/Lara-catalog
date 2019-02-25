<!DOCTYPE html>
<html>
<head>
    <title>Laravel & Catalog project</title>
    <link href="/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="/home/js/jquery-1.11.0.min.js"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--start-menu-->
    <script src="/home/js/simpleCart.min.js"> </script>
    <link href="/home/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/home/js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!--dropdown-->
    <script src="/home/js/jquery.easydropdown.js"></script>
</head>
<body>
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select tabindex="4" class="dropdown drop">
                            <option value="" class="label">Dollar :</option>
                            <option value="1">Dollar</option>
                            <option value="2">Euro</option>
                        </select>
                    </div>
                    <div class="box1">
                        <select tabindex="4" class="dropdown">
                            <option value="" class="label">English :</option>
                            <option value="1">English</option>
                            <option value="2">French</option>
                            <option value="3">German</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">
                    <a href="/login">
                        Login
                    </a>
                    <div class="clearfix"> </div>
                </div>
                <div class="cart box_1">
                    <a href="/register">
                        Register
                    </a>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="/"><img src="/home/images/star.png" alt=""></a>
</div>
<!--start-logo-->
@if(\Illuminate\Support\Facades\Auth::check() === true)
    <div class="container">
        <div class="roe">
            <div class="col-xs-12 text-right text-info">
                <a href="/user/dashboard/{{\Illuminate\Support\Facades\Auth::id()}}" class="btn btn-outline-primary mr-3">Админка</a>
                <a href="/user/logout" class="btn btn-outline-danger">Выйти</a>
                <a href="/user/deleteUser/{{\Illuminate\Support\Facades\Auth::id()}}" class="btn btn-outline-danger">Удалить пользователя</a>
            </div>
        </div>
    </div>

@endif
<!--bottom-header-->
@yield('header-bottom')

@yield('content')


<!--information-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->
</body>
</html>
