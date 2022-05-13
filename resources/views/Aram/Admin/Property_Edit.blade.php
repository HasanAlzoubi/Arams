<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Property</title>

    <link href="{{asset('Arams\Admin\css\all.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('Arams\Admin\css\sb-admin-2.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


</head>
<style media="screen">
    .bg {
        background-color: #507b8f;
    }

    .btn-search {

        background-color: #4B6F82;
    }

    .sidebar .nav-item .nav-link {
        display: block;
        width: 100%;
        text-align: right;
        padding: 1rem;
        width: 10rem;
    }
    form {
        display: block;
        margin-top: 0em;
    }
    .search-form-content {
        overflow: hidden;
        margin-bottom: 26px;
    }
    .search-form-content .filter-form {
        margin-right: 0px;
    }
    .search-form-content .filter-form .sm-width {
        width: calc(15% - 20px);
    }
    .search-form-content .filter-form .nice-select {
        clear: none;
        margin-right: 20px;
        height: 46px;
        background: #ffffff;
        border-radius: 0;
        border: 1px solid #e1e1e1;
        line-height: 43px;
        margin-bottom: 20px;
    }
    .search-form-content .filter-form .nice-select:after {
        border-bottom: 1px solid #666666;
        border-right: 1px solid #666666;
        height: 6px;
        right: 16px;
        margin-top: -6px;
        width: 6px;
        top: 54%;
    }
    .search-form-content .filter-form .nice-select span {
        font-size: 13px;
        color: #666666;
        font-weight: 500;
    }
    .search-form-content .filter-form .nice-select.open .list {
        opacity: 1;
        pointer-events: auto;
        -webkit-transform: scale(1) translateY(0);
        -ms-transform: scale(1) translateY(0);
        transform: scale(1) translateY(0);
        width: 100%;
        border-radius: 0;
        margin-top: 0;
    }
    .search-form-content .filter-form .price-range-wrap {
        float: left;
        margin-right: 20px;
    }
    .search-form-content .filter-form .price-range-wrap .price-text {
        margin-bottom: 9px;
    }
    .search-form-content .filter-form .price-range-wrap .price-text label {
        display: inline-block;
        font-size: 13px;
        font-weight: 500;
        color: #666666;
        margin-bottom: 0;
        text-transform: uppercase;
    }
    .search-form-content .filter-form .price-range-wrap .price-text input {
        display: inline-block;
        width: 165px;
        font-size: 13px;
        font-weight: 500;
        color: #666666;
        border: none;
        background: transparent;
    }
    .search-form-content .filter-form .room-size-range-wrap {
        float: left;
        margin-right: 20px;
    }
    .search-form-content .filter-form .room-size-range-wrap .price-text {
        margin-bottom: 9px;
    }
    .search-form-content .filter-form .room-size-range-wrap .price-text label {
        display: inline-block;
        font-size: 13px;
        color: #666666;
        font-weight: 500;
        margin-bottom: 0;
    }
    .search-form-content .filter-form .room-size-range-wrap .price-text input {
        display: inline-block;
        width: 165px;
        font-size: 13px;
        color: #666666;
        font-weight: 500;
        border: none;
        outline: none;
        background: transparent;
    }
    .search-form-content .filter-form .search-btn {
        font-size: 14px;
        height: 46px;
        background: #00C89E;
        color: #ffffff;
        border: none;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: 600;
    }


