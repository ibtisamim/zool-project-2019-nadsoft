@extends('layouts.Web_app')

@section('InnerHeder')
    <div class="container-fluid projects" id="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="innerboxsection3">
                        <img src="img/project_innerpage_header_img.png" id="facebook_img"/>
                        <div id="innerbox">
                            <div id="box">
                                <p>
                                    المجلس الإقليمي بستان المرج
                                </p>
                                <p>
                                    المشاريع
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-3">
                <ul class="list_barts">
                    <li>
                        <a href="#">
                            <img src="img/index-slices-10.png"/><br/>
                            ملف المواطنين
                        </a>
                    </li>


                    <li>
                        <a href="#">
                            <img src="img/index-slices-11.png" /><br/>
                            دفع الأرنونا
                        </a>
                    </li>


                    <li>
                        <a href="/projects">
                            <img src="img/index-slices-12.png" /><br/>
                            مشاريع
                        </a>
                    </li>


                    <li>
                        <a href="/phone-directory">
                            <img src="img/icon3.png" /><br/>
                            دليل أرقام الهواتف
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <img src="img/index-slices-13.png" /><br/>
                            تسجيل للروضات
                        </a>
                    </li>

                    <li>
                        <a href="/gallary">
                            <img src="img/index-slices-14.png" /><br/>
                            ألبوم الصور
                        </a>
                    </li>

                </ul>

                <div class="innerbox">
                    <a href="">

                        <span id="span1">
                            ابقى متطلع على
اخر المستجدات
                        </span>

                        <img src="img/left-colmn-img.png"/>

                        <span id="span2">
                            تابعنا عبر
الفيسبوك
                            <img src="img/index-slices-17.png" />
                        </span>
                    </a>
                </div>
            </div>



            <div class="col-md-9">
                <div id="inner_content">
                    <div class="thumb">
                        <img src="img/news1_details_innerimg.jpg" />
                    </div>
                    <div class="title">
                        تسجيل مستخدم جديد
                    </div>
                    <div style="clear: both"></div>

                    <div style="clear: both"></div>

                    <div class="desc">
                    <div id="registerform">
<form method="post" action="">

    <input type="text" class="form-control" name="fname" placeholder="الإسم الأول">
    <input type="text" class="form-control" name="Lname" placeholder="الإسم الثاني" >
    <input type="email"  class="form-control" name="email" placeholder="البريد الإلكتروني" >
    <input type="password"  class="form-control" name="Lname" placeholder="كلمة المرور" >
    <input type="submit" class="submit form-control" value="ارسال">
</form>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection





@section('footertitle')
    <h2 class="section_title">@lang('home.contact_footer')</h2>
@endsection