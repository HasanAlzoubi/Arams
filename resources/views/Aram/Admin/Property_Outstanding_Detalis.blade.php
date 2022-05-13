<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('Arams\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\css\font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\css\fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Arams\css\style.css')}}">

    <link rel="stylesheet" href="{{asset('Arams\css\style0.css')}}">




    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

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


<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <ul class="navbar-nav ml-auto">


            <a class="nav-link dropdown-toggle" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 18em;">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Arams Property  Mangement System</span>

            </a>


    </ul>

</nav>


<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-right: 7em;">
                <div>
                    <div class="slide-one-item home-slider owl-carousel">
                        <div>

                                <img src="{{asset('Arams\images\Property_Form\\'.$property->photo)}}" name="slide" border=0 style="filter:blendTrans(duration=3)
                                ;border: 1px solid #dee2e6 !important;margin-left: 1px;width: 99.7%;height: 440px;width: 718px">


                        </div>

                    </div>
                </div>
                <div class="bg-white property-body border-bottom border-left border-right" style=" border: 1px solid #dee2e6 !important">

                    <div class="row mb-5" style="    margin-left: 340px;}">
                            <strong class="text-dark h1 mb-3">الوصف: {{$property->description}} </strong>


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

                    <div class="row justify-content-center" style="margin-top: 11px; margin-left: 5px;">

                        <div class="mr-5">
                            <a href="{{url('Admin/agree_property/'.$property->id)}}">
                                <div class="icon-circle bg-success" style="border-radius:50% ">
                                    <i class="fas fa- text-white"> قبول </i>
                                </div>
                            </a>
                        </div>

                        <div class="mr-3">
                            <a href="{{url('Admin/noagree_property/'.$property->id)}}">
                                <div class="icon-circle bg-danger" style="border-radius:50%">
                                    <i class="fas  text-white">رفض</i>
                                </div>
                            </a>
                        </div>
                </div>
            </div>


        </div>
    </div>
</div>

</div>

<!-- Footer Section -->

<footer class="sticky-footer bg-white" style="border: 1.5px solid #dee2e6 !important;text-align: center">
    <div class="container my-auto">
        <div class="copyright text-center22 my-auto">
            <span style="margin-right: 36em;">Copyright &copy; AramsTeam</span>
        </div>
    </div>
</footer>


</body>
</html>
