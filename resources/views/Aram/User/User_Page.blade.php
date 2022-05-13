<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{ asset('Arams\css\bootstrap.min.css') }}">@notifyCss
    <link rel="stylesheet" href="{{ asset('Arams\css\style.css') }}">@notifyCss
    <link rel="stylesheet" href="{{ asset('Arams\css\profile.css') }}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\socialButtons.css')}}">@notifyCss
    <link rel="stylesheet" href="{{ asset('Arams\fontello\fontello-embedded.css') }}">@notifyCss
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>@notifyCss

    <title>User</title>
</head>
<body background="{{ asset('Arams\images\Property\hero_bg_1.jpg') }}">
<div>

    <header class="header-section">

        <div class="header-right">

        </div>



        <a href="" class="site-logo"  style="margin-top: -47px">
            <img src="{{asset('Arams\images\Logo\REL-design2.png')}}" style="height: 100px">
        </a>


        <!-- </div> -->

        <nav class="header-nav">

            <ul class="main-menu">
                <li><a href="{{url('aram/')}}" class="">الصفحة الرئيسية </a></li>

                <!-- <li><a href="#">Buy</a></li> -->

                <li><a href="#">صفحاتنا </a>
                    <ul class="sub-menu">
                        <li><a href="about-us.html">من  نحن </a></li>
                        <li><a href="search-result.html">آخر ما تم البحث عنه </a></li>
                        <li><a href="single-property.html">الموظفون</a></li>
                    </ul>
                </li>
                <li><a href="news.html">الاستثمار</a></li>

                <li><a href="about-us.html">الأخبار العقارية</a></li>

                <li><a href="contact.html">تواصل معنا </a><li>
                <li><a href="" class="active"> الملف الشخصي </a><li>



            </ul>



        </nav>



    </header>

