
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>Property Filter</title>

    <link rel="stylesheet" href="{{asset('Arams\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\css\font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\css\style_search_filter.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-ie7.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-ie7-codes.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-embedded.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\fontello\fontello-codes.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\fontello\animation.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\fontello\bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\css\socialButtons_search_filter.css')}}">



</head>
<body 	background= "{{asset('Arams\images\Property\hero-1.jpg')}}"  >



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



<section class="about-section spad">

    <div class="container " style=" background-color: #0b0e25;opacity: 95%;text-align: right;color: white;padding: 30px">

        <form class="form-search col-md-12" method="get" action="{{asset(url('aram/property/filter'))}}">


            <!--       start first section                           -->

            <div class="row  align-items-end">

                <div class="col-md-3">
                    <label for="list-type">نوع العقد</label>
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="contract_type" id="list-type" class="form-control d-block rounded-0">
                            <option value="all"> الكل</option>
                            <option value="للبيع">للبيع </option>
                            <option value="للإيجار">للإيجار </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="list-types">نوع العقار</label>
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="property_type" id="list-types" class="form-control d-block rounded-0">
                            <option value="all"> الكل</option>
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
                    </div>
                </div>

                <div class="col-md-3" style="/*margin-right: 130px">
                    <label for="select-city"> اختر المنطقة</label>
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="area" id="select-area" class="form-control d-block rounded-0">

                            @if($Areas !="none" && $areas=="none" )

                            @foreach($Areas as $Area)
                            <option value="{{$Area->name}} ">{{$Area->name}} </option>
                                @endforeach

                                @endif

                                @if($areas !=null && $Areas =="none" )

                                    @foreach($areas as $Area)
                                        <option value="{{$Area->area}} ">{{$Area->area}} </option>
                                    @endforeach

                                @endif

                        </select>
                    </div>
                </div>

                <div class="col-md-3" style="/*margin-right: 129px">
                    <label for="Currency_Type"> العملة </label>
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="currency" id="Currency_Type" class="form-control d-block rounded-0">
                            <option value="all" >الكل</option>
                            <option value="USD" >دولار أمريكي</option>
                            <option value="SYR">ليرة سورية</option>
                        </select>
                    </div>
                </div>

            </div>

            <!--       end first section                           -->



            <!--       start second section                           -->

            <div class="row  align-items-end">

                <div class="col-md-3">

                    <label for="space"> المساحة :</label>

                    <div class="select-wrap"  id="space"  >

                        <span class="icon icon-arrow_drop_down"></span>
                        <label for="qq"> من :</label>
                        <input type="number" name="min_space" style="height: 48px;width: 50%">

                    </div>

                </div>



                <div class="col-md-3" style="margin-right: -99px">

                    <div class="select-wrap"  id="Syrian_Bound"  >

                        <span class="icon icon-arrow_drop_down"></span>
                        <label for="qq"> الى :</label>
                        <input type="number" id="qq" name="max_space" style="height: 48px;width: 50%">

                    </div>

                </div>






                <div class="col-md-3">

                    <label for="space"> السعر :</label>

                    <div class="select-wrap"  id="space"  >

                        <span class="icon icon-arrow_drop_down"></span>
                        <label for="qq"> من :</label>
                        <input type="number" name="min_price" style="height: 48px;width: 50%">

                    </div>

                </div>


                <div class="col-md-3" style="margin-right: -99px" >

                    <div class="select-wrap"  id="Syrian_Bound" >

                        <span class="icon icon-arrow_drop_down"></span>
                        <label for="qq"> الى :</label>
                        <input type="number" id="qq" name="max_price" style="height: 48px;width: 50%">

                    </div>

                </div>


                <br><br><br><br>
            </div>

            <!--       end second section                           -->




            <br><br>
            <div class="row  align-items-end">
                <div class="col-md-3">
                    <button type="button" id="button_show_hide_more_info"
                            class="btn btn-outline-info text-white btn-more rounded-0" >خيارات اضافية</button>
                </div>

                <div class="col-md-3" style="margin-right: 132px">

                    <input type="submit" class="btn btn-outline-success text-white btn-block rounded-0" value="بحث">
                </div>
            </div>






