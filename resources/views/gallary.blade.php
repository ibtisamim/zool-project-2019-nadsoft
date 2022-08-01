@extends('layouts.Web_app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <img src="img/gallary2.jpg" style="max-width: 100%"/>

                    <a class="fancybox-thumb readmore" data-fancybox="gallery1" rel="fancybox-thumb"  href="img/gallary2.jpg" title="Golden Manarola (Sanjeev Deo)">
                       كفر مصر


                    </a>
                </div>


                <div class="col-md-6">
                    <img src="img/gallary.jpg" style="max-width: 100%"/>
                    <a class="fancybox-thumb readmore" data-fancybox="gallery2" rel="fancybox-thumb"  href="img/gallary.jpg" title="Golden Manarola (Sanjeev Deo)">
                        داحي
                    </a>
                </div>

                <div class="col-md-6">
                    <img src="img/gallary4.jpg" style="max-width: 100%"/>
                    <a class="fancybox-thumb readmore" data-fancybox="gallery3" rel="fancybox-thumb"  href="img/gallary4.jpg" title="Golden Manarola (Sanjeev Deo)">
                        سولم
                    </a>
                </div>


                <div class="col-md-6">
                    <img src="img/gallary3.jpg" style="max-width: 100%" />
                    <a class="fancybox-thumb readmore" data-fancybox="gallery4" rel="fancybox-thumb"  href="img/gallary3.jpg" title="Golden Manarola (Sanjeev Deo)">
                        نين
                    </a>

                </div>

                <div class="col-md-12" style="display:none">

                    <a class="fancybox-thumb" data-fancybox="gallery1" rel="fancybox-thumb" href="img/gallary3.jpg" title="Golden Manarola (Sanjeev Deo)">
                        <img src="img/gallary3.jpg" alt="" />
                    </a>
                    <a class="fancybox-thumb" data-fancybox="gallery1" rel="fancybox-thumb" href="img/gallary4.jpg" title="Codirosso spazzacamino (Massimo Greco _Foligno)">
                        <img src="img/gallary4.jpg" alt="" />
                    </a>
                    <a class="fancybox-thumb" data-fancybox="gallery1" rel="fancybox-thumb" href="img/gallary2.jpg" title="Morning Twilight (Jose Hamra Images)">
                        <img src="img/gallary2.jpg" alt="" />
                    </a>
                    <a class="fancybox-thumb" data-fancybox="gallery1" rel="fancybox-thumb" href="img/gallary.jpg" title="(Eric Goncalves (cathing up again!))">
                        <img src="img/gallary5.jpg" alt="" />
                    </a>

                </div>



                <div class="col-md-12" style="display:none">

                    <a class="fancybox-thumb" data-fancybox="gallery2" rel="fancybox-thumb" href="img/news4.jpg" title="Golden Manarola (Sanjeev Deo)">
                        <img src="img/news4.jpg" alt="" />
                    </a>
                    <a class="fancybox-thumb" data-fancybox="gallery2" rel="fancybox-thumb" href="img/news3.jpg" title="Codirosso spazzacamino (Massimo Greco _Foligno)">
                        <img src="img/news3.jpg" alt="" />
                    </a>
                    <a class="fancybox-thumb" data-fancybox="gallery2" rel="fancybox-thumb" href="img/news13.jpg" title="Morning Twilight (Jose Hamra Images)">
                        <img src="img/news13.jpg" alt="" />
                    </a>
                    <a class="fancybox-thumb" data-fancybox="gallery2" rel="fancybox-thumb" href="img/news7.jpg" title="(Eric Goncalves (cathing up again!))">
                        <img src="img/news7.jpg" alt="" />
                    </a>

                </div>
</div>
</div>
        <!-- Modal -->
        <div class="modal fade buiding" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="titlestyle2"></h4>
                    <div class="modal-body"></div>
                    <div class="modal-footer" style="border:0px"></div>
                </div>
            </div>
        </div>

<!--
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>   -->

        <script type="text/javascript">
            $(document).ready(function () {
                //$('.launchmodal').click(function () {

                    $('[data-fancybox="gallery1"]').fancybox({
                        prevEffect	: 'none',
                        nextEffect	: 'none',
                        margin : [44,0,22,0],
                        thumbs : {
                            autoStart : true,
                            axis      : 'x'
                        },
                        helpers	: {
                            title	: {
                                type: 'outside'
                            },
                            thumbs	: {
                                width	: 50,
                                height	: 50
                            }
                        }
                    });

                $('[data-fancybox="gallery2"]').fancybox({
                    prevEffect	: 'none',
                    nextEffect	: 'none',
                    margin : [44,0,22,0],
                    thumbs : {
                        autoStart : true,
                        axis      : 'x'
                    },
                    helpers	: {
                        title	: {
                            type: 'outside'
                        },
                        thumbs	: {
                            width	: 50,
                            height	: 50
                        }
                    }
                });
  /*                  var dataURL = $(this).attr('data-href');
                    $('.modal-body').load(dataURL,function(){
                        $('.modal').modal({show:true});
                    });
*/
              //  });
            });
        </script>
@endsection

@section('footertitle')
    <h2 class="section_title">@lang('home.contact_footer')</h2>
@endsection