</style>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon ">
                <i class="fas fa-user-edit"></i>
            </div>
            <div class="sidebar-brand-text mx-3">  المسؤول  </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-id-card fa-sm fa-fw mr-2 text-gray-400"></i>

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">حسابي الشخصي</span>

            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">                        الصفحة الشخصية

                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
                <a class="dropdown-item" href="#">                        الضبط

                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
                <a class="dropdown-item" href="#">                        سجل النشاط

                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">                        تسجيل الخروج

                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
            </div>
        </li>


        <!-- Heading -->
        <div class="sidebar-heading">

        </div>

        <!-- Nav Item - Pages Collapse Menu -->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_page')}}">
                    <span>الصفحة الرئيسية</span>
                    <i class="fas  fa-calendar"></i>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <ul class="navbar-nav ml-auto" style="margin-right: 30em">

                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Arams Property  Mangement System</span>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">





                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">تعديل تفاصيل العقار :</h1>

                </div>



                <div class="row" style="width: 165em">

                    <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">



                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">



                                <h6 class="m-0 font-weight-bold text-primary">عقار للبيع</h6>
                                <div class="dropdown no-arrow">

                                    @if (Session::has('success_edit_property'))

                                        <small style="margin-right: 18em; font-size: 1.6em;">{{ session::get('success_edit_property') }}</small>
                                    @endif

                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                         aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header"> </div>
                                        <a class="dropdown-item" href="#">حذف </a>
                                        <!-- <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem; height: 225px;"
                                             src="{{asset('Arams\images\Property_Form\\'.$property->photo)}}"  alt="...">
                                    </div>
                                </div>
                                <div class="mt-4 text-center small">
                                    <div class="search-form-content">


                                        <form action="{{route('property_update')}}" method="post" class="filter-form" enctype="multipart/form-data">

                                            @csrf
                                            <label style="margin-right: 0.6em;"> نوع العقد</label>
                                            <select name="contract_type" class="sm-width">
                                                <option value="null" disabled selected >{{$property->contract_type}}</option>
                                                <option value="للإيجار" >للإيجار</option>
                                                <option value="للبيع">للبيع</option>

                                            </select>

                                            <label style="margin-right: 0.6em;"> نوع العقار</label>
                                            <select name="property_type" class="sm-width">
                                                <option value="null" disabled selected>{{$property->property_type}}</option>
                                                <option value="لا شيء">لا شيء</option>
                                                <option value="شقة">شقة</option>
                                                <option value="عمارة">عمارة</option>
                                                <option value="مصنع">مصنع</option>
                                                <option value="مستودع">مستودع</option>
                                                <option value="فيلا">فيلا</option>
                                                <option value="برج">برج</option>
                                                <option value="قصر">قصر</option>
                                                <option value="أرض">أرض</option>
                                                <option value="استراحة">استراحة</option>
                                                <option value="مزرعة">مزرعة</option>
                                                <option value="أخرى">أخرى</option>
                                            </select>

                                             <label style="margin-right: 1.8em;"> الدولة </label>


                                                <select  class="sm-width" id="ajax_country" name="country_id"  >

                                                    <option value="null" disabled selected>{{$property->country}}</option>
                                                    @foreach($Country as $country)
                                                        <option  value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach

                                            </select>


                                            <label style="margin-right: 3em;"> المدينة</label>
                                            <select class="sm-width" id="ajax_city" name="city_id">


                                                    <option value="null" disabled selected>{{$property->city}}</option>


                                            </select>


                                            <label style="margin-right: 1.2em;">  المنطقة</label>

                                            <select class="sm-width" name="area_id" id="ajax_area">

                                                <option value="null"  disabled selected>{{$property->area}}</option>

                                            </select>
                                            <hr>


                                            <label style="margin-right: 1.5em;">العملة</label>
                                            <select name="currency" class="sm-width">
                                                <option value="null" disabled selected>{{$property->currency}}</option>
                                                <option value="USD" >دولار أمريكي</option>
                                                <option value="SYR">ليرة سورية</option>
                                            </select>



                                            <label>غرف النوم</label>
                                            <select name="number_of_bedroom" class="sm-width">
                                                <option value="null" disabled selected>{{$property->number_of_bedroom}}</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>

                                            </select>


                                            <label>دورات المياه</label>
                                            <select  name="number_of_bathroom" class="sm-width">
                                                <option value="null" disabled selected>{{$property->number_of_bathroom}}</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>

                                            </select>


                                            <label>موقف السيارات</label>
                                            <select name="Parking" class="sm-width">
                                                <option value="null" disabled selected>{{$property->Parking}}</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>

                                            </select>

                                            <hr>

                                            <label style="margin-right: -0.8em;">المساحة</label>
                                               <input type="number" value="{{$property->space}}" name="space">

                                            <label style="margin-right: 1em;">السعر</label>
                                            <input type="number" value="{{$property->price}}" name="price">

                                            <label style="margin-right: 1em;">عنوان العقار</label>
                                            <input name="address" value="{{$property->address}}">

                                            <label style="margin-right: 1em;">تغيير الصورة</label>

                                                <input type="file" name="photo" id="image-input" style="border: 1.5px solid black !important;">



                                            <input hidden name="property_id" value="{{$property->id}}">
                                            <hr>
                                            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                حفظ التغييرات
                                                <i class="fas fa-download fa-sm text-white-50"></i>
                                            </button>

                                        </form>

                                    </div>


                                    <hr>


                                </div>



                            </div>


                        </div>
                    </div>


                </div>


            </div>

            <footer class="sticky-footer bg-white" style="border: 1.5px solid #dee2e6 !important;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span >Copyright &copy; AramsTeam</span>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->

            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

        </div>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <script src="{{asset('Arams/Administrator/vendor/jquery/jquery.min.js')}}"></script>@notifyJs


        <script src="{{asset('Arams/Administrator/vendor/chart.js/Chart.min.js')}}"></script>@notifyJs

        <script src="{{asset('Arams/Administrator/js/demo/chart-area-demo.js')}}"></script>@notifyJs
        <script src="{{asset('Arams/Administrator/js/demo/chart-pie-demo.js')}}"></script>@notifyJs

<script type="text/javascript" src="http://code.jquery.com/jquery-3.6.0.min.js"></script>@notifyJs
<script >
    $(document).ready(function () {
        $('#ajax_country').on('change', function () {

            let id_country = $(this).val();
            $('#ajax_city').empty();
            $('#ajax_city').append(`<option value="0" disabled selected>Processing...</option>`);
            $.ajax({
                type: 'get',
                url: 'Ajax-city-edit-property/' + id_country,
                success: function (response) {
                    console.log("areassssss ",response);
                    $('#ajax_city').empty();
                    $('#ajax_city').append(`<option value="null" disabled selected>اختر مدينة</option>`);
                    response.forEach(element => {
                        $('#ajax_city').append(`<option value="${element['id']}">${element['name']}</option>`);
                    });
                }
            });

            $('#ajax_city').on('change', function () {

                let id = $(this).val();
                $('#ajax_area').empty();
                $('#ajax_area').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                    type: 'get',
                    url: 'Ajax-area-edit-property/' + id,
                    success: function (response) {
                        console.log("areassssss ",response);
                        $('#ajax_area').empty();
                        $('#ajax_area').append(`<option value="null" disabled selected>اختر منطقة</option>`);
                        response.forEach(element => {
                            $('#ajax_area').append(`<option value="${element['name']}">${element['name']}</option>`);
                        });
                    }
                });
            });
        });

    });
</script>

<x:notify-messages />
</body>

</html>
