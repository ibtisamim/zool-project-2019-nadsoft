@role('admin')
        <!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="adminstyle/plugins/images/favicon.png">
    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('adminstyle/plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css') !!}
            <!-- Menu CSS -->
    {!! Html::style('adminstyle/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') !!}
            <!-- animation CSS -->
    {!! Html::style('adminstyle/css/animate.css') !!}
            <!-- Custom CSS -->
    {!! Html::style('adminstyle/css/style.css') !!}
            <!-- color CSS -->
    {!! Html::style('adminstyle/css/colors/blue-dark.css') !!}
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/laravel-filemanager/img/folder.png') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="index.html">
                    <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="/adminstyle/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="/adminstyle/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                    </b>
                    <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="/adminstyle/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="/adminstyle/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
            </div>
            <!-- /Logo -->
            <!-- Search input and Toggle icon -->
            <ul class="nav navbar-top-links navbar-left">
                <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
             <!--   <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-gmail"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a> -->
                  <!--  <ul class="dropdown-menu mailbox animated bounceInDown">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="#">
                                    <div class="user-img"> <img src="/adminstyle/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="/adminstyle/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="/adminstyle/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="/adminstyle/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul> -->
                    <!-- /.dropdown-messages -->
                <!-- </li> -->
                <!-- .Task dropdown -->
            <!--    <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-check-circle"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                        <li>
                            <a href="#">
                                <div>
                                    <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </li> -->
                <!-- .Megamenu -->
                <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                    <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Content</li>
                                <li><a href="/admin/content/category">Category</a></li>
                                <li><a href="/admin/content/page">Page</a></li>



                                <li class="dropdown-header">Latest News</li>
                                <li><a href="/admin/news">News</a></li>


                                <li class="dropdown-header">Events </li>
                                <li><a href="/admin/events">Events Manage</a></li>

                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Media</li>
                                <li><a href="/admin/media/">Media Manage</a></li>

                                <li class="dropdown-header">Staffs </li>
                                <li><a href="/admin/media/">Staffs Manage</a></li>


                                <li class="dropdown-header">Polls</li>
                                <li><a href="">Poll</a></li>
                                <li><a href="">Questions</a></li>
                                <li><a href="">Answers</a></li>

                               <!-- <li><a href="form-layout.html">Photos</a></li>
                                <li class="dropdown-header">Videos</li>
                                <li><a href="form-advanced.html">Documents</a></li> -->

                            </ul>
                        </li>

                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Gallary</li>
                                <li><a href="/admin/album">Album</a></li>
                                <li><a href="/admin/album/photos">Album Images/Videos</a></li>
                                <li class="dropdown-header">Banners</li>
                                <li><a href="/admin/banners/category">Gategory</a></li>
                                <li><a href="/admin/banners">Banner</a></li>
                                <li class="dropdown-header">Models</li>
                                <li><a href="/admin/media/">Models Manage</a></li>
                            </ul>
                        </li>

                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Admin Setting</li>
                                <li><a href="/admin/settings">Setting</a></li>
                                <li><a href="/admin/media/">Mail</a></li>
                                <li><a href="/admin/contact">Contact</a></li>
                                <li class="dropdown-header">Users</li>
                                <li><a href="/admin/users/">Users List</a></li>

                                <li class="dropdown-header">Social Media</li>
                                <li><a href="/admin/social/">Social List</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <!-- /.Megamenu -->
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
            <!--    <li>
                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                        <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                </li> -->
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="/adminstyle/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{$name}}</b><span class="caret"></span> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img src="/adminstyle/plugins/images/users/varun.jpg" alt="user" /></div>
                                <div class="u-text">
                                    <h4>{{$name}}</h4>
                                    <p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/profile"><i class="ti-user"></i> My Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/setting"><i class="ti-settings"></i> Account Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <form method="post" action="{{ route('logout') }}" class="form-horizontal" >  {{ csrf_field() }}
                                <button type="submit"><i class="fa fa-power-off"></i> Logout</button>
                                <!--
                            <a href="/logout" type="submit"><i class="fa fa-power-off"></i> Logout</a> -->
                            </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
            <ul class="nav" id="side-menu">
                <li class="user-pro">
                    <a href="#" class="waves-effect"><img src="/adminstyle/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">
                            {{$name}} <span class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                        <li><a href="/profile"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>
                        <li><a href="/setting"><i class="ti-settings"></i> <span class="hide-menu">Setting</span></a></li>
                        <li><a href="/logout"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                    </ul>
                </li>


                <li class="user-pro">
                    <a href="#" class="waves-effect">
                        <i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu">
                            Content  <span class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                        <li><a href="/profile"><i class="ti-user"></i> <span class="hide-menu">Category</span></a></li>
                        <li><a href="/setting"><i class="ti-settings"></i> <span class="hide-menu">Articles</span></a></li>
                        <li><a href="/admin/news"><i class="ti-settings"></i> <span class="hide-menu">News</span></a></li>

                    </ul>
                </li>

                </ul>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">@yield('page_heading')</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <!--
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    -->
                    @yield('breadcrumb')

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    @yield('content')

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                            <li><b>With Dark sidebar</b></li>
                            <br/>
                            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme working">10</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                        </ul>
                        <ul class="m-t-20 all-demos">
                            <li><b>Choose other demos</b></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="/adminstyle/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/adminstyle/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/adminstyle/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/adminstyle/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/adminstyle/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/adminstyle/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/adminstyle/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="/adminstyle/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->

