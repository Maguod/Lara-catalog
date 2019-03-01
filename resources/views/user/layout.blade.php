<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laravel & Material Design </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="/user/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/user/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/user/css/style.css" rel="stylesheet">
    <style>

        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>
</head>

<body class="grey lighten-3">

<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark btn-mdb-color scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link waves-effect" href="/">Home</a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="/user/logout" class="nav-link border border-light rounded waves-effect"
                           >
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

        <a class="logo-wrapper waves-effect">
            @if($user->avatar !== null)
                <img src="{{$user->getAvatar()}}" class="z-depth-1 img-fluid" alt="">
            @else
                <img src="/image/default.png" class="rounded-circle z-depth-1 img-fluid" alt="">
            @endif
        </a>

        <div class="list-group list-group-flush">

            <a href="/user/profile" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-user mr-3"></i>Profile</a>
            <a href="/user/dashboard" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-table mr-3"></i>My Cards</a>
            <a href="/user/createForm" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-map mr-3"></i>Add new card</a>
            <a href="/user/categories/create" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-cat mr-3"></i>Add new cartegory</a>
        </div>

    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->
 @yield('content')


<!--Footer-->
<footer class="page-footer text-center font-small  btn-mdb-color darken-2 mt-4 wow fadeIn">

    <!--Call to action-->
   <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">

        <a href="https://github.com" target="_blank">
            <i class="fab fa-github mr-3"></i>
        </a>

        <a href="http://codepen.io/mdbootstrap/" target="_blank">
            <i class="fab fa-codepen mr-3"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © 2018 Copyright:
        <a href="#" target="_blank"> Laravel.com </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="/user/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/user/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/user/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/user/js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

</script>

<!-- Charts -->


<!--Google Maps-->

</body>

</html>


