<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('Arams\css\bootstrap.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\font-awesome.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\fontawesome.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\style.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\animate.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-ie7.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-ie7-codes.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-embedded.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-codes.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\animation.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\bootstrap-datepicker.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\style0.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\socialButtons.css')}}">@notifyCss

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">@notifyCss

    <title>Property Detalis</title>


    <script language="JavaScript1.2">
        function reapply(){
            setTimeout("slideit()",2000);
            return true;
        }
        window.onerror=reapply;
    </script>
    <script language="JavaScript1.1">

    </script>



</head>
<style media="screen">
    h3 {
        margin-left: 30%;
    }
    h2{
        margin-left:60%;
    }
    label {
        position: center;
        margin-bottom: 10%;
        margin-left: 80%;
    }
    p{

        margin-left: 80%;
    }
</style>
<body  class="overlay" onLoad="slideit()">


<header class="header-section">

    <div class="header-right">

        @if (\Illuminate\Support\Facades\Auth::guard('user')->check())

            <li><a href="{{asset(route('User.profile'))}}" class="register"> الملف الشخصي </a></li>
        @else
            <a href="{{asset(route('Get.User.Login'))}}" class="register">تسجيل الدخول </a>
        @endif


    </div>



    <a href="" class="site-logo"  style="margin-top: -47px">
        <img src="{{asset('Arams\images\Logo\REL-design2.png')}}">
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



        </ul>



    </nav>



</header>


