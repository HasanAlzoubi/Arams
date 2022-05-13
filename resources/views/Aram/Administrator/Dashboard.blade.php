<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator board</title>

    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\bootstrap.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\elegant-icons.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\image-uploader.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\jquery-ui.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\magnific-popup.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\owl.carousel.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\richtext.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\slicknav.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\style.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\style.css.map')}}">@notifyCss

    <link href="{{asset('Arams\Administrator\vendor\fontawesome-free\css\all.min.css')}}" rel="stylesheet" type="text/css">@notifyCss

    <link href="{{asset('Arams\Administrator\css\sb-admin-2.css')}}" rel="stylesheet">@notifyCss
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">@notifyCss


</head>
<style media="screen">
    .bg {
        background-color: #507b8f;
    }

    .btn-search {

        background-color: #4B6F82;
    }
    h6 {
        font-size: 0.95rem;
        /* direction: rtl; */
        padding-left: 1%;
    }

    .sidebar .nav-item .nav-link {
        display: block;
        width: 100%;
        text-align: right;
        padding: 1rem;
        width: 10rem;
    }



    .colums {
        flex: 0 0 100%;
        max-width: 96%;
        /* padding: 2%; */
    }

    .circleYall {
        width: 2.5rem;
        border-radius: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ffD700;
    }

</style>


<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.html">
            <div class="sidebar-brand-icon ">
                <i class="fas fa-users-cog"></i>
            </div>
            <div class="sidebar-brand-text mx-3">المدير {{$Administrator->name}}  </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

