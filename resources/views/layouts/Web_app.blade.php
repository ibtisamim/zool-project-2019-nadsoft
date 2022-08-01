<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->

    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    {!! Html::style('web/style.css') !!}

            <!-- fancy box -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    {!! Html::style('web/fancybox-master/dist/jquery.fancybox.min.css') !!}
    {!! Html::script('web/fancybox-master/dist/jquery.fancybox.min.js') !!}


</head>

<body>
<div class="container">
    <div class="row">
<div id="top">
    <div class="col-md-3" ><!-- id="search" -->
        <a type="button" class="loginbtn" id="login_btn" href="/login" >
        تسجيل الدخول
        </a>
        <a href="/register" type="button" class="loginbtn"  id="register_btn"  >
            ريجيستر
        </a>
        <!--
        <div class="form-group">
            <form action="" method="post">
            <input class="form-control" name="search" placeholder="أدخل كلمة البحث...">
            </form>
        </div> -->

    </div>
    <div class="col-md-6" id="logo">
      <a href="/" title='بستان المرج' >  <img src="img/logo.png"/></a>
    </div>

    <div class="col-md-3" id="lang">
        <a href="#">@lang('home.goto_ebri')<img src="img/arrow.png"/></a>

        <a href="#" id="search2"><img src="img\search.png" class="mCS_img_loaded" /></a>
        <div class="search_box_cover full-width">
            <input type="text" placeholder="بحث" />
            <button type="button" id="closeButton"><img src="img\close_button.png" alt="close" /></button>
        </div><!-- /.search_box_cover -->
    </div>


    <script>
        $('#search2').on('click', function(fn){
            fn.preventDefault();
            $('.search_box_cover').addClass('active');
        });
        $('#closeButton').on('click', function(fn){
            fn.preventDefault();
            $('.search_box_cover').removeClass('active');
        });
    </script>
</div>
</div>
</div>
<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <div class="row">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                    <a href="/Home">@lang('home.home')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('home.majles')
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="">@lang('home.about_majles')</a>
                        <a href="">@lang('home.words_majles')</a>
                    </div>



                </li>
                <li class="nav-item">
                    <a href="/news-list">@lang('home.news')</a>
                </li>
                <li class="nav-item">
                    <a href="/about">@lang('home.aboutcountries')</a>
                </li>

                <li class="nav-item">
                    <a href="#section2">@lang('home.parts')</a>
                </li>

                <li class="nav-item">
                    <a href="#section2">@lang('home.information')</a>
                </li>

                <li class="nav-item">
                    <a href="/contact-us">@lang('home.contact')</a>
                </li>

            </ul>
        </div>
        </div>
    </div>
</nav>

<!-- Page Header -->
<!--
<header class="masthead" style="background-image: url(@yield('headImage'))">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>@yield('title')</h1>
                    <span class="subheading">@yield('subTitle')</span>
                </div>
            </div>
        </div>
    </div>
</header> -->

<!-- Main Content -->
@yield('InnerHeder')
@yield('content')



<!-- Footer -->
<footer id="contacsec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('footertitle')

            </div>
            </div>
        <div class="row" id="contactinfo">
            <div class="col-md-12">
            <ul>

                <li>
                    <span id="subtitle">@lang('Home.address')</span>
                    <br/>
                    قرية داحي - مدخل القرية
                </li>


                <li>
                    <span id="subtitle">@lang('Home.phone')</span>
                    <br/>
                    046294811<br/>
                    04-6295829</li>



                <li>
                    <span id="subtitle">@lang('Home.fax')</span>
                    <br/>
                    04-6421556
                </li>
                <li>
                    <span id="subtitle">@lang('Home.email')</span>

                    <br/>
                    <span id="email">
                        bostanmarj@gmail.com
                    </span>

                </li>
            </ul>




        </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <div  id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13535.491066797138!2d35.887964!3d31.991464399999998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sjo!4v1551699039481" width="100%" height="388" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div  id="contactform">
                <form action="" method="post">
                    <input class="form-control" name="fullname" placeholder="الإسم الكامل">
                    <input class="form-control" name="email" placeholder="البريد الإلكتروني">
                    <input class="form-control" name="phone" placeholder="الهاتف">
                    <input type="submit" class="submit form-control" value="أرسل" placeholder="الهاتف">
                </form>
            </div>



        </div>
        </div>
    </div>
</footer>


</body>

</html>
