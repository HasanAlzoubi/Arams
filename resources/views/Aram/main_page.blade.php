
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <title> property Home Page</title>

    <link rel="stylesheet" href="{{asset('Arams\css\bootstrap.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\font-awesome.min.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\style.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\css\socialButtons.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-ie7.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-ie7-codes.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-embedded.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-codes.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\animation.css')}}">@notifyCss
    <link rel="stylesheet" href="{{asset('Arams\fontello\bootstrap-datepicker.min.css')}}">@notifyCss

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">@notifyCss

</head>

<style>
    .property-favorite:focus{
   background-color: red;

    }
</style>



<body 	background= "{{asset('Arams\images\Property\Plan 15807GE_ Old World Exterior.png')}}"  >


<header class="header-section">

    <div class="header-right">

        @if (\Illuminate\Support\Facades\Auth::guard('user')->check())

            <li style="list-style: none"><a href="{{asset(route('User.profile'))}}" class="register"> الملف الشخصي </a></li>
        @else

            <a href="{{asset(route('Get.User.Login'))}}" class="register">تسجيل الدخول </a>
        @endif


    </div>



    <a href="" class="site-logo"  style="margin-top: -47px">
        <img src="{{asset('Arams\images\Logo\REL-design2.png')}}" >
    </a>


    <!-- </div> -->

    <nav class="header-nav">

        <ul class="main-menu">
            <li><a href="{{url('aram/')}}" class="active">الصفحة الرئيسية </a></li>

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


<section class="hero-section set-bg" >

    <div class="container" style="width: 1100px">

        <div class="hero-warp">

            <form class="main-search-form" method="get" action="{{asset(url('aram/property/filter'))}}">


                <div class="search-type">

                    <div class="st-item">

                    </div>
                    <div class="st-item">

                    </div>

                    <div class="st-item">
                        <input type="radio" name="contract_type" id="sale"  value="للبيع" checked>
                        <label for="sale">للبيع</label>
                    </div>

                    <div class="st-item">
                        <input type="radio" name="contract_type" id="rent"  value="للإيجار">
                        <label for="rent">للإيجار</label>
                    </div>


                </div>
                <div class="search-input" style="font-size: 20px">
                    <button class="site-btn ">بحــث</button>
                    <input style="padding-right: 25px" type="text"  name="place"  placeholder="ابحث باسم الحي أو المحافظة.....  ">

                </div>
                <p>يمكنك الآن الاطلاع على أحدث العقارات  ..وعرض عقارك بالمجان ..  </p>
            </form>

        </div>


        <div class="img">

            <div class="user-panel" >

                <div class="">
                    <br>
                    <br>
                    <a href="{{url('aram/property/add/?user_id='.\Illuminate\Support\Facades\Auth::guard('user')->id())}}" class="add_pro_btn"> أضف عقارك الآن</a>
                </div>
            </div>

        </div>
    </div>



</section>




