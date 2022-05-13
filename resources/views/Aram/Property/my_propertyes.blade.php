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

    <title>My Propertyes</title>
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




            </ul>



        </nav>



    </header>

</div>




            <!-- Gallery -->


<div  class="container mt-4em" style="">
    <div class="row">
        <section id="property"  class="col-sm-12 bg_gallery aq-page-container">
            <div class="containerx aq-page-container-area">

                @if(sizeof($propertyes)!=0)
             <div class="site-section site-section-sm bg-light" >
                                        <div class="container">

                                            <div class="row mb-5" style="text-align: right">


                                                @foreach($propertyes as $property)

                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <div class="property-entry h-100">

                                                        <a href="{{asset(url('aram/property/details?property_id='.$property->id))}}" class="property-thumbnail">
                                                            <div class="offer-type-wrap">

                                                                @if($property->contract_type=="للبيع")
                                                                    <span class="offer-type bg-danger">{{$property->contract_type}} </span>

                                                                @else
                                                                    <span class="offer-type bg-success">{{$property->contract_type}} </span>
                                                                @endif

                                                            </div>
                                                            <img src="{{asset('Arams\images\Property_Form\\'.$property->photo)}}" style="height: 185.5px;width: 278px" alt="Image" class="img-fluid">
                                                        </a>

                                                        <div class="p-4 property-body">

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
                                                @endforeach




                                            </div>
                                        </div>
                                    </div>

                @else
                    <div class="view-empty" style="text-align: right;font-size: 25px">
                        ليس لديك عقارات معروضة حتى الآن، <a href="{{url('aram/property/add/?user_id='.$user_id)}}">أضف عقارك الآن</a>
                        مجاناً.    </div>
                @endif

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




</body>
</html>
