
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>

    <link href="{{asset('Arams\Administrator\vendor\fontawesome-free\css\all.min.css')}}" rel="stylesheet" type="text/css">@notifyCss

    <link href="{{asset('Arams\Administrator\css\sb-admin-2.css')}}" rel="stylesheet">@notifyCss
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>@notifyJs

</head>


<body >
<div id="content-wrapper" class="d-flex flex-column">


    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">

                        <div class="card-body p-md-5" style="padding: 1rem !important;">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"> تسجيل دخول المدير </p>

                                    <form class="mx-1 mx-md-4" method="post" action="{{asset(route('Administrator_set_login'))}}" >

                                        @csrf


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw" style="margin-top: 25px;"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="Email">البريد الالكتروني </label>

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





                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">تسجيل الدخول</button>
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

</div>


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
<x:notify-messages />
</body>
</html>