<section>

        <div class="col-md-12">

            <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
                <div class="mr-auto">
                    <button id="aram" class="icon-view view-module active"><span class="icon-th"></span></button>

                    <button id="aram2" class="icon-view view-list "><span class=" icon-th-list"></span></button>

                </div>
                <div class="ml-auto d-flex align-items-center" dir="rtl">
                    <div>
                        <a href="{{asset(url('aram?type=all'))}}"  class="view-list px-3 border-left active">الكل </a>
                        <a href="{{asset(url('aram?type=rent'))}}" class="view-list px-3 border-left">للإيجار</a>
                        <a href="{{asset(url('aram?type=sale'))}}" class="view-list px-3">للبيع</a>
                    </div>

                </div>

            </div>
        </div>




    <div id="main_page" class="site-section site-section-sm bg-light" >

        <div class="container" style="text-align: right" >

            <div id="all_property" class="row mb-5" >


                @foreach($propertyes as $property)
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="property-entry h-100">

                            <a href="{{asset(url('aram/property/details?property_id='.$property->id))}}" class="property-thumbnail">

                                <div class="offer-type-wrap">
                                    @if($property->contract_type=="للبيع")
                                    <span class="offer-type bg-danger">{{$property->contract_type}} </span>

                                        @else
                                        <span class="offer-type bg-success">{{$property->contract_type}} </span>
                                    @endif
                                </div>

                                <img src="Arams\images\Property_Form\{{$property->photo}}" style="height:195px;width: 312px;" alt="Image" class="img-fluid">
                            </a>

                            <div class="p-4 property-body">

                                <button class="property-favorite " style=""><span class="icon-heart-empty"></span></button>

                                <h2 class="property-title"><a href="{{asset(url('aram/property/details?property_id='.$property->id))}}"> {{$property->description}} </a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> {{$property->country}} - {{$property->city}} - {{$property->area}} </span>
                                <strong class="property-price text-primary mb-3 d-block text-success">{{$property->currency}} {{$property->price}} </strong>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs icon icon-bed" ></span>
                                        <span class="property-specs-number">{{$property->number_of_bedroom}}</span>

                                    </li>
                                    <li>
                                        <span class="property-specs icon-bath"> </span>
                                        <span class="property-specs-number">{{$property->number_of_bathroom}}</span>

                                    </li>


                                    <li>
                                        <span class="property-specs icon-cab"></span>
                                        <span class="property-specs-number">{{$property->Parking}}</span>

                                    </li>
                                </ul>

                            </div>



                        </div>

                    </div>
                @endforeach
            </div>


        </div>

    </div>

    <div id="main_page2" class="site-section site-section-sm bg-light">

        <div class="container" style="text-align: right">
            @foreach($propertyes as $property)
            <div class="row mb-4">

                <div class="col-md-12">


                    <div class="property-entry horizontal d-lg-flex">

                        <a href="{{asset(url('aram/property/details?property_id='.$property->id))}}" class="property-thumbnail h-100">

                            <div class="offer-type-wrap">
                                @if($property->contract_type=="للبيع")
                                    <span class="offer-type bg-danger">{{$property->contract_type}} </span>

                                @else
                                    <span class="offer-type bg-success">{{$property->contract_type}} </span>
                                @endif
                            </div>

                            <img src="Arams\images\Property_Form\{{$property->photo}}" style="height: 350px;width: 822px"  alt="Image" class="img-fluid">
                        </a>

                        <div class="p-4 property-body" style="font-size: 25px">
                            <button class="property-favorite" style="margin-right: -2em;"><span class="icon-heart-empty"></span></button>
                            <h2 class="property-title"><a href="{{asset(url('aram/property/details?property_id='.$property->id))}}"> {{$property->description}} </a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> {{$property->country}} - {{$property->city}} - {{$property->area}} </span>
                            <strong class="property-price text-primary mb-3 d-block text-success">{{$property->currency}} {{$property->price}}</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs icon icon-bed" ></span>
                                    <span class="property-specs-number">{{$property->number_of_bedroom}}</span>

                                </li>
                                <li>
                                    <span class="property-specs icon-bath"> </span>
                                    <span class="property-specs-number">{{$property->number_of_bathroom}}</span>

                                </li>


                                <li>
                                    <span class="property-specs icon-cab"></span>
                                    <span class="property-specs-number">{{$property->Parking}}</span>

                                </li>
                            </ul>

                        </div>

                    </div>


                </div>

            </div>
            @endforeach
        </div>

    </div>

</section>

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

                            <FONT FACE="Arial ,Tahoma" size="4" color="#FFFFFF" >
                                <marquee direction="up" width="250" height="117" scrollamount="3" >
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

    var x = document.getElementById("aram");

    var y = document.getElementById("aram2");

    var Main_page = document.getElementById('main_page');
    var Main_page2 = document.getElementById('main_page2');

    Main_page.style.display = "flex";
    Main_page2.style.display = "none";



    x.addEventListener('click',()=>{

        if ( Main_page.style.display === "none") {
            Main_page2.style.display = "none";
            Main_page.style.display = "flex";
            x.className="icon-view view-module active";
            y.className="icon-view view-list";

        }

    });


    y.addEventListener('click',()=>{

        if ( Main_page2.style.display === "none") {
            Main_page.style.display = "none";
            Main_page2.style.display = "flex";
            x.className="icon-view view-module ";
            y.className="icon-view view-list active";
        }

    })


</script>

<x:notify-messages />

</body>
</html>