<!--       end first section                           -->


            <!--       start second section                           -->
            <div class="row  align-items-end" id="hide_show_list" style="text-align: left"  >
                <br><br><br>


                <div class="ml-column" style=" padding-left: 50px ;margin-right: 20px">
                    <label for="lundry1">
                        <span class="checkbox"></span>
                        <input type="checkbox" value="مسبح" name="swimming" id="lundry1">
                        مسبح  </label>

                </div>

                <div class="ml-column " style=" padding-left: 50px">
                    <label for="lundry2">
                        <span class="checkbox"></span>
                        <input type="checkbox" value="قبو"  name="basement" id="lundry2">
                        قبو </label>
                </div>


                <div class="ml-column" style=" padding-left: 50px">
                    <label for="lundry3">
                        <span class="checkbox"></span>
                        <input type="checkbox" value="دوبلكس" name="duplex" id="lundry3">
                        دوبلكس </label>

                </div>


                <div class="ml-column" style=" padding-left: 50px">
                    <label for="lundry4">
                        <span class="checkbox"></span>
                        <input type="checkbox"  value="تكييف" name="condition" id="lundry4">
                        تكييف  </label>
                </div>



                <div class="ml-column" style=" padding-left: 50px">
                    <label for="lundry5">
                        <span class="checkbox"></span>
                        <input type="checkbox" value="ملحق" name="appendix" id="lundry5">
                        ملحق</label>
                </div>


                <div class="ml-column" style=" padding-left: 50px">
                    <label for="lundry6">
                        <span class="checkbox"></span>
                        <input type="checkbox" value="منطقة لعب أطفال" name="children_play_area" id="lundry6">
                        منطقة لعب أطفال </label>

                </div>

                <div class="ml-column" style=" padding-left: 50px">
                    <label for="lundry6">
                        <span class="checkbox"></span>
                        <input type="checkbox" value="مصعد" name="elevator" id="lundry6">
                          مصعد </label>

                </div>

                <div class="ml-column" style=" padding-left: 50px">
                    <label for="lundry6">
                        <span class="checkbox"></span>
                        <input type="checkbox" value="سينما" name="cinema" id="lundry6">
                        سينما </label>

                </div>

                <div class="ml-column" style=" padding-left: 50px">
                    <label for="lundry6">
                        <span class="checkbox"></span>
                        <input type="checkbox"  value="نادي" name="club" id="lundry6">
                        نادي </label>

                </div>

                <div class="ml-column" style=" padding-left: 50px">
                    <label for="lundry6">
                        <span class="checkbox"></span>
                        <input type="checkbox" value="ساونا" name="sauna" id="lundry6">
                        ساونا </label>

                </div>





            </div>
            <!--       end second section                           -->

        </form>




    </div>
</section>








<section>
<br ><br ><br >


    <div  class="site-section site-section-sm bg-light">
        <div class="container" style="text-align: right">

            <div id="all_property" class="row mb-5" >

                @if(count($propertyes)==0 && $Areas !="none") <!-- check array is empty -->

                    <h2 style="margin-right: 322px">المعذرة لايوجد عقارات مضافة</h2>
                @endif

                @if(count($propertyes)==0 && $Areas =="none") <!-- check array is empty -->

                    <h2 style="margin-right: 160px">المعذرة! لايوجد عقارات مضافة في الموقع الذي بحثت فيه</h2>
                    @endif

                @foreach($propertyes as $property)


                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="property-entry h-100">

                            <a href="{{asset(url('aram/property/details?property_id='.$property->id))}}" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <!-- give color to the contract_type icon -->
                                    @if($property->contract_type=="للبيع")
                                        <span class="offer-type bg-danger">{{$property->contract_type}} </span>

                                    @else
                                        <span class="offer-type bg-success">{{$property->contract_type}} </span>
                                    @endif

                                </div>
                                <img src="{{asset('Arams\images\Property_Form\\'.$property->photo)}}" style="height:195px;width: 312px" alt="Image" class="img-fluid">
                            </a>

                            <div class="p-4 property-body">
                                <a href="#" class="property-favorite active"><span class="icon-heart-empty"></span></a>
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

<script type="text/javascript" src="http://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

        var x = document.getElementById("button_show_hide_more_info");
        var DivList = document.getElementById('hide_show_list');
        DivList.style.display = "none";


        x.addEventListener('click',()=>{

            if ( DivList.style.display === "none") {
                DivList.style.display = "flex";
                x.innerHTML='اخفاء الخيارات الاضافية'
            }

            else {
                DivList.style.display = "none";
                x.innerHTML=' خيارات اضافية'

            }



        })


</script>




</body>
</html>