<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <div class="slide-one-item home-slider owl-carousel">
                        <div>

                            <a href="javascript:slidelink()" onMouseover="window.status=' اضغط على الصورة ';return true" onMouseout="window.status=''">
                                <img src="{{asset('Arams\images\Property_Form\\'.$property->photo)}}" name="slide" border=0 style="filter:blendTrans(duration=3)
                                ;border: 1px solid #dee2e6 !important;margin-left: 1px;width: 99.7%;height: 440px;width: 718px"></a>

                            <script>


                                var number_of_images=3;

                                var speed =5;

                                var step=1;
                                var whichimage=1;
                                function slideit(){
                                    if (!document.images)
                                        return;
                                    if (document.all)
                                        slide.filters.blendTrans.apply();
                                    document.images.slide.src=eval("image"+step+".src");
                                    if (document.all)
                                        slide.filters.blendTrans.play();
                                    whichimage=step;
                                    if (step<number_of_images)
                                        step++;
                                    else
                                        step=1;
                                    if (document.all)
                                        setTimeout("slideit()",speed*1000+3000);
                                    else
                                        setTimeout("slideit()",speed*1000);
                                }
                                function slidelink(){
                                    if (whichimage==1)
                                        window.location="8c2725b3c445efbe8a616550dad9f7eb.jpg"; // غير للذي يناسب الصورة الأولى
                                    else if (whichimage==2)
                                        window.location="902b913d67c52474b0fd1d4afa593e56.jpg"; // غير للذي يناسب الصورة الثانية
                                    else if (whichimage==3)
                                        window.location="5a4334faa516afe226735ed949f1341c.jpg"; // غير للذي يناسب الصورة الثالثة
                                }

                            </script>



                        </div>

                    </div>
                </div>
                <div class="bg-white property-body border-bottom border-left border-right" style=" border: 1px solid #dee2e6 !important">

                    <div class="row mb-5" style="    margin-left: 340px;}">
                            <strong class="text-dark h1 mb-3"> {{$property->description}}</strong>


                    </div>
                    <div class="row mb-5" style="    margin-left: 340px;}">
                        <span class="property-location d-block mb-0" style="margin-top: -50px"><span class="property-icon icon-room"></span> {{$property->country}} - {{$property->city}} - {{$property->area}} </span>


                    </div>

                    <div class="row mb-5" style="margin-top: -30px">
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3" style="margin-left: 10px;">{{$property->price}} {{$property->currency}}</strong>
                        </div>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right" style="margin-right: 20px;">
                                <li>
                                    <span class="fa fa-bed" style="zoom: 2"></span>
                                    <span class="property-specs-number" style="margin-left: 9px;">{{$property->number_of_bedroom}}</span>

                                </li>
                                <li>
                                    <span class="fa fa-bath" style="zoom: 2"></span>
                                    <span class="property-specs-number" style="margin-left: 11px;">{{$property->number_of_bathroom}}</span>

                                </li>
                                <li>
                                    <span class="fa fa-cab" style="zoom: 2"></span>
                                    <span class="property-specs-number" >{{$property->Parking}}</span>

                                </li>
                            </ul>
                        </div>
                    </div>




                    <h3 style="text-align: right">تفاصيل العقار</h3>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <i class="fa fa-home"></i>
                            <span class="d-inline-block text-black mb-0 caption-text">نوع العقار</span>
                            <strong class="d-block"> {{$property->property_type}} </strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <i class="fa fa-file-text"></i>
                            <span class="d-inline-block text-black mb-0 caption-text">نوع العقد  </span>
                            <strong class="d-block">{{$property->contract_type}}</strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <i class="fa fa-area-chart"></i>
                            <span class="d-inline-block text-black mb-0 caption-text"> المساحة </span>
                            <strong class="d-block">{{$property->space}}</strong>
                        </div>
                    </div>



                    <h3 style="text-align: right">مميزات العقار</h3>
                    <div class="row mb-4">

                        @if($property->swimming !=null)
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3" >
                            <i class="fas fa-swimming-pool"></i>
                            <span class="d-inline-block text-black mb-0 caption-text"> مسبح  </span>
                            <strong class="d-block"><i class="fa fa-check"></i>  </strong>
                        </div>
                        @endif

                        @if($property->basement !=null)
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3"  >
                            <i class="fa fa-home"></i>
                            <span class="d-inline-block text-black mb-0 caption-text">قبو </span>
                            <strong class="d-block"><i class="fa fa-check"></i>  </strong>
                        </div>
                        @endif


                        @if($property->duplex !=null)
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3" >
                            <img src="{{asset('Arams\images\Logo\duplex.png')}}" style="height: 22px;width: 17px ;margin-top: -9px;">
                            <span class="d-inline-block text-black mb-0 caption-text">دوبلكس </span>
                            <strong class="d-block"><i class="fa fa-check"></i>  </strong>
                        </div>
                        @endif

                        @if($property->condition !=null)
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3"  >
                            <img src="{{asset('Arams\images\Logo\condition.png')}}" style="height: 30px;width: 17px">
                            <span class="d-inline-block text-black mb-0 caption-text"> تكييف</span>
                            <strong class="d-block"><i class="fa fa-check"></i>  </strong>
                        </div>
                        @endif

                        @if($property->appendix !=null)
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3" >
                            <img src="{{asset('Arams\images\Logo\ملحق.png')}}" style="height: 30px;width: 17px ;margin-top: -9px;">
                            <span class="d-inline-block text-black mb-0 caption-text"> ملحق</span>
                            <strong class="d-block"><i class="fa fa-check"></i>  </strong>
                        </div>
                        @endif

                        @if($property->children_play_area !=null)
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                            <i class="fas fa-child"></i>
                            <span class="d-inline-block text-black mb-0 caption-text"> منطقة لعب </span>
                            <strong class="d-block"><i class="fa fa-check"></i>  </strong>
                        </div>
                        @endif

                        @if($property->elevator !=null)
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3" >
                            <img src="{{asset('Arams\images\Logo\evaltor.png')}}" style="height: 22px;width: 17px">
                            <span class="d-inline-block text-black mb-0 caption-text"> مصعد</span>
                            <strong class="d-block"><i class="fa fa-check"></i>  </strong>
                        </div>
                        @endif

                        @if($property->club !=null)
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3" >
                            <i class=" fas fa-dumbbell"></i>
                            <span class="d-inline-block text-black mb-0 caption-text"> نادي</span>
                            <strong class="d-block"><i class="fa fa-check"></i>  </strong>
                        </div>
                        @endif

                        @if($property->cinema !=null)
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3" >
                            <i class="fa fa-film"></i>
                            <span class="d-inline-block text-black mb-0 caption-text">سينما</span>
                            <strong class="d-block"><i class="fa fa-check"></i>  </strong>
                        </div>
                        @endif

                        @if($property->sauna !=null)
                        <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3" >
                            <img src="{{asset('Arams\images\Logo\sauna.png')}}" style="height: 22px;width: 17px;margin-top: -9px;">
                            <span class="d-inline-block text-black mb-0 caption-text">ساونا</span>
                            <strong class="d-block"><i class="fa fa-check"></i>  </strong>
                        </div>
                        @endif

                    </div>




                </div>
            </div>
            <div class="col-lg-4">

                <div class="bg-white widget border rounded" style=" border: 1px solid #dee2e6 !important;" >

                    <h3 class="h5 text-black widget-title mb-3" style="margin-left: 23%;">تواصل مع موظفنا </h3>

                    <form  method="post" action="{{asset(route('notification_admin_message'))}}" class="form-contact-agent" >

                        @csrf
                        <div  class="form-group" style="text-align: right">
                            <i class="fas fa-user"></i>
                            <strong>الاسم  </strong>
                             <input type="text"  class="form-control" name="name" placeholder="hasan" required style="border: 1px solid #dee2e6 !important;margin-top: 4px">

                        </div>

                        <div   class="form-group" style="text-align: right">
                            <i class="fas fa-envelope"></i>
                          <strong>البريد الالكتروني </strong>
                            <input class="form-control" type="email" name="email"  required style="border: 1px solid #dee2e6 !important;margin-top: 4px">
                        </div>

                        <div   class="form-group" style="text-align: right">
                            <i class="fas fa-mobile"></i>
                            <strong>رقم الهاتف  </strong>
                            <input type="number" name="mobile" placeholder="00963" class="form-control" required style="border: 1px solid #dee2e6 !important;margin-top: 4px">
                        </div>

                        <div   class="form-group" style="text-align: right">
                            <i class="fa fa-table"></i>
                            <strong> رسالة الى المسؤول  </strong>

                            <textarea  name="message" type="text" class="form-control"
                                      style="border: 1px solid #dee2e6 !important;margin-top: 4px" >
                            </textarea>
                                </div>

                        <input hidden value="{{$property->id}}" name="property_id">
                        <input hidden value="{{$property->contract_type}}" name="contract_type">

                        <button type="submit" class="btn btn-primary"
                         style="margin-top: 20px;
                         margin-left: 206px;
                         width: 30%">ارسال</button>


                    </form>

                </div>



            </div>

        </div>
    </div>
</div>



<!-- Footer Section -->

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
                            </FONT>
                            <a href="#" class="site-btn">نحن هنا </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer-widger">
                    <h2 style="padding-right:90px;">المنصة</h2>
                    <ul style="padding-left:30px;">
                        <li><a href="#">من  نحن </a></li>
                        <li><a href="#">خدماتنا</a></li>
                        <li><a href="#">المسؤولون</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer-widger">
                    <h2  style="padding-right:90px;" >للبيع</h2>
                    <ul style="padding-left:30px;">
                        <li><a href="#">اشتري الآن </a></li>
                        <li><a href="#">العقارات</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer-widger">
                    <h2  style="padding-right:90px;" >الاإجارات</h2>
                    <ul style="padding-left:30px;">
                        <li><a href="#">استأجر بأقل كلفة</a></li>
                        <li><a href="#">ماذا تحتاج؟؟</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer-widger">
                    <h2  style="padding-right:90px;" >قيمنا </h2>
                    <ul style="padding-left:30px;">
                        <li><a href="#">تقيمات سابقة </a></li>
                        <li><a href="#">ملاحظات</a></li>
                        <li><a href="#">زبون دائم</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>

<x:notify-messages />
</body>
</html>