{!! Html::script('adminstyle/plugins/bower_components/jquery/dist/jquery.min.js') !!}
        <!-- Custom Theme JavaScript -->
{!! Html::script('adminstyle/js/custom.min.js') !!}
        <!--Wave Effects -->
{!! Html::script('adminstyle/js/waves.js') !!}
        <!--slimscroll JavaScript -->
{!! Html::script('adminstyle/js/jquery.slimscroll.js') !!}
{!! Html::script('adminstyle/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') !!}
{!! Html::script('adminstyle/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') !!}
{!! Html::script('adminstyle/plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js') !!}


<script>
    var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
</script>

<!-- CKEditor init -->
<script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
<script>
    $('textarea[name=ce]').ckeditor({
        height: 100,
        filebrowserImageBrowseUrl: route_prefix + '?type=Images',
        filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: route_prefix + '?type=Files',
        filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
    });
</script>

<!-- TinyMCE init -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    var editor_config = {
        path_absolute : "",
        selector: "textarea[name=tm]",
        plugins: [
            "link image"
        ],
        relative_urls: false,
        height: 129,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>

<script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
</script>
<script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
    $('#lfm2').filemanager('file', {prefix: route_prefix});
</script>

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 250,  //set editable area's height

            focus: true,
            disableResizeEditor: true

        });

        $('.note-statusbar').hide();
    });
</script>
<script>
    $(document).ready(function(){

        // Define function to open filemanager window
        var lfm = function(options, cb) {
            var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = cb;
        };

        // Define LFM summernote button
        var LFMButton = function(context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="note-icon-picture"></i> ',
                tooltip: 'Insert image with filemanager',
                click: function() {

                    lfm({type: 'image', prefix: '/laravel-filemanager'}, function(url, path) {
                        context.invoke('insertImage', url);
                    });

                }
            });
            return button.render();
        };

        // Initialize summernote with LFM button in the popover button group
        // Please note that you can add this button to any other button group you'd like
        $('#summernote-editor').summernote({
            toolbar: [
                ['popovers', ['lfm']],
            ],

            codemirror: { // codemirror options
                theme: 'monokai'
            },
            buttons: {
                lfm: LFMButton
            }
        })
    });
</script>


<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
  /*  $(function() {
        $( "#from_date" ).datepicker( "option", "dateFormat", 'd MM, y');
    });

    $(function() {
        $( "#to_date" ).datepicker();
    });*/

    $('#sandbox-container input').datepicker({
        dateFormat: "yy-mm-dd",
        altFormat: "yy-mm-dd"
    });
</script>

</body>

</html>
@endrole