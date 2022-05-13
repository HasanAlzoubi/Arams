
<!DOCTYPE html>
<html lang="ar" dir="rtl" xmlns:x="">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('Arams\css\login.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\bootstrap.min.css')}}">@notifyCss
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>@notifyJs

</head>
<body>
<div class="bg-img">
    <div class="content">
        <header>تسجيل الدخول </header>
        <form method="POST" action="{{route('Set.User.Login')}}">
            @csrf
            <div class="field">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                </div>
                <input  class="txt" type="email" name="email" required placeholder=" البريد الالكتروني">
                @error('email')
                <small class="form-text text-danger" >{{$message}}</small>
                @enderror

            </div>

            <div class="field space">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                </div>
                <input  class="txt" type="password" name="password" id="pass-key" required placeholder="كلمة المرور">
                @error('password')
                <small class="form-text text-danger" >{{$message}}</small>
                @enderror


                <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label style="color: beige" class="form-check-label" for="remember">
                            {{ __('تذكرني Me') }}
                        </label>
                    </div>
                </div>
            </div>



            <div class="field" >
                <input type="submit" value="دخول">
            </div>


        </form>

        <div class="signup">
            <a href="{{asset(route('Get.User.Register'))}}">إنشاء حساب جديد</a>
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
<x:notify-messages />
</body>
</html>

