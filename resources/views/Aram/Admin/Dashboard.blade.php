<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin board</title>

    <link href="{{asset('Arams\Admin\css\all.min.css')}}" rel="stylesheet" type="text/css">@notifyCss

    <link href="{{asset('Arams\Admin\css\sb-admin-2.min.css')}}" rel="stylesheet">@notifyCss
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">@notifyCss

</head>

<style media="screen">
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .chat-btn {
        position: fixed;
        right:50px;
        bottom: 50px;
        background: dodgerblue;
        color: white;
        width:60px;
        height: 60px;
        border-radius: 50%;
        opacity: 0.8;
        transition: opacity 0.3s;
        box-shadow: 0 5px 5px rgba(0,0,0,0.4);
    }

    .chat-btn:hover, .submit :hover, #emoji-btn:hover{
        opacity: 1;
    }
    .chat-popup{
        display: none;
        position: fixed;
        bottom:80px;
        right:120px;
        height: 400px;
        width: 300px;
        background-color: white;
        /* display: flex; */
        flex-direction: column;
        justify-content: space-between;
        padding: 0.75rem;
        box-shadow: 5px 5px 5px rgba(0,0,0,0.4);
        border-radius: 10px;
    }
    .show{
        display: flex;
    }
    .chat-area{
        height: 80%;
        overflow-y: auto;
        overflow-x: hidden;
    }
    .income-msg{
        display: flex;
        align-items: center;
    }
    .avatar{
        width:45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }
    .income-msg .msg{
        background-color: dodgerblue;
        color: white;
        padding:0.5rem;
        border-radius: 25px;
        margin-left: 1rem;
        box-shadow: 0 2px 5px rgba(0,0,0,0.4);
    }

    .input-area{
        position: relative;
        display: flex;
        justify-content: center;
    }
    input[type="text"]{
        width:100%;
        border: 1px solid #ccc;
        font-size: 1rem;
        border-radius: 5px;
        height: 2.2rem;
    }
    #emoji-btn{
        position: absolute;
        font-size: 1.2rem;
        background: transparent;
        right: 50px;
        top:2px;
        opacity:0.5;
    }
    .submit{
        padding: 0.25rem 0.5rem;
        margin-left: 0.5rem;
        background-color: green;
        color:white;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        opacity: 0.7;
    }
    .out-msg{
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
    .my-msg{
        display: flex;
        justify-content: flex-end;
        margin: 0.75rem;
        padding: 0.5rem;
        background-color: #ddd;
        border-radius: 25px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.4);
        word-break: break-all;
    }
    @media (max-width:500px){
        .chat-popup{
            bottom: 120px;
            right:10%;
            width: 80vw;
        }
    }



    .bg {
        background-color: #507b8f;
    }

    .btn-search {

        background-color: #4B6F82;
    }
    h6 {
        font-size: 0.95rem;
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



</style>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" >
            <div class="sidebar-brand-icon ">
                <i class="fas fa-user-edit"></i>
            </div>
            <div class="sidebar-brand-text mx-3">  المسؤول {{$Admin->name}}  </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">



        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                   aria-expanded="true" aria-controls="collapsePages">
                    <span>الإعدادات </span>
                    <i class="fas fa-folder "></i>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">العقارات</h6>
                        <a class="collapse-item" href="editforrent.html">للإجار</a>
                        <a class="collapse-item" href="editforSale.html">للبيع</a>
                        <a class="collapse-item" href="forgot-password.html">نسيان كلمة المرور</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="table2.html">
                    <span>جداول الطلبات</span>
                    <i class="fas  fa-calendar"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{asset(route('Admin_Logout'))}}">
                    <span> تسجيل الخروج</span>
                    <i class="fas  fa-power-off"></i>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="بحث ..."
                               aria-label="Search" aria-describedby="basic-addon2">
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
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="بحث ..." aria-label="Search"
                                           aria-describedby="basic-addon2">
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
                        <a class="nav-link dropdown-toggle" id="notification_icon" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw" ></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter" id="notification_number"  >{{sizeof($notification->where('view','0'))}}</span>
                        </a>

                        <input id="notify_number" value="{{sizeof($notification->where('view','0'))}}" hidden>

                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown" id="notification_list">
                            <h6 class="dropdown-header"  style= "padding-left: 40%; font-size: 20px;">
                                طلبات اضافة عقار
                            </h6>

                            @if(sizeof($notification)!=0)
                                @foreach($notification as $notify)
                            <a class="dropdown-item d-flex align-items-center" href="{{url('Admin/property_details?property_id='.$notify->property_id)}}">

                                <div>
                                    <div class="small text-gray-500" >{{$notify->created_at}}</div>
                                    <span class="font-weight-bold">{{$notify->message}}  </span>

                                </div>
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa- text-white"> التفاصيل </i>
                                    </div>
                                </div>


                            </a>
                                @endforeach
                                @endif


                            <a class="dropdown-item text-center small text-gray-500" >المزيد</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" id="message_icon"  role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter" id="messages_number" >{{sizeof($messages->where('view','0'))}}</span>
                        </a>

                        <input id="message_number" value="{{sizeof($messages->where('view','0'))}}" hidden>

                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown " id="message_list">
                            <h6 class="dropdown-header " style= "padding-left: 40%; font-size: 20px;">
                                المراسلات
                            </h6>

                            @if(sizeof($messages)!=0)
                                @foreach($messages as $message)

                            <a class="dropdown-item d-flex align-items-center" href="{{asset(route('message_detail',$message->id))}}">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{asset('Arams\images\Message_Logo\undraw_profile_3.svg')}}"
                                         alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>

                                <div>
                                    <div class="text-truncate">{{$message->created_at}} </div>
                                    <div class="small text-gray-500"> {{$message->title}} </div>
                                </div>
{{--                                <a class="dropdown-item text-center small text-gray-500" href="#"> المزيد..</a>--}}

                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa- text-white"> التفاصيل </i>
                                    </div>
                                </div>
                            </a>

                                @endforeach
                            @endif

                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">

                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Arams Property  Mangement System</span>
                            <!-- <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg"> -->
                        </a>


                </ul>

            </nav>

            <div class="container-fluid">

                <!-- Page Heading -->
             <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">القائمة الأساسية :</h1>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                      <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
             </div>


                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            عقارات  للإيجار </div>
                                        <a href="#for_rent"  class="text-xs font-weight-bold text-primary text-uppercase">
                                            {{sizeof($propertes_rent)}}
                                        </a>

                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            عقارات  للبيع</div>
                                        <a href="#for_sale" class="text-xs font-weight-bold text-success text-uppercase ">{{sizeof($propertes_sale)}}</a>
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
                                            طلبات الإضافة</div>
                                        <a href="#for_sale" class="text-xs font-weight-bold text-info text-uppercase ">  4</a>
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
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            طلبات المراسلة</div>
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">7</div>
                                    </div>
                                    <div class="col-auto" style="margin-top: -20px;">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row" >

                    <!-- Content Row -->
                    <div class="row justify-content-around" >

                        <div class="row" >

                            <div class="card shadow mb-4" style="max-width: 88em;">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary " id="for_rent">عقارات للبيع </h6>
                                </div>
                                <div class="card-body" style="text-align:left;width: 72em;">

                                    <div class="text-center">

                                        <div class="site-section site-section-sm bg-light">
                                            <div class="container">

                                                <div class="row mb-5" >

                                                    @if(sizeof($propertes_sale)!=0)

                                                    @foreach($propertes_sale as $Property)


                                                    <div class="col-md-6 col-lg-4 mb-4" style="width: 77em;border: 1px solid #dee2e6 !important">
                                                        <div class="property-entry h-100">

                                                            <a href="{{asset(url('aram/property/details?property_id='.$Property->id))}}" class="property-thumbnail">



                                                                <img src="{{asset('Arams\images\Property_Form\\'.$Property->photo)}}" style="height: 145px;width: 218px" class="img-fluid">
                                                            </a>
                                                            <div class="p-4 property-body">
                                                                <a href="#" class="property-favorite active"><span class="icon-heart-empty"></span></a>
                                                                <h2 class="property-title"><a href="{{asset(url('aram/property/details?property_id='.$Property->id))}}">{{$Property->description}}  </a></h2>
                                                                <span class="property-location d-block mb-3" style="margin-right: -7px"><span class="property-icon icon-room"></span> {{$Property->country}} - {{$Property->city}} - {{$Property->area}} </span>
                                                                <strong class="property-price text-primary mb-3 d-block text-success">{{$Property->currency}} {{$Property->price}}</strong>
                                                                <div class="property-specs-wrap mb-3 mb-lg-0">

                                                                    <span ><i class="fa fa-bed"> {{$Property->number_of_bedroom}}</i></span>

                                                                    <span style="margin: 1em;"><i class="fa fa-bath"> {{$Property->number_of_bathroom}}</i></span>

                                                                    <span><i class="fa fa-car"> {{$Property->Parking}}</i></span>

                                                                </div>
                                                                <div class="row justify-content-center" style="margin-top: 11px; margin-left: 5px;">
                                                                    <div class="mr-3">
                                                                        <a href="{{url('Admin/property_edit/'.$Property->id)}}">
                                                                            <div class="icon-circle bg-success">
                                                                                <i class="fas fa- text-white"> تعديل </i>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="mr-3">
                                                                        <a href="{{url('Admin/property_delete/'.$Property->id)}}">
                                                                            <div class="icon-circle bg-danger">
                                                                                <i class="fas  text-white">إزالة</i>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                    @endforeach

                                                        @endif

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row" >

                    <!-- Content Row -->
                    <div class="row justify-content-around" >

                        <div class="row" >

                            <div class="card shadow mb-4" style="max-width: 88em;">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary " id="for_rent">عقارات للإيجار </h6>
                                </div>
                                <div class="card-body" style="text-align:left;width: 72em;">

                                    <div class="text-center">

                                        <div class="site-section site-section-sm bg-light">
                                            <div class="container">

                                                <div class="row mb-5" >

                                                    @if(sizeof($propertes_rent)!=0)

                                                    @foreach($propertes_rent as $Property)


                                                        <div class="col-md-6 col-lg-4 mb-4" style="border: 1px solid #dee2e6 !important; ">
                                                            <div class="property-entry h-100">

                                                                <a href="{{url('aram/property/details?property_id='.$Property->id)}}" class="property-thumbnail">

                                                                    <img src="{{asset('Arams\images\Property_Form\\'.$Property->photo)}}" style="height: 145px;width: 218px" class="img-fluid">
                                                                </a>
                                                                <div class="p-4 property-body">
                                                                    <a href="#" class="property-favorite active"><span class="icon-heart-empty"></span></a>
                                                                    <h2 class="property-title"><a href="{{asset(url('aram/property/details?property_id='.$Property->id))}}">{{$Property->description}}  </a></h2>
                                                                    <span class="property-location d-block mb-3" style="margin-right: -7px"><span class="property-icon icon-room"></span> {{$Property->country}} - {{$Property->city}} - {{$Property->area}} </span>
                                                                    <strong class="property-price text-primary mb-3 d-block text-success">{{$Property->currency}} {{$Property->price}}</strong>
                                                                    <div class="property-specs-wrap mb-3 mb-lg-0">

                                                                        <span ><i class="fa fa-bed"> {{$Property->number_of_bedroom}}</i></span>

                                                                        <span style="margin: 1em;"><i class="fa fa-bath"> {{$Property->number_of_bathroom}}</i></span>

                                                                        <span><i class="fa fa-car"> {{$Property->Parking}}</i></span>

                                                                    </div>
                                                                    <div class="row justify-content-center" style="margin-top: 11px; margin-left: 5px;">
                                                                        <div class="mr-3">
                                                                            <a href="{{url('Admin/property_edit/'.$Property->id)}}">
                                                                                <div class="icon-circle bg-success">
                                                                                    <i class="fas fa- text-white"> تعديل </i>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                        <div class="mr-3">
                                                                            <a href="{{url('Admin/property_delete/'.$Property->id)}}">
                                                                                <div class="icon-circle bg-danger">
                                                                                    <i class="fas  text-white">إزالة</i>
                                                                                </div>
                                                                            </a>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    @endforeach

                                                    @endif

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row" >

                    <!-- Content Row -->
                    <div class="row justify-content-around" >

                        <div class="row" >

                            <div class="card shadow mb-4" style="max-width: 88em;">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary " id="for_rent">عقارات معلقة </h6>
                                </div>
                                <div class="card-body" style="text-align:left;width: 72em;">

                                    <div class="text-center">

                                        <div class="site-section site-section-sm bg-light">
                                            <div class="container">

                                                <div class="row mb-5" >

                                                    @if(sizeof($propertes_outstanding)==0)
                                                    <p style=" font-size: 1.5em;">لايوجد عقارات معلقة حاليا!</p>
                                                    @endif
                                                    @if(sizeof($propertes_outstanding)!=0)

                                                        @foreach($propertes_outstanding as $Property)


                                                            <div class="col-md-6 col-lg-4 mb-4" style="border: 1px solid #dee2e6 !important; ">
                                                                <div class="property-entry h-100">

                                                                    <a href="{{url('Admin/property_details?property_id='.$Property->id)}}" class="property-thumbnail">

                                                                        <img src="{{asset('Arams\images\Property_Form\\'.$Property->photo)}}" style="height: 145px;width: 218px" class="img-fluid">
                                                                    </a>
                                                                    <div class="p-4 property-body">
                                                                        <a href="#" class="property-favorite active"><span class="icon-heart-empty"></span></a>
                                                                        <h2 class="property-title"><a href="{{asset(url('aram/property/details?property_id='.$Property->id))}}">{{$Property->description}}  </a></h2>
                                                                        <span class="property-location d-block mb-3" style="margin-right: -7px"><span class="property-icon icon-room"></span> {{$Property->country}} - {{$Property->city}} - {{$Property->area}} </span>
                                                                        <strong class="property-price text-primary mb-3 d-block text-success">{{$Property->currency}} {{$Property->price}}</strong>
                                                                        <div class="property-specs-wrap mb-3 mb-lg-0">

                                                                            <span ><i class="fa fa-bed"> {{$Property->number_of_bedroom}}</i></span>

                                                                            <span style="margin: 1em;"><i class="fa fa-bath"> {{$Property->number_of_bathroom}}</i></span>

                                                                            <span><i class="fa fa-car"> {{$Property->Parking}}</i></span>

                                                                        </div>
                                                                        <div class="row justify-content-center" style="margin-top: 11px; margin-left: 5px;">
                                                                            <div class="mr-3">
                                                                                <a href="{{url('Admin/property_edit/'.$Property->id)}}">
                                                                                    <div class="icon-circle bg-success">
                                                                                        <i class="fas fa- text-white"> تعديل </i>
                                                                                    </div>
                                                                                </a>
                                                                            </div>



                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endforeach

                                                    @endif

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


        </div>



        </div>



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

