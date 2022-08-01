@extends('layouts.Web_app')

@section('content')
    <div id="section1">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list_barts">
                        <li>
                            <a href="">
                               <img src="img/index-slices-10.png"/><br/>
                                ملف المواطنين
                            </a>
                        </li>


                        <li>
                            <a href="">
                            <img src="img/index-slices-11.png" /><br/>
                                دفع الأرنونا
                            </a>
                        </li>


                        <li>
                            <a href="/project-details">
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
                    </div>

                <div class="col-md-6 main_section">

                    <div class="main_section_inner">
                    <img src="img/section1_img.jpg" style="max-width: 100%"/>
                    <a class="readmore" href="#">المزيد>></a>
                    <h2>تهنئة من المجلس الاقليمي بستان المرج بمناسبة عيد الفطر </h2>
                    <p class="desc">
                        ظمت يوم أمس الجمعة مسيرة ضخمة، بدأ الجزء الأول منها في قرية الدحي، ثم استمرت في قرية نين بمناسبة عيد الأضحى المبارك وذلك بمشاركة رئيس المجلس الاقليمي بستان المرج احمد زعبي وعدد من الموظفين والمسؤولين والمئات من الأهالي.
                        المسيرة الكرنفالية تخللت مشاركة فرق فنية وراقص صوفي وأشياء مميزة أخرى منها طبول الكشافة والأناشيد الدينية الرائعة والتكبيرات
                    </p>
                    <hr/>
                    <div class="date">24/06/2017
                    الأربعاء
                    </div>
                </div>

                </div>

                <div class="col-md-3">
<ul class="articles_list">
    <li>
        <img src="img/news1.jpg" style="max-width: 100%"/>
        <div class="newsinfo">
            <a href="" class="readmore">المزيد>></a>
            <p class="title">
                معلومات من سجل الناخبين - للجمهور
            </p>
            <p class="date">
            <span id="day">
                الأربعاء
            </span>
            <span class="dateno">
                24/06/2017
            </span>
            </p>
        </div>


    </li>


    <li>
        <img src="img/news2.jpg" style="max-width: 100%"/>
        <div class="newsinfo">
        <a href="/news-details" class="readmore">المزيد>></a>
        <p class="title">
            غرفة حواسيب و مختبرات جديدة في المدارس

        </p>
        </p>
        <p class="date">
            <span id="day">
                الأربعاء
            </span>
            <span class="dateno">
                24/06/2017
            </span>
        </p>
        </div>
    </li>


</ul>
                </div>
    </div>
    </div>
    </div>


    <div id="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2 class="section_title">@lang('home.about')</h2>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <p>
                    <span>
                        سولم
                    </span>
                    <span>
                        نين
                    </span>
                    <span style="color:#f89a26;">
                        كفر مصر
                    </span>
                    <span>
                        دحي
                    </span>
                </p>

                    <div class="section2_desc">

                        <p>تقع قرية سولم على السفوح الجنوبية الغربية لجبال الدحي في مرج ابن عامر على ارتفاع 125 م عن سطح البحر.[1][2] يعود تاريخ البلد لعهد الفراعنة وذلك اْكد في ألواح (تل المعموريه) وكما ذكر في التوراة بان الفراعنة فرضوا ضريبة الجزيه على أرض سولم(شونيم) بعد أن دمرت على ايدي ملكة نابلس(لبيئه) كما ذكرت سولم في الحروب التي جرت بين الملك شاؤول وملك اشور.</p>
                        <p>لقد اعيد عمار البلدة على ايدي العرب المسلمين في القرن الثاني عشر.
                            سميت باسم سولم(شونبم)من الكناعنة ومعناها موضع الراحة وعرفت في العصور الأولى للمسيحيه وذكرها الفرنجة الحالي باسمها الحالي سولم.</p>
                        <p>يتوسط البلدة عين بنيت تحت البلدة الحالية </p>
                        <p>ي شكل سرداب طويل تحت الأرض. يوجد شمال شرقي البلدة تل القاض أساسات مدافن منقوره في الصخر.</p>
                    </div>
                </div>

            <div class="col-md-6">
                <img src="img/index-slices-19.png" style="max-width: 100%"/>
                <a class="readmore" href="">المزيد>></a>
            </div>

            </div>
        </div>
    </div>

    <div class="container-fluid" id="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div id="innerboxsection3">
                    <img src="img/index-slices-09.png" id="facebook_img"/>
                    <div id="innerbox">
                        <div id="box">
                            <p>
  كلمة رئيس المجلس الاقليمي بستان المرج
                            </p>
<p>
    عبد الكريم زعبي
