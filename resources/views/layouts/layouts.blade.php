<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>لوحة التحكم</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{request()->root()}}/admin/css/rtl/bootstrap.min.css" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="{{request()->root()}}/admin/css/rtl/bootstrap.rtl.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{request()->root()}}/admin/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{request()->root()}}/admin/css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{request()->root()}}/admin/css/rtl/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{request()->root()}}/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{request()->root()}}/admin/css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">لوحة التحكم </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-left">

                {{-- <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('تسجيل خروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li> --}}
                
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="البحث ...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>

                        <li>
                            <a href="{{request()->root()}}/admin/departements/add"><i class="fa fa-edit fa-fw"></i>الاقسام</a>
                        </li>
                        <li>
                            <a href="{{request()->root()}}/admin/components/add"><i class="fa fa-edit fa-fw"></i>  المحتويات</a>
                        </li>
                        <li>
                            <a href="{{request()->root()}}/admin/componentsType/add"><i class="fa fa-edit fa-fw"></i> نوع المحتويات</a>
                        </li>
                        <li>
                            <a href="{{request()->root()}}/admin/peaces/add"><i class="fa fa-edit fa-fw"></i> قطع نوع المحتويات</a>
                        </li>
                        <li>
                            <a href="{{request()->root()}}/admin/feature/add"><i class="fa fa-edit fa-fw"></i>اضافه صفه </a>
                        </li>
                        <li>
                            <a href="{{request()->root()}}/admin/featureDetails/add"><i class="fa fa-edit fa-fw"></i>اضافه تفاصيل الصفه </a>
                        </li>
                        <li>
                            <a href="{{request()->root()}}/admin/description/add"><i class="fa fa-edit fa-fw"></i>خصائص المحتويات</a>
                        </li>
                        <li>
{{--                            <a href="{{request()->root()}}/admin/location/add"><i class="fa fa-edit fa-fw"></i>توصيل الطلبات</a>--}}
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
@yield('content')


    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="{{request()->root()}}/admin/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{request()->root()}}/admin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{request()->root()}}/admin/js/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{request()->root()}}/admin/js/raphael/raphael.min.js"></script>
    <script src="{{request()->root()}}/admin/js/morris/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{request()->root()}}/js/sb-admin-2.js"></script>

</body>

</html>