</div>

    <div  class="container mt-4em">
        <div class="row">

            <!-- Gallery -->
            <section id="property"  class="col-sm-12 bg_gallery aq-page-container">
                <div class="containerx aq-page-container-area">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="region region-content">

                                <div class="container-fluid user-profile-page no-padding">


                                    <div  class="col-sm-9 left-side">
                                        <ul class="nav nav-tabs">
                                            <li id="profile_list" ><a id="profile1" class="user-edit-tab" data-toggle="tab" >الملف الشخصي</a></li>
                                            <li id="profile_edit_list" ><a id="profile2"  class="user-edit-tab" data-toggle="tab" >تعديل الملف الشخصى</a></li>
                                            <li id="profile_edit_password" ><a id="profile3"  class="user-edit-tab" data-toggle="tab" >تعديل كلمة المرور</a></li>
                                        </ul>

                                        <div id="User_Page"  class="tab-content">
                                            <div class="tab-pane active" >
                                                <hr>

                                                <div class="form-group">

                                                    <div class="col-xs-6" style="margin-top: 15px">
                                                        <label><h4>البريد الإلكتروني</h4></label>
                                                        <data  class="form-control" >{{$user->email}}</data>
                                                    </div>
                                                </div>

                                                    <div class="form-group">
                                                        <div class="col-xs-6">
                                                            <label><h4>اسم المستخدم</h4></label>
                                                            <data  class="form-control" >{{$user->name}}</data>
                                                        </div>
                                                    </div>


                                                <div class="form-group">
                                                    <div class="col-xs-6">
                                                        <label><h4>‏اسم الصفحة الشخصية ‏</h4></label>
                                                        <data  class="form-control" >{{$user->profile_name}}</data>
                                                    </div>
                                                </div>

                                                    <div class="form-group">
                                                        <div class="col-xs-6">
                                                            <label><h4>‏العنوان ‏</h4></label>
                                                            <data  class="form-control" >{{$user->address}}</data>
                                                        </div>
                                                    </div>


                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-6">
                                                            <label><h4>عرض رقم الجوال وبيانات الاتصال خاصتي </h4></label>

                                                                <data  class="form-control" >{{$user->can_view}}</data>

                                                        </div>
                                                    </div>

                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label><h4>نوع ملفك الشخصي</h4></label>

                                                    <data  class="form-control" >{{$user->profile_type}}</data>

                                                </div>

                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <br>
                                                            <a  id="edit22" class="btn btn-md btn-success">تعديل معلومات المستخدم </a>

                                                            <a  id="edit_password1" class="btn btn-md btn-success">تعديل كلمة المرور</a>
                                                        </div>


                                                    </div>



                                                <hr>

                                            </div><!--/tab-pane-->
                                            <div class="tab-pane" id="messages">
                                                asdasdas
                                            </div><!--/tab-pane-->
                                            <div class="tab-pane" id="settings">


                                                <hr>
                                                Hellooo
                                            </div>
                                        </div>


                                        <div id="User_Update"  class="tab-content">
                                            <div class="tab-pane active" id="home">
                                                <hr>
                                                <form method="post" action="{{url('aram/User/update/'.$user->id)}}" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">

                                                        <div class="col-xs-6">
                                                            <label><h4>البريد الإلكتروني</h4></label>
                                                            <input  class="form-control" type="email"  name="email" value="{{$user->email}}">
                                                            @error('email')
                                                            <small class="form-text text-danger" >{{$message}}</small>
                                                            @enderror
                                                        </div>

                                                    </div>





                                                    <div class="form-group">
                                                        <div class="col-xs-6">
                                                            <label><h4>اسم  المستخدم ‏</h4></label>
                                                            <input type="text" class="form-control"  name="username" value="{{$user->name}}">
                                                            @error('username')
                                                            <small class="form-text text-danger" >{{$message}}</small>
                                                            @enderror
                                                        </div>

                                                    </div>



                                                    <div class="form-group">
                                                        <div class="col-xs-6">
                                                            <label><h4> العنوان </h4></label>
                                                            <input name="address"  class="form-control">
                                                            @error('address')
                                                            <small class="form-text text-danger" >{{$message}}</small>
                                                            @enderror
                                                        </div>

                                                    </div>



                                                    <div class="form-group">
                                                        <div class="col-xs-6">
                                                            <label><h4>اختيار أو تعديل صورة ‏</h4></label>
                                                            <input type="file" class="form-control" name="photo">
                                                        </div>
                                                    </div>




                                                    <div class="form-group">
                                                        <div class="col-xs-6">
                                                            <label><h4>نوع ملفك الشخصي</h4></label>
                                                            <select name="profile_type" class="form-control">
                                                                <option value="لا">مهتم وباحث عن عقارات</option>
                                                            </select>
                                                            @error('profile_type')
                                                            <small class="form-text text-danger" >{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                    </div>





                                                    <div class="form-group">
                                                        <div class="col-xs-6">
                                                            <label><h4>‏اسم الصفحة الشخصية ‏</h4></label>
                                                            <input type="text" value="" class="form-control" name="page_name">
                                                            @error('page_name')
                                                            <small class="form-text text-danger" >{{$message}}</small>
                                                            @enderror
                                                        </div>

                                                    </div>





                                                    <div class="form-group">
                                                        <div class="col-xs-6" style="margin-left: 309px">
                                                            <label><h4>  عرض رقم الجوال وبيانات الاتصال خاصتي</h4></label>
                                                            <select name="can_view" value="" class="form-control">
                                                                <option value="no">لا</option>
                                                                <option value="yes">نعم</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <br>
                                                            <button class="btn btn-block btn-success"> تحديث</button>
                                                        </div>
                                                    </div>



                                                </form>


                                                <hr>

                                            </div><!--/tab-pane-->
                                            <div class="tab-pane" id="messages">
                                                asdasdas
                                            </div><!--/tab-pane-->
                                            <div class="tab-pane" id="settings">


                                                <hr>
                                                Hellooo
                                            </div>
                                        </div>

                                        <div id="User_password_Update"   class="tab-content">

                                            <div class="tab-pane active" id="home">
                                                <hr>
                                                @if(Session::has('correct_password'))
                                                    <div  style="color:#3e8f3e; font-size:large ;text-align: center"   >
                                                        {{Session::get('correct_password')}}
                                                    </div>
                                                @endif
                                                <form method="post" action="{{url('aram/User/Update/'.$user->id)}}" enctype="multipart/form-data">
                                                    @csrf


                                                    <div class="form-group">
                                                        <div class="col-xs-6">
                                                            <label><h4>‏كلمة المرور الجديدة ‏</h4></label>
                                                            <input type="text" class="form-control" name="new_password">

                                                        </div>

                                                    </div>



                                                    <div class="form-group">
                                                        <div class="col-xs-6">

                                                            <label><h4>‏كلمة المرور الحالية ‏</h4></label>
                                                            <input type="text" class="form-control" name="old_password">
                                                            @if(Session::has('error_password'))
                                                                <div  style="color:red; font-size:small ;text-align: right"   >
                                                                    {{Session::get('error_password')}}
                                                                </div>
                                                            @endif
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <br>
                                                            <button class="btn btn-block btn-success"> تحديث</button>
                                                        </div>
                                                    </div>



                                                </form>


                                                <hr>

                                            </div><!--/tab-pane-->
                                            <div class="tab-pane" id="messages">
                                                asdasdas
                                            </div><!--/tab-pane-->
                                            <div class="tab-pane" id="settings">


                                                <hr>
                                                Hellooo
                                            </div>
                                        </div>


                                    </div>




                                    <div class="col-sm-3 right-side"><!--left col-->
                                        <div class="text-center">
                                            @if($user->photo!=null)
                                            <img src="{{asset('Arams\images\Person\\'.$user->photo)}}" class="avatar img-circle img-thumbnail" >
                                            @else
                                                <img src="{{asset('Arams\images\Logo\logo_user.png')}}" class="avatar img-circle img-thumbnail" >
                                            @endif
                                            <h4 class="user-name">{{$user->name}}</h4>
                                            <span class="badge interested">مهتم وباحث عن العقارات</span>
                                            <div class="user-membership">
                                                <button type="button" class="btn">عضوية اساسية</button>

                                            </div>


                                        </div>
                                        <br>
                                        <div class="panel panel-default">
                                            <ul class="list-group">
                                                <li class="list-group-item text-right active"><a href=""><i class="fa fa-user" aria-hidden="true"></i>الملف الشخصي</a></li>
                                                <li class="list-group-item text-right"><a href="{{asset(url('aram/User/my_propertyes/'.$user->id))}}"><i class="fa fa-home" aria-hidden="true"></i>عقاراتي</a></li>
                                                <li class="list-group-item text-right"><a href="#"><i class="fa fa-star" aria-hidden="true"></i>المفضلة</a></li>
                                                <!--<li class="list-group-item text-right"><a href="#"><i class="fa fa-bell" aria-hidden="true"></i>التنبيهات</a></li>-->

                                                <li class="list-group-item text-right"><a href="{{route('user.logout')}}"><i class="fa fa-power-off" aria-hidden="true"></i>تسجيل الخروج</a></li>
                                                <li class="list-group-item text-right"> <a class="nav-link dropdown-toggle" id="notification_icon" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                        <i class="fas fa-bell fa-fw" ></i>الاشعارات
                                                        <span class="badge badge-danger badge-counter" id="notification_number" >{{sizeof($notification->where('view','0'))}}</span>
                                                    </a>

                                                    <input id="notify_number" value="{{sizeof($notification->where('view','0'))}}" hidden>

                                                    <!-- Dropdown - Alerts -->
                                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                         aria-labelledby="alertsDropdown" id="notification_list">


                                                        @if(sizeof($notification)!=0)
                                                            @foreach($notification as $notify)
                                                                <a class="dropdown-item d-flex align-items-center" style="border: 1.5px solid #dee2e6 !important;">

                                                                    <div>
                                                                        <div class="small text-gray-500">{{$notify->created_at}}</div>
                                                                        <span class="font-weight-bold">{{$notify->message}} </span>

                                                                    </div>
                                                                    <div class="mr-3">
                                                                        <div class="icon-circle bg-success" style="border-radius: 50%">
                                                                            <i class="fas fa- text-white" > التفاصيل </i>
                                                                        </div>
                                                                    </div>
                                                                </a>

                                                            @endforeach
                                                        @endif


                                                        <a class="dropdown-item text-center small text-gray-500" href="#">المزيد</a>
                                                    </div>

                                                </li>
                                            </ul>
                                        </div>
                                    </div><!--/col-3-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>


<br><br><br><br><br>


<footer class="footer-section" style="padding-top: 43px">
    <div class="container">

        <div class="wrapper">
            <div class="icon facebook">
                <div class="tooltip">
                    Facebook
                </div>
                <span><a href="https://www.facebook.com/amal.assaf.1029"><i class="fab icon-facebook"></i></a></span>
            </div>

            <div class="icon twitter">
                <div class="tooltip">
                    Twitter
                </div>
                <span><i class="fab icon-twitter"></i></span>
            </div>
            <div class="icon instagram">
                <div class="tooltip">
                    Gmail
                </div>
                <span><a href="https://assafamal781@gmail.com"><i class="fab icon-gmail"></i></a></span>
            </div>
            <div class="icon github">
                <div class="tooltip">
                    linkedin
                </div>
                <span><a href="https://linkedin.com/in/hasan-alzoubi-778b291b4.com"><i class="fab icon-linkedin"></i></a></span>
            </div>
            <div class="icon youtube">
                <div class="tooltip">
                    whatsapp
                </div>
                <span><a href="https://api.whatsapp.com/?send=00963959543924"><i class="fab icon-whatsapp"></i></a></span>
            </div>
        </div>

        <div class="row text-white" style="margin-left: -35px;margin-right: -60px">
            <div class="col-lg-4" style="margin-top: -60px">
                <div class="footer-widger">
                    <div class="about-widget" style="margin-right: -40px">
                        <div class="aw-text">
                            <img src="{{asset('Arams\images\Logo\REL-design2.png')}}" style="margin-right: 104px">

                            <FONT FACE="Arial ,Tahoma" size="4" color="#FFFFFF">
                                <marquee direction="up" width="250" height="117" scrollamount="3">
                                    <CENTER>يمكنك الآن الاطلاع على أحدث الأخبار في مجال العقارات من خلال منصتنا .. فقط تواصل معنا وتابعنا عبر الروابط السابقة</CENTER>

                                </marquee>
                            </FONT>                            <a href="#" class="site-btn">نحن هنا </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer-widger">
                    <h2>عن المنصة</h2>
                    <ul>
                        <li><a href="#">من  نحن </a></li>
                        <li><a href="#">خدماتنا</a></li>
                        <li><a href="#">المسؤولون</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer-widger">
                    <h2>للبيع</h2>
                    <ul>
                        <li><a href="#">اشتري الآن </a></li>
                        <li><a href="#">العقارات</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer-widger">
                    <h2>الاإجارات</h2>
                    <ul>
                        <li><a href="#">استأجر بأقل كلفة</a></li>
                        <li><a href="#">ماذا تحتاج؟؟</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer-widger">
                    <h2>قيمنا </h2>
                    <ul>

                        <li ><a href="#">تقيمات سابقة </a></li>
                        <li><a href="#">ملاحظات</a></li>
                        <li><a href="#">زبون دائم</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>


<script type="text/javascript" src="http://code.jquery.com/jquery-3.6.0.min.js"></script>@notifyJs

<script>


    var notify_number = document.getElementById('notify_number');

    if(notify_number.value==="0") {
        document.getElementById('notification_number').className = 'hidden';
    }

</script>
<script>

    var x = document.getElementById("notification_icon");

    var y = document.getElementById("message_icon");

    var notification_list = document.getElementById('notification_list');

    var message_list = document.getElementById('message_list');
    var notification_who_whatched = document.getElementById('notification_number');


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
            url:'{{route('view_user_notification')}}',
            data:{
                '_token':"{{csrf_token()}}",
                'view':'1'
            },

            success: function (response) {
                console.log('corect',response)

            },
            //
            // error: function (response) {
            //     console.log('errore')
            //
            // }
        });

    });


    y.addEventListener('click',()=>{

        if ( message_list.className ==="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in") {

            message_list.className = "dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in show";

        }

        else  {

            message_list.className = "dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in";


        }

    })