</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>



    <div id="section4">
        <div class="container">
            <div class="row" id="parts">
                <div class="col-md-12">
                <h2 class="section_title">@lang('home.parts')</h2>
                    <p>
                        تقع قرية سولم على السفوح الجنوبية الغربية لجبال الدحي في مرج ابن عامر على ارتفاع 125 م عن سطح البحر.[1][2] يعود تاريخ البلد لعهد الفراعنة وذلك اْكد في ألواح (تل المعموريه) وكما ذكر في التوراة بان الفراعنة فرضوا ضريبة الجزيه على أرض سولم(شونيم) بعد أن دمرت على ايدي ملكة نابلس(لبيئه) كما ذكرت سولم في الحروب التي جرت بين الملك شاؤول وملك اشور.
                    </p>
                    <p>
                        لقد اعيد عمار البلدة على ايدي العرب المسلمين في القرن الثاني عشر.
                    </p>
                <p>
                    <ul class="navparts">
                    <li><a href="">
                            التربية والتعليم
                        </a></li>

                    <li><a href="">
                            المالية
                        </a></li>
                    <li><a href="">
                            الهندسة
                        </a></li>
                    <li><a href="">
                            خدمات اجتماعية
                        </a></li>
                    <li><a href="">
                            مرافق المجالس
                        </a></li>
                    <li><a href="">
                            الامان
                        </a></li>
                    <li><a href="">
                            قسم المشاريع
                        </a></li>
                    <li><a href="">
                            قسم البيطرية
                        </a></li>
                    <li><a href="">
                            الصرف الصحي والبيئة
                        </a></li>
                </ul>
                </p>
            </div>
            </div>
        </div>
    </div>

    <div id="section5">
        <div class="container">
            <div class="row" id="news">
                <div class="col-md-12">
                <h2 class="section_title">@lang('home.readalso')</h2>

                <div class="col-md-4">
                    <div class="thumb"><img src="img/readmore_article3.jpg"/></div>
                    <a class="readmore" href="#" >المزيد>></a>
                    <div class="newstitle">
                        غرف حواسيب ومختبرات جديدة في المدارس الابتدائية بقرى بستان المرج
                    </div>
                    <div class="discription">

                        <p>
                            ظمت يوم أمس الجمعة مسيرة ضخمة، بدأ الجزء الأول منها في قرية الدحي، ثم استمرت في قرية نين بمناسبة عيد الأضحى المبارك وذلك بمشاركة رئيس المجلس الاقليمي بستان المرج احمد زعبي وعدد من الموظفين والمسؤولين والمئات من الأهالي.
                        </p>

                        <p>
                            المسيرة الكرنفالية تخللت مشاركة فرق فنية وراقص صوفي وأشياء مميزة أخرى منها طبول الكشافة والأناشيد الدينية الرائعة
                        </p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="thumb"><img src="img/readmore_article2.jpg"/></div>
                    <a class="readmore" href="#" >المزيد>></a>
                    <div class="newstitle">
                        غرف حواسيب ومختبرات جديدة في المدارس الابتدائية بقرى بستان المرج
                    </div>
                    <div class="discription">

                        <p>
                            ظمت يوم أمس الجمعة مسيرة ضخمة، بدأ الجزء الأول منها في قرية الدحي، ثم استمرت في قرية نين بمناسبة عيد الأضحى المبارك وذلك بمشاركة رئيس المجلس الاقليمي بستان المرج احمد زعبي وعدد من الموظفين والمسؤولين والمئات من الأهالي.
                        </p>

                        <p>
                            المسيرة الكرنفالية تخللت مشاركة فرق فنية وراقص صوفي وأشياء مميزة أخرى منها طبول الكشافة والأناشيد الدينية الرائعة
                        </p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="thumb"><img src="img/readmore_article1.jpg"/></div>
                    <a class="readmore" href="#" >المزيد>></a>
                    <div class="newstitle">
                        غرف حواسيب ومختبرات جديدة في المدارس الابتدائية بقرى بستان المرج
                    </div>
                    <div class="discription">

                        <p>
                            ظمت يوم أمس الجمعة مسيرة ضخمة، بدأ الجزء الأول منها في قرية الدحي، ثم استمرت في قرية نين بمناسبة عيد الأضحى المبارك وذلك بمشاركة رئيس المجلس الاقليمي بستان المرج احمد زعبي وعدد من الموظفين والمسؤولين والمئات من الأهالي.
                        </p>

                        <p>
                            المسيرة الكرنفالية تخللت مشاركة فرق فنية وراقص صوفي وأشياء مميزة أخرى منها طبول الكشافة والأناشيد الدينية الرائعة
                        </p>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="section6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div id="facebook">
                    <img src="img/index-slices-16.png" id="facebook_img"/>
                    <div id="innerbox">
                        <div id="box">
                        <p>
                            ابقى مطلع على آخر المستجدات
                        </p>
                    <p>تابعنا عبر الفيسبوك</p>
                    </div>
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


