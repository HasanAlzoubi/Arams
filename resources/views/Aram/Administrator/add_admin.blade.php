<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Admin</title>


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
                <i class="fas fa-users-cog"></i>
            </div>
            <div class="sidebar-brand-text mx-3"> المدير </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- <img class="img-profile rounded-circle"
                    src="" alt="">       -->
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




        <hr class="sidebar-divider">



            <li class="nav-item">
                <a class="nav-link" href="{{asset(route('manger_profile'))}}">
                    <span>الصفحة الرئيسية</span>
                    <i class="fas  fa-calendar"></i>
                </a>
            </li>





            <hr class="sidebar-divider d-none d-md-block">


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">


                <section class="vh-100" style="background-color: #eee;">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-12 col-xl-11">
                                <div class="card text-black" style="border-radius: 25px;">

                                    <div class="card-body p-md-5" style="padding: 1rem !important;">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">اضافة مسؤول </p>

                                          <form class="mx-1 mx-md-4" method="post" action="{{asset(route('add_admins'))}}" enctype="multipart/form-data">

                                              @csrf
                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-user fa-lg me-3 fa-fw" style="margin-top: 25px;"></i>
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label" for="Name">اسم المسؤول </label>

                                                            <input type="text" name="name" id="Name" class="form-control" required />
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-envelope fa-lg me-3 fa-fw" style="margin-top: 25px;"></i>
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label" for="Email">البريد الالكترزني </label>

                                                            <input class="form-control" type="email" name="email" id="Email"  required />
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-lock fa-lg me-3 fa-fw" style="margin-top: 25px;"></i>
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label" for="pass-key">كلمة المرور</label>

                                                            <input type="password" name="password" id="pass-key" class="form-control" required />
                                                        </div>

                                                        <div class="input-group-append">
                                                            <span class="input-group-text" onclick="password_show_hide();" style="margin-top: 2em;">
                                                               <i class="fas fa-eye" id="show_eye"></i>
                                                               <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                              <div class="d-flex flex-row align-items-center mb-4">
                                                  <i class="fas fa-mobile fa-lg me-3 fa-fw" style="margin-top: 25px;"></i>
                                                  <div class="form-outline flex-fill mb-0">
                                                      <label class="form-label" for="Mobile"> رقم الهاتف </label>

                                                      <input class="form-control" type="number" name="mobile" id="Mobile"  required />
                                                  </div>
                                              </div>

                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <i class="fas fa-key fa-lg me-3 fa-fw" style="margin-top: 25px;"></i>
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label" for="photo">اضافة صورة  </label>
                                                            <input type="file" id="photo" name="photo" class="form-control"  />
                                                        </div>
                                                    </div>


                                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                        <button type="submit" class="btn btn-primary btn-lg">اضافة</button>
                                                    </div>

                                       </form>

                                            </div>
                                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                                <img src="{{asset('Arams\images\Logo\user.png')}}" class="img-fluid" alt="Sample image">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



            <!-- End of Content Wrapper -->



                <footer class="sticky-footer bg-white" style=" border: 1.5px solid #dee2e6 !important;
                     margin-top:7em;   width: 72em">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; AramsTeam</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->



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


</div>
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.6.0.min.js"></script>@notifyJs
<script>
    function password_show_hide() {
        var x = document.getElementById("pass-key");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
</script>

{{--<script>--}}

{{--    $(document).on('click','#save_form',function (e) {--}}
{{--e.preventDefault();--}}
{{--        var name=document.getElementById('Admin_name');--}}
{{--        var email=document.getElementById('Admin_email');--}}
{{--        var password=document.getElementById('pass-key');--}}



{{--        if (name.value==''){--}}

{{--            document.getElementById('name_error').innerText='الحقل مطلوب';--}}

{{--        }--}}
{{--        if (email.value==''){--}}
{{--            document.getElementById('email_error').innerText='الحقل مطلوب';--}}

{{--        }--}}
{{--        if (password.value==''){--}}
{{--            document.getElementById('password_error').innerText='الحقل مطلوب';--}}

{{--        }--}}

{{--        $.ajax({--}}
{{--            type: 'post',--}}
{{--            url:'{{route('add_admins')}}',--}}
{{--            data:{--}}
{{--              '_token':"{{csrf_token()}}",--}}
{{--              'name':$("input[name='name']").val(),--}}
{{--              'email':$("input[name='email']").val(),--}}
{{--              'password':$("input[name='password']").val(),--}}
{{--            },--}}

{{--            success: function (response) {--}}
{{--                console.log('corect',response)--}}

{{--            },--}}

{{--            error: function (response) {--}}
{{--                console.log('errore')--}}

{{--            }--}}
{{--        });--}}

{{--    });--}}




{{--</script>--}}
<x:notify-messages />

</body>

</html>