{{--        <li class="nav-item dropdown no-arrow">--}}
{{--            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

{{--                <i class="fas fa-id-card fa-sm fa-fw mr-2 text-gray-400"></i>--}}

{{--                <span class="mr-2 d-none d-lg-inline text-gray-600 small">حسابي الشخصي</span>--}}

{{--            </a>--}}
{{--            <!-- Dropdown - User Information -->--}}
{{--            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">--}}
{{--                <a class="dropdown-item" href="#">                        الصفحة الشخصية--}}

{{--                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                </a>--}}
{{--                <a class="dropdown-item" href="#">                        الضبط--}}

{{--                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                </a>--}}
{{--                <a class="dropdown-item" href="#">                        سجل النشاط--}}

{{--                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                </a>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">                        تسجيل الخروج--}}

{{--                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </li>--}}


        <div class="sidebar-heading">

        </div>


        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">


            <li class="nav-item">
                <a class="nav-link" href="table2.html">
                    <span>جداول الطلبات</span>
                    <i class="fas  fa-calendar"></i>
                </a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{asset(route('users_table'))}}">
                    <span>جداول العملاء</span>
                    <i class="fas fa-fw fa-table"></i>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{asset(route('Add_Admin'))}}">
                    <span>اضافة مسؤول</span>
                    <i class="fas fa-user"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{asset(route('Administrator_logout'))}}">
                    <span> تسجيل الخروج</span>
                    <i class="fas fa-power-off"></i>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">


        </div>

    </ul>


    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="بحث ..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-search" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">

                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="بحث ..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>


                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                طلبات الإضافة
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">

                                <div>
                                    <div class="small text-gray-500">حزيران  12, 2019</div>
                                    <span class="font-weight-bold">شقة للبيع في دمشق  </span>

                                </div>
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa- text-white"> قبول </i>
                                    </div>
                                </div>

                                <div class="mr-3">
                                    <div class="icon-circle bg-danger">
                                        <i class="fas  text-white"> رفض</i>
                                    </div>
                                </div>
                            </a>

                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div>
                                    <div class="small text-gray-500">حزيران  12, 2019</div>
                                    <span class="font-weight-bold">شقة للبيع في دمشق</span>

                                </div>
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa- text-white"> قبول </i>
                                    </div>
                                </div>

                                <div class="mr-3">
                                    <div class="icon-circle bg-danger">
                                        <i class="fas  text-white"> رفض</i>
                                    </div>
                                </div>
                            </a>

                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div>
                                    <div class="small text-gray-500">حزيران  12, 2019</div>
                                    <span class="font-weight-bold">شقة للاجار في حمص  </span>

                                </div>
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa- text-white"> قبول </i>
                                    </div>
                                </div>

                                <div class="mr-3">
                                    <div class="icon-circle bg-danger">
                                        <i class="fas  text-white"> رفض</i>
                                    </div>
                                </div>
                            </a>

                            <a class="dropdown-item text-center small text-gray-500" href="#">المزيد</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>

                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">

                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Arams Property  Mangement System</span>
                        </a>

                    </li></ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid" id="content1">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">القائمة الأساسية :</h1>

                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            الموظفون </div>
                                        <a  class="text-xs font-weight-bold text-primary text-uppercase">
                                           {{sizeof($Admins)}}
                                        </a>

                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            الأرباح</div>
                                        <a class="text-xs font-weight-bold text-success text-uppercase ">  4</a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            إحصائيةالبيع والشراء </div>
                                        <a href="" class="text-xs font-weight-bold text-info text-uppercase ">  4</a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Pending Requests Card Example -->

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            العملاء  </div>
                                        <a  class="text-xs font-weight-bold text-info text-uppercase ">{{$user_number}}</a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h1 class="m-0 font-weight-bold text-primary" style="font-size: 2em;">الأرباح :</h1>

                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart" style="display: block; width: 1093px; height: 320px;" width="1093" height="320" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <section class="agent-section spad" id="content2">

                <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-right: 1em;">
                    <h1 class="h3 mb-0 text-gray-800">المسؤوليين  :</h1>

                </div>
                <div class="row">

                    @if(sizeof($Admins)!=0)

                    @foreach($Admins as $Admin)
                    <div class="col-lg-4 col-md-6">
                        <div class="as-item">
                            <div class="as-pic">
                                <img src="{{asset('Arams\images\Admin\\'.$Admin->photo)}}" alt="">
{{--                                <div class="rating-point">--}}
{{--                                    4--}}
{{--                                </div>--}}
                            </div>

                            <div class="as-text">
                                <div class="at-title">
                                    <h6>{{$Admin->name}} </h6>
                                    <div class="rating-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <ul>
                                    <li>{{$Admin->id}} <span> رقم التعريف</span></li>
                                    <li>{{$Admin->email}} <span> البريد الالكتروني</span></li>
                                    <li>{{$Admin->mobile}} <span> رقم الجوال</span></li>
                                </ul>
                                <hr>

                                <div class="row justify-content-center" style="margin-left: 16px;">
                                    <div class="mr-3">
                                        <a href="{{asset(url('Administrator/Admin_Details/'.$Admin->id ))}}">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa- text-white"> تعديل </i>
                                        </div>
                                        </a>
                                    </div>

                                    <div class="mr-3">
                                        <a href="{{asset(url('Administrator/delete/'.$Admin->id ))}}">
                                        <div class="icon-circle bg-danger">
                                            <i class="fas  text-white">إزالة</i>
                                        </div>
                                        </a>
                                    </div>

                                </div>

                                <!-- <a href="#" class="primary-btn">إجراء تعديل</a> -->
                            </div>
                        </div>
                    </div>

                    @endforeach

                    @endif


                </div>



                <div class="row justify-content-center">


                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h3 class="m-0 font-weight-bold text-primary">الإحصائية السنوية</h3>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">تعديلات</div>
                                        <a class="dropdown-item" href="#"> إزالة</a>
                                        <a class="dropdown-item" href="#">تعديل يدوي</a>
                                        <!-- <div class="dropdown-divider"></div> -->
                                        <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="myPieChart" width="328" height="245" style="display: block; width: 328px; height: 245px;" class="chartjs-render-monitor"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> مبيع
                            </span>
                                    <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> إجار
                            </span>
                                    <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> أعمال أخرى
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h5 class="m-0 font-weight-bold text-primary">أنواع الطاقة المنزلية المستخدمة</h5>
                            </div>
                            <div class="card-body" style="text-align: left">
                                <h4 class="small font-weight-bold">20%<span class="float-right"> نسبة المنازل المزودة بشبكة غاز</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">40% <span class="float-right"> نسبة المنازل التي تستخدم عداد مشترك</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">60% <span class="float-right">نسبة المنازل المزودة بمنظم كهربائي </span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">80%<span class="float-right"> نسبة المنازل المزودة بنظام طاقة شمسية</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">100%<span class="float-right"> نسبة المنازل المتصلة بشبكة الكهرباء العامة</span></h4>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </section>

        </div>
        <footer class="sticky-footer bg-white" style="border: 1.5px solid #dee2e6 !important;">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; AramsTeam</span>
                </div>
            </div>
        </footer>

    </div>
</div>



<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel"> </h5>
            </div>
            <div class="modal-body"> هل تود المغادرة حقاً ؟
                <br>اضغط  "رجوع "  للإلغاء .. أو "خروج" للمغادرة  </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">رجوع </button>
                <a class="btn btn-primary" href="login.html">خروج </a>
            </div>
        </div>


    </div>

</div>


<script src="{{asset('Arams/Administrator/vendor/jquery/jquery.min.js')}}"></script>@notifyJs


<script src="{{asset('Arams/Administrator/vendor/chart.js/Chart.min.js')}}"></script>@notifyJs

<script src="{{asset('Arams/Administrator/js/demo/chart-area-demo.js')}}"></script>@notifyJs
<script src="{{asset('Arams/Administrator/js/demo/chart-pie-demo.js')}}"></script>@notifyJs

<script>

    var x = document.getElementById("content1");

    var y = document.getElementById("content2");

    var Main_page = document.getElementById('main_page');
    var Main_page2 = document.getElementById('main_page2');

    Main_page.style.display = "flex";
    Main_page2.style.display = "none";



    x.addEventListener('click',()=>{

        if ( Main_page.style.display === "none") {
            Main_page2.style.display = "none";
            Main_page.style.display = "flex";

        }

    });


    y.addEventListener('click',()=>{

        if ( Main_page2.style.display === "none") {
            Main_page.style.display = "none";
            Main_page2.style.display = "flex";

        }

    })


</script>

<x:notify-messages />
</body>


</html>
