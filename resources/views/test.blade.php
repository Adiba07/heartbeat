<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<!DOCTYPE HTML>
<html>
<head>
    <title>Service hospitalier</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('assets/css/responsiveslides.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script>
        // You can also use "$(window).load(function() {"
        $(function () {

            // Slideshow 1
            $("#slider1").responsiveSlides({
                maxwidth: 1600,
                speed: 600
            });
        });
    </script>
</head>
<body>
<!--start-wrap-->

<!--start-header-->
<div class="header">
    <div class="wrap">
        <!--start-logo-->
        <div class="logo">
            <img src="{{asset('assets/images/slider/logo.png')}}"/>
        </div>


            <nav class="navbar">
                <div class="container-fluid">

                    <div class="navbar-header">

                        <img src="{{asset('assets/images/slider/logo.png')}}">
                    </div>

                    <div class="navbar-collapse collapse" id="ftheme">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">home</a></li>
                            <li><a href="#contact">contact</a></li>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>

        <!--end-top-nav-->
    </div>
    <!--end-header-->
</div>
<div class="clear"> </div>
<!--start-image-slider---->
<div class="image-slider">
    <!-- Slideshow 1 -->
    <ul class="rslides" id="slider1">
        <li><img src="{{asset('assets/images/slider/slider1.jpg')}}" alt=""></li>
        <li><img src="{{asset('assets/images/slider/image1_slide.jpg')}}" alt=""></li>

    </ul>
    <!-- Slideshow 2 -->
</div>
<!--End-image-slider---->
<div class="clear"> </div>
<div class="content-grids">
    <div class="wrap">
        <div class="section group">


            <div class="listview_1_of_3 images_1_of_3">
                <div class="listimg listimg_1_of_2">
                    <img src="{{asset('assets/images/slider/infirmier.png')}}">
                </div>
                <div class="text list_1_of_2">
                    <h3>Patients</h3>

                </div>
            </div>

            <div class="listview_1_of_3 images_1_of_3">
                <div class="listimg listimg_1_of_2">
                    <img src="{{asset('assets/images/slider/infirmier.png')}}">
                </div>
                <div class="text list_1_of_2">
                    <h3>Doctors Login</h3>
                </div>
            </div>


            <div class="listview_1_of_3 images_1_of_3">
                <div class="listimg listimg_1_of_2">
                    <img src="{{asset('assets/images/slider/infirmier.png')}}">
                </div>
                <div class="text list_1_of_2">
                    <h3>Admin Login</h3>

                    <div class="button"><span><a href="hms/admin">Click Here</a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="content-box">
        <div class="section group">
            <div class="col_1_of_3 span_1_of_3 frist">

            </div>
            <div class="col_1_of_3 span_1_of_3 second">

            </div>
            <div class="col_1_of_3 span_1_of_3 frist">


            </div>
        </div>
    </div>
</div>
<div class="clear"> </div>
<div class="footer">
    <div class="wrap">
        <div class="footer-left">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </div>

        <div class="clear"> </div>
    </div>
</div>
<!--end-wrap-->
</body>
</html>



<script src="{{asset('assets/js/test.min.js')}}">


</script>
</body>
</html>