</div>

<footer class="sticky-footer bg-white" style="border: 1.5px solid #dee2e6 !important;text-align: center">
    <div class="container my-auto">
        <div class="copyright text-center22 my-auto">
            <span >Copyright &copy; AramsTeam</span>
        </div>
    </div>
</footer>

<script src="{{asset('Arams/Administrator/vendor/jquery/jquery.min.js')}}"></script>@notifyJs


<script src="{{asset('Arams/Administrator/vendor/chart.js/Chart.min.js')}}"></script>@notifyJs

<script src="{{asset('Arams/Administrator/js/demo/chart-area-demo.js')}}"></script>@notifyJs
<script src="{{asset('Arams/Administrator/js/demo/chart-pie-demo.js')}}"></script>@notifyJs

<script type="text/javascript" src="http://code.jquery.com/jquery-3.6.0.min.js"></script>@notifyJs
<script >

</script>

<script>


    var notify_number = document.getElementById('notify_number');

    if(notify_number.value==="0") {
        document.getElementById('notification_number').className = 'hidden';
    }

</script>

<script>


    var notify_number = document.getElementById('message_number');

    if(notify_number.value==="0") {
        document.getElementById('messages_number').className = 'hidden';
    }

</script>

<script>

    var x = document.getElementById("notification_icon");

    var y = document.getElementById("message_icon");

    var notification_list = document.getElementById('notification_list');
    var message_list = document.getElementById('message_list');

    var notification_who_whatched = document.getElementById('notification_number');
    var messages_who_whatched = document.getElementById('messages_number');

    x.addEventListener('click',()=>{

        if ( notification_list.className ==="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in") {

            notification_list.className = "dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in show";
               notification_who_whatched.className = 'hidden';


        }

        else  {

            notification_list.className = "dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in";


        }

        $.ajax({
            type: 'post',
            url:'{{route('view_notification')}}',
            data:{
               '_token':"{{csrf_token()}}",
               'view':'1'

            },

        });

    });


    y.addEventListener('click',()=>{

        if ( message_list.className ==="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in") {

            message_list.className = "dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in show";
            messages_who_whatched.className = 'hidden';
        }

        else  {

            message_list.className = "dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in";


        }

        $.ajax({
            type: 'post',
            url:'{{route('view_messages')}}',
            data:{
                '_token':"{{csrf_token()}}",
                'view':'1'

            },

            success: function (response) {
                console.log('correct')
            }

        });

    })


</script>



<x:notify-messages />
</body>

</html>