</script>



<script>

    var x = document.getElementById("edit22");
    var x2 = document.getElementById("edit_password1");

    var y = document.getElementById("profile1");
    var z = document.getElementById("profile2");
    var p = document.getElementById("profile3");

    var user_page = document.getElementById('User_Page');
    var user_update = document.getElementById('User_Update');
    var edit_password = document.getElementById('User_password_Update');

    var profile_List = document.getElementById('profile_list');
    var profile_edit_List = document.getElementById('profile_edit_list');
    var profile_edit_password = document.getElementById('profile_edit_password');

    user_page.style.display = "block";
    user_update.style.display = "none";
    edit_password.style.display = "none";

    profile_List.className="active";
    profile_edit_List.className="";
    profile_edit_password.className="";


    x.addEventListener('click',()=>{

        if ( user_update.style.display === "none") {
            profile_edit_List.className="active";
            profile_List.className="";
            profile_edit_password.className="";

            user_update.style.display = "block";
            user_page.style.display = "none";
            edit_password.style.display = "none";
        }

    });

    x2.addEventListener('click',()=>{

        if ( edit_password.style.display === "none") {

            profile_edit_password.className="active";
            profile_edit_List.className="";
            profile_List.className="";

            edit_password.style.display = "block";
            user_update.style.display = "none";
            user_page.style.display = "none";



        }

    });

    z.addEventListener('click',()=>{

        if ( user_update.style.display === "none") {
            profile_edit_List.className="active";
            profile_List.className="";
            profile_edit_password.className="";

            user_update.style.display = "block";
            user_page.style.display = "none";
            edit_password.style.display = "none";

        }

    });

    y.addEventListener('click',()=>{

        if ( user_page.style.display === "none") {
            profile_List.className="active";
            profile_edit_List.className="";
            profile_edit_password.className="";

            user_page.style.display = "block";
            user_update.style.display = "none";
            edit_password.style.display = "none";




        }
    });

        p.addEventListener('click',()=>{

            if ( edit_password.style.display === "none") {

                profile_edit_password.className="active";
                profile_edit_List.className="";
                profile_List.className="";

                edit_password.style.display = "block";
                user_update.style.display = "none";
                user_page.style.display = "none";



            }


    });


</script>
<x:notify-messages />

</body>
</html>
