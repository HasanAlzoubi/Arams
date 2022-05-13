<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Table</title>
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\bootstrap.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\elegant-icons.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\Administrator\agant\image-uploader.min.css')}}">@notifyCss
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
        font-size: 1.5rem;
        /* direction: rtl; */
        padding-left: 90%;
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
                <i class="fas fa-user-edit"></i>
            </div>
            <div class="sidebar-brand-text mx-3"> المسؤول </div>
        </a>


        <hr class="sidebar-divider my-0">


        <hr class="sidebar-divider">

        <li class="nav-item dropdown no-arrow">

            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <i class="fas fa-id-card fa-sm fa-fw mr-2 text-gray-400"></i>

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">حسابي الشخصي</span>

            </a>


        </li>


        <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="{{asset(route('Admin_page'))}}">
                    <span>الصفحة الرئيسية</span>
                    <i class="fas  fa-calendar"></i>
                </a>
            </li>

        <hr class="sidebar-divider d-none d-md-block">


    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">




                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">




                    <li class="nav-item dropdown no-arrow">

                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 25em;">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Arams Property  Mangement System</span>
                        </a>
                    </li>

                </ul>

            </nav>

            <div class="container-fluid">


                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">تفاصيل الرسالة : </h1>
                </div>


                <div class="container-fluid">


                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">الرسالة</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>رقم العقار</th>
                                        <th>اسم المرسل</th>
                                        <th>البريد الالكتروني للمرسل</th>
                                        <th> موبايل المرسل</th>
                                        <th>تفاصيل الرسالة</th>
                                        <th>تفاصيل العقار</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(sizeof($message)!=0)

                                    @foreach($message as $user)
                                    <tr>
                                        <td>{{$user->property_id}}</td>
                                        <td>{{$user->name_user}}</td>
                                        <td>{{$user->email_user}}</td>
                                        <td>{{$user->mobile_user}}</td>
                                        <td>{{$user->message_user}}</td>
                                        <td>
                                            <a href="">
                                            <div class="mr-3">
                                                <div class="icon-circle bg-success">
                                                    <i class="fas fa- text-white"> التفاصيل </i>
                                                </div>
                                            </div>
                                            </a>
                                        </td>


                                    </tr>
                                    @endforeach

                                    @endif


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- End of Content Wrapper -->

        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
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

        <footer class="sticky-footer bg-white" style="border: 1.5px solid #dee2e6 !important;">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; AramsTeam</span>
                </div>
            </div>
        </footer>

    </div>

</div>



        <script type="text/javascript" src="http://code.jquery.com/jquery-3.6.0.min.js"></script>@notifyJs


</body>

</html>
