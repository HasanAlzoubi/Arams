<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('Arams\css\property-style.css') }}">@notifyCss
    <link rel="stylesheet" href="{{ asset('Arams\css\style.css') }}">@notifyCss
    <link rel="stylesheet" href="{{ asset('Arams\css\bootstrap.min.css') }}">@notifyCss
    <link rel="stylesheet" href="{{ asset('Arams\css\socialButtons.css') }}">@notifyCss
    <link rel="stylesheet" href="{{ asset('Arams\css\profile.css') }}">@notifyCss
    <link rel="stylesheet" href="{{ asset('Arams\fontello\fontello-embedded.css') }}">@notifyCss
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">@notifyCss

    <title> add property </title>

    <style>
        #sliding-popup.sliding-popup-top {
            background: #4B6F82;
        }

        #sliding-popup .popup-content #popup-text h2,
        #sliding-popup .popup-content #popup-text p {
            color: #ffffff !important;
        }

    </style>
    <script type="text/javascript" src="{{ asset('Arams\jquery\jquery-2.1.4.min.js') }}"></script>@notifyJs

    <script type="text/javascript" src="{{ asset('Arams\Js\bootstrap.min.js') }}"></script>@notifyJs


</head>

<body role="document" class="html not-front logged-in no-sidebars page-node page-node-add page-node-add-aqar i18n-ar" background="{{ asset('Arams\images\Property\hero_bg_4.jpg') }}">

<header class="header-section">

    <div class="header-right" >

        @if (\Illuminate\Support\Facades\Auth::guard('user')->check())

            <li style="list-style: none"><a href="{{asset(route('User.profile'))}}" class="register"> الملف الشخصي </a></li>
        @else
            <a href="{{asset(route('Get.User.Login'))}}" class="register">تسجيل الدخول </a>
        @endif


    </div>



    <a href="" class="site-logo"  style="margin-top: -47px">
        <img src="{{asset('Arams\images\Logo\REL-design2.png')}}">
    </a>




    <nav class="header-nav">

        <ul class="main-menu">
            <li><a href="{{url('aram/')}}" class="">الصفحة الرئيسية </a></li>



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



    <div class="container mt-4em">
        @if(Session::has('success_property'))
            <div  style="color:black; font-size:xx-large ;text-align: center"   >
                {{Session::get('success_property')}}
            </div>
        @endif



        <div class="row">

            <!-- Gallery -->
            <section id="property" class="col-sm-12 bg_gallery aq-page-container">
                <div class="containerx aq-page-container-area">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="region region-content">

                                <form class="node-form node-aqar-form"  enctype="multipart/form-data"
                                    action="{{route('add_property')}}" method="post" id="aqar-node-form" accept-charset="UTF-8">
                                    @csrf
                                    <div>
                                        <div class="form-tabs-container">
                                            <ul class="nav nav-tabs form-tabs" role="tablist">
                                                <li role="presentation" class="active" id="step1">
                                                    <a href="#firsttab" aria-controls="firsttab" role="tab"
                                                        data-toggle="tab" class="form-tabs-button firsttab"
                                                        data-next="firsttab">
                                                        <span><span class="aqicon"><span class="number">1</span><span
                                                                    class="aqicon-checkmark-selected2x checkicon"></span></span>
                                                        </span>
                                                        <span class="tabtitle">العنوان وتحديد الموقع</span>
                                                    </a>
                                                </li>
                                                <li role="presentation" id="step2">
                                                    <a href="#secondtab" aria-controls="secondtab" role="tab"
                                                        data-toggle="tab" class="form-tabs-button secondtab"
                                                        data-next="secondtab">
                                                        <span><span class="aqicon"><span class="number">2</span><span
                                                                    class="aqicon-checkmark-selected2x checkicon"></span></span>
                                                        </span>
                                                        <span class="tabtitle">إضافة صور العقار</span>
                                                    </a>
                                                </li>
                                                <li role="presentation" id="step3">
                                                    <a href="#thirdtab" aria-controls="thirdtab" role="tab"
                                                        data-toggle="tab" class="form-tabs-button thirdtab"
                                                        data-next="thirdtab">
                                                        <span><span class="aqicon"><span class="number">3</span><span
                                                                    class="aqicon-checkmark-selected2x checkicon"></span></span>
                                                        </span>
                                                        <span class="tabtitle">إدخال البيانات والنشر</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content padding_half">


                                            <div role="tabpanel" class="tab-pane fade active in" id="firstcontent">

                                                <div class="field-type-text field-name-title-field field-widget-text-textfield form-wrapper form-group"
                                                     id="edit-title-field">
                                                    <div id="title-field-add-more-wrapper">
                                                        <div
                                                            class="form-item form-item-title-field-und-0-value form-type-textfield form-group">
                                                            <label class="control-label"
                                                                   for="edit-title-field-und-0-value">عنوان العقار

                                                            </label>
                                                            <input  class="text-full maxlength form-control form-text required"
                                                                    type="text"
                                                                    id="Property-Address"
                                                                    name="property_address" />

                                                            <small id="Property-Address-error" class="form-text text-danger" ></small>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="field-type-taxonomy-term-reference field-name-field-contract-type field-widget-options-buttons form-wrapper form-group"
                                                     id="edit-field-contract-type">
                                                    <div
                                                        class="form-item form-item-field-contract-type-und form-type-select form-group">
                                                        <label class="control-label"
                                                               for="edit-field-contract-type-und">نوع العقد </label>
                                                        <select class="form-control form-select required"
                                                                id="edit-field-contract-type-und"
                                                                name="contract_type">
                                                            <option value="للإيجار" >للإيجار</option>
                                                            <option value="للبيع">للبيع</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="field-type-taxonomy-term-reference field-name-field-region field-widget-taxonomy-shs form-wrapper form-group"
                                                             id="edit-field-region">
                                                            <div id="field-region-add-more-wrapper">

                                                                <div class="form-item form-item-field-region-und-0-tid form-type-textfield form-group">
                                                                    <label for="ajax_country"> الدولة</label>
                                                                    <select  class="form-control" id="ajax_country" name="country_id"  >
                                                                        <option value="" disabled selected>اختر الدولة</option>
                                                                        @foreach($Country as $country)
                                                                            <option  value="{{$country->id}}">{{$country->name}}</option>
                                                                        @endforeach
                                                                    </select>


                                                                    <small class="form-text text-danger"  id="error_country"></small>



                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="field-type-taxonomy-term-reference field-name-field-region field-widget-taxonomy-shs form-wrapper form-group"
                                                             id="edit-field-region">
                                                            <div id="field-region-add-more-wrapper">
                                                                <div
                                                                    class="form-item form-item-field-region-und-0-tid form-type-textfield form-group">
                                                                    <label for="ajax_city">المدينة</label>
                                                                    <select  class="form-control" id="ajax_city" name="city_id" >

                                                                        <option value="" disabled selected>اختر مدينة</option>

                                                                    </select>

                                                                    <small id="city_error" class="form-text text-danger" ></small>



                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="field-type-taxonomy-term-reference field-name-field-region field-widget-taxonomy-shs form-wrapper form-group"
                                                             id="edit-field-region">
                                                            <div id="field-region-add-more-wrapper">

                                                                <div class="form-item form-item-field-region-und-0-tid form-type-textfield form-group">

                                                                    <label for="ajax_area">المنطقة</label>
                                                                    <select class="form-control" name="area_id" id="ajax_area">

                                                                        <option value=""  disabled selected>اختر منطقة</option>

                                                                    </select>

                                                                    <small id="area_error" class="form-text text-danger" ></small>




                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <span id="first_next"  class="btn btn-success form-tabs-next"
                                                      >التالي</span>
{{--                                                <a href="#secondtab" aria-controls="secondtab" role="tab"--}}
{{--                                                   data-toggle="tab" class="form-tabs-button secondtab"--}}
{{--                                                   data-next="secondtab">--}}
{{--                                                    <span id="go-to-second-step"  class="btn btn-success form-tabs-next"--}}
{{--                                                          data-next="secondtab">التالي</span>--}}
{{--                                                </a>--}}



                                            </div>

                                            <div role="tabpanel" class="tab-pane fade active in" id="secondcontent">
                                                <div class="field-type-image field-name-field-image field-widget-image-miw form-wrapper form-group"
                                                     id="edit-field-image">
                                                    <div id="edit-field-image-und-ajax-wrapper">
                                                        <fieldset id="edit-field-image-und"
                                                                  class="panel panel-default form-wrapper">
                                                            <legend class="panel-heading">
                                                                <span class="panel-title fieldset-legend">أضف
                                                                    صورة</span>
                                                            </legend>
                                                            <div class="panel-body">
                                                                <input type="file" name="photo" id="image-input">
                                                            </div>


                                                        </fieldset>
                                                        <small class="form-text text-danger" id="image_error"></small>


                                                    </div>
                                                </div>

                                                <span id="second_next"  class="btn btn-success form-tabs-next"
                                                >التالي</span>

{{--                                                <a href="#thirdtab" aria-controls="thirdtab" role="tab"--}}
{{--                                                   data-toggle="tab" class="form-tabs-button thirdtab"--}}
{{--                                                   data-next="thirdtab">--}}
{{--                                                    <span id="second_next"  class="btn btn-success form-tabs-next"--}}
{{--                                                          data-next="thirdtab">التالي</span>--}}
{{--                                                </a>--}}
                                            </div>




                                            <div role="tabpanel" class="tab-pane fade active in" id="thirdcontent">
                                                <div class="row">
                                                    <div class="col-sm-3 hidden"></div>
                                                    <div class="col-sm-3 no-left-padding" style="margin-top: -3px">
                                                        <div class="field-type-number-integer field-name-field-area field-widget-number form-wrapper form-group"
                                                            id="edit-field-area">
                                                            <div id="field-area-add-more-wrapper">
                                                                <div
                                                                    class="form-item form-item-field-area-und-0-value form-type-textfield form-group">
                                                                    <label class="control-label"
                                                                        for="edit-field-area-und-0-value">المساحة
                                                                    </label>
                                                                    <input class="form-control form-text" type="number" id="input_space" name="space"
                                                                      required />م<sup>2</sup>

                                                                    <small class="form-text text-danger" id="space_error" ></small>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 no-left-padding" style="margin-right: -14px">
                                                        <div class="field-type-list-text field-name-field-currency field-widget-options-select form-wrapper form-group"
                                                            id="edit-field-currency">
                                                            <div
                                                                class="form-item form-item-field-currency-und form-type-select form-group">
                                                                <label class="control-label"
                                                                    for="edit-field-currency-und">العملة

                                                                        </label>
                                                                <select class="form-control form-select required"
                                                                    id="edit-field-currency-und"
                                                                    name="currency">
                                                                    <option value="USD" >دولار أمريكي</option>
                                                                    <option value="SYR">ليرة سورية</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3" style="margin-right: 10px">
                                                        <div class="field-type-number-integer field-name-field-price field-widget-number form-wrapper form-group"
                                                            id="edit-field-price">
                                                            <div id="field-price-add-more-wrapper">
                                                                <div
                                                                    class="form-item form-item-field-price-und-0-value form-type-textfield form-group">
                                                                    <label class="control-label"
                                                                        for="edit-field-price-und-0-value">السعر
                                                                            </label>
                                                                    <input class="form-control form-text required"
                                                                        type="number" id="input_price"
                                                                        name="price"
                                                                           required />

                                                                    <small class="form-text text-danger" id="error_price"></small>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 no-left-padding" style="margin-right: -11px">
                                                        <div class="field-type-taxonomy-term-reference field-name-field-type field-widget-options-select form-wrapper form-group"
                                                            id="edit-field-type">
                                                            <div
                                                                class="form-item form-item-field-type-und form-type-select form-group">
                                                                <label class="control-label"
                                                                    for="edit-field-type-und">نوع العقار </label>
                                                                <select class="form-control form-select"
                                                                    id="edit-field-type-und" name="property_type">
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
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="field-type-list-integer field-name-field-bedrooms field-widget-options-select form-wrapper form-group"
                                                            id="edit-field-bedrooms">
                                                            <div
                                                                class="form-item form-item-field-bedrooms-und form-type-select form-group">
                                                                <label class="control-label"
                                                                    for="edit-field-bedrooms-und">غرف النوم </label>
                                                                <select class="form-control form-select"
                                                                    id="edit-field-bedrooms-und"
                                                                    name="number_of_bedroom">
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="field-type-list-integer field-name-field-bathrooms field-widget-options-select form-wrapper form-group"
                                                            id="edit-field-bathrooms">
                                                            <div
                                                                class="form-item form-item-field-bathrooms-und form-type-select form-group">
                                                                <label class="control-label"
                                                                    for="edit-field-bathrooms-und">دورات المياه </label>
                                                                <select class="form-control form-select"
                                                                    id="edit-field-bathrooms-und"
                                                                    name="number_of_bathroom">
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="field-type-list-text field-name-field-parking field-widget-options-select form-wrapper form-group"
                                                             id="edit-field-parking">
                                                            <div
                                                                class="form-item form-item-field-parking-und form-type-select form-group">
                                                                <label class="control-label"
                                                                       for="edit-field-parking-und">مواقف سيارات </label>
                                                                <select class="form-control form-select"
                                                                        title="هل هناك مواقف سيارات مخصصة؟"
                                                                        data-toggle="tooltip" id="edit-field-parking-und"
                                                                        name="parking">
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="field-type-text field-name-field-building-year field-widget-text-textfield form-wrapper form-group"
                                                            id="edit-field-building-year">
                                                            <div id="field-building-year-add-more-wrapper">
                                                                <div
                                                                    class="form-item form-item-field-building-year-und-0-value form-type-textfield form-group">
                                                                    <label class="control-label"
                                                                        for="edit-field-building-year-und-0-value">سنة
                                                                        البناء </label>
                                                                    <input class="text-full form-control form-text"
                                                                        type="number" value="2000" max="2021" min="1980"
                                                                        id="edit-field-building-year-und-0-value"
                                                                        name="year_of_construction"
                                                                           required />

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="field-type-text-with-summary field-name-body field-widget-text-textarea-with-summary form-wrapper form-group"
                                                    id="edit-body">
                                                    <div id="body-add-more-wrapper" style="width: 98%">
                                                        <div class="text-summary-wrapper"></div>
                                                        <div
                                                            class="form-item form-item-body-und-0-value form-type-textarea form-group">
                                                            <label class="control-label" for="edit-body-und-0-value">وصف
                                                                عن العقار </label>
                                                            <div class="form-textarea-wrapper resizable" >
                                                                <textarea required style="font-size: 25px ;height: 4em"
                                                                    class="text-full form-control form-textarea"
                                                                    id="input_description"
                                                                    name="description" cols="60"
                                                                    rows="15" >

                                                                </textarea>

                                                            </div>
                                                            <small class="form-text text-danger" id="error_description"></small>


                                                        </div>
                                                    </div>
                                                </div>


                                                <br />

                                                <label class="aqar-features-lablel control-label">مميزات
                                                    العقار</label>
                                                <br />


                                                <label class="switch-option-checkbox"
                                                    id="field-general-amenities-662-checkbox" >
                                                    <input type="checkbox" name="swimming" value="مسبح" class="switch-option-checkbox-input">
                                                    <span class="switch-option-checkbox-label" data-on="مسبح"
                                                        data-off="مسبح" ></span>
                                                    <span class="switch-option-checkbox-handle" style=""></span>
                                                </label>

                                                <label class="switch-option-checkbox"
                                                    id="field-general-amenities-663-checkbox" >
                                                    <input type="checkbox" name="basement" value="قبو"  class="switch-option-checkbox-input">
                                                    <span class="switch-option-checkbox-label" data-on="قبو"
                                                        data-off="قبو"></span>
                                                    <span class="switch-option-checkbox-handle" style=""></span>
                                                </label>

                                                <label class="switch-option-checkbox"
                                                    id="field-general-amenities-664-checkbox">
                                                    <input type="checkbox" name="duplex" value="دوبلكس" class="switch-option-checkbox-input">
                                                    <span class="switch-option-checkbox-label" data-on="دوبلكس"
                                                        data-off="دوبلكس"></span>
                                                    <span class="switch-option-checkbox-handle"  style=""></span>
                                                </label>

                                                <label class="switch-option-checkbox"
                                                    id="field-general-amenities-669-checkbox" >
                                                    <input type="checkbox" name="condition" value="تكييف" class="switch-option-checkbox-input">
                                                    <span class="switch-option-checkbox-label" data-on="تكييف"
                                                        data-off="تكييف"></span>
                                                    <span class="switch-option-checkbox-handle" style=""></span>
                                                </label>

                                                <label class="switch-option-checkbox"
                                                    id="field-general-amenities-673-checkbox" >
                                                    <input type="checkbox" name="appendix" value="ملحق" class="switch-option-checkbox-input">
                                                    <span class="switch-option-checkbox-label" data-on="ملحق"
                                                        data-off="ملحق"></span>
                                                    <span class="switch-option-checkbox-handle" style=""></span>
                                                </label>

                                                <label class="switch-option-checkbox"
                                                    id="field-general-amenities-684-checkbox" >
                                                    <input type="checkbox" name="children_play_area" value="منطقة لعب اطفال" class="switch-option-checkbox-input">
                                                    <span class="switch-option-checkbox-label" data-on="منطقة لعب اطفال"
                                                        data-off="منطقة لعب اطفال"></span>
                                                    <span class="switch-option-checkbox-handle" style=""></span>
                                                </label>

                                                <label class="switch-option-checkbox"
                                                    id="field-general-amenities-674-checkbox" >
                                                    <input type="checkbox" name="elevator" value="مصعد" class="switch-option-checkbox-input">
                                                    <span class="switch-option-checkbox-label" data-on="مصعد"
                                                        data-off="مصعد"></span>
                                                    <span class="switch-option-checkbox-handle" style=""></span>
                                                </label>

                                                <label class="switch-option-checkbox"
                                                    id="field-general-amenities-682-checkbox" >
                                                    <input type="checkbox" name="club" value="نادي" class="switch-option-checkbox-input">
                                                    <span class="switch-option-checkbox-label" data-on="نادي"
                                                        data-off="نادي"></span>
                                                    <span class="switch-option-checkbox-handle" style=""></span>
                                                </label>

                                                <label class="switch-option-checkbox"
                                                    id="field-general-amenities-679-checkbox" >
                                                    <input type="checkbox" name="cinema" value="سينما" class="switch-option-checkbox-input">
                                                    <span class="switch-option-checkbox-label" data-on="سينما"
                                                        data-off="سينما"></span>
                                                    <span class="switch-option-checkbox-handle" style=""></span>
                                                </label>

                                                <label class="switch-option-checkbox"
                                                    id="field-general-amenities-677-checkbox" >
                                                    <input type="checkbox" name="sauna" value="ساونا" class="switch-option-checkbox-input">
                                                    <span class="switch-option-checkbox-label" data-on="ساونا"
                                                        data-off="ساونا"></span>
                                                    <span class="switch-option-checkbox-handle" style=""></span>
                                                </label>

                                                <div class="field-type-list-boolean field-name-field-accept-website-rules field-widget-options-onoff form-wrapper form-group"
                                                    id="edit-field-accept-website-rules">
                                                    <div
                                                        class="form-item form-item-field-accept-website-rules-und form-type-checkbox checkbox">
                                                        <label class="control-label"
                                                            for="edit-field-accept-website-rules-und"><input
                                                                type="checkbox" id="edit-field-accept-website-rules-und"
                                                                name="field_accept_website_rules" value="1"
                                                                checked="checked"
                                                                class="form-checkbox required" />الموافقة على شروط
                                                            الموقع للنشر </label>

                                                        <div class="help-block">عند ضغطك على ( حفظ ) فأنت بذلك تكون
                                                            موافق على <a href="">شروط إضافة العقار</a>.</div>
                                                    </div>
                                                </div>
                                                <input name="user_id" value="{{$user_id}}" style="display: none">
                                                <div class="form-actions form-wrapper form-group" id="edit-actions">

                                                   <button id="third_next" class="btn btn-success form-tabs-next"
                                                   >انشر العقار</button>

                                                </div>
                                            </div>

                                        </div>
                                    </div>




                            </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </div>
    <br>  <br>  <br>


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
    <script >
        $(document).ready(function () {
            $('#ajax_country').on('change', function () {

                let id_country = $(this).val();
                $('#ajax_city').empty();
                $('#ajax_city').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                    type: 'get',
                    url: 'Ajax_city_add_property/' + id_country,
                    success: function (response) {
                        console.log("areassssss ",response);
                        $('#ajax_city').empty();
                        $('#ajax_city').append(`<option value="0" disabled selected>اختر مدينة</option>`);
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
                        url: 'Ajax_area_add_property/' + id,
                        success: function (response) {
                            console.log("areassssss ",response);
                            $('#ajax_area').empty();
                            $('#ajax_area').append(`<option value="0" disabled selected>اختر منطقة</option>`);
                            response.forEach(element => {
                                $('#ajax_area').append(`<option value="${element['id']}">${element['name']}</option>`);
                            });
                        }
                    });
                });
            });

        });
    </script>


        <script>

            var f1=document.getElementById("first_next");
            var f2=document.getElementById("second_next");
            var f3=document.getElementById("third_next");

            var s2=document.getElementById("step2");
            var s3=document.getElementById("step3");


            var firstcontent = document.getElementById("firstcontent");
            var secondcontent = document.getElementById("secondcontent");
            var thirdcontent = document.getElementById("thirdcontent");

            firstcontent.style.display='block';
            secondcontent.style.display='none';
            thirdcontent.style.display='none';

            f1.addEventListener('click',(e)=>{

                var validation=[];

            const Property_address = document.getElementById("Property-Address");
             const country = document.getElementById("ajax_country");
             const city = document.getElementById("ajax_city");
             const area = document.getElementById("ajax_area");

            if(Property_address.value == "" || Property_address.value == null){

                validation['Property-Address-error']='الحقل مطلوب'

                document.getElementById("Property-Address-error").innerText =   validation['Property-Address-error']

            }
                if(country.value == "" || country.value == null){


                    validation['error_country']='الحقل مطلوب'
                    document.getElementById("error_country").innerText =validation['error_country']

                }

                if(city.value == "" || country.value == null){


                    validation['city_error']='الحقل مطلوب'
                    document.getElementById("city_error").innerText =validation['city_error']

                }

                if(area.value == "" || country.value == null){

                    validation['area_error']='الحقل مطلوب'
                    document.getElementById("area_error").innerText =validation['area_error']

                }

            else{
                document.getElementById('step2').className='active';
                firstcontent.style.display='none';
                secondcontent.style.display='block';

            }


        });


            f2.addEventListener('click',(e)=>{

               const image=document.getElementById("image-input");


                if(image.value == "" || image.value == null){

                    document.getElementById("image_error").innerText = 'الحقل مطلوب';

                }

                else {
                    document.getElementById('step3').className='active';
                    thirdcontent.style.display='block';
                    firstcontent.style.display='none';
                    secondcontent.style.display='none';


                }


            });

            f3.addEventListener('click',(e)=>{

                const space=document.getElementById("input_space");
                const price=document.getElementById("input_price");
                const description=document.getElementById("input_description");

                if(space.value == "" || space.value == null){

                    document.getElementById("space_error").innerText = 'الحقل مطلوب';

                }

                if(price.value == "" || price.value == null){

                    document.getElementById("error_price").innerText = 'الحقل مطلوب';

                }

                if(description.value == "" || description.value == null){

                    document.getElementById("error_description").innerText = 'الحقل مطلوب';

                }

                else {



                }


            });

            s2.addEventListener('click',(e)=>{

                var validation=[];

                const Property_address = document.getElementById("Property-Address");
                const country = document.getElementById("ajax_country");
                const city = document.getElementById("ajax_city");
                const area = document.getElementById("ajax_area");

                if(Property_address.value == "" || Property_address.value == null){

                    validation['Property-Address-error']='الحقل مطلوب'

                    document.getElementById("Property-Address-error").innerText =   validation['Property-Address-error']

                }
                if(country.value == "" || country.value == null){


                    validation['error_country']='الحقل مطلوب'
                    document.getElementById("error_country").innerText =validation['error_country']

                }

                if(city.value == "" || country.value == null){


                    validation['city_error']='الحقل مطلوب'
                    document.getElementById("city_error").innerText =validation['city_error']

                }

                if(area.value == "" || country.value == null){

                    validation['area_error']='الحقل مطلوب'
                    document.getElementById("area_error").innerText =validation['area_error']

                }

                else{
                    document.getElementById('step2').className='active';
                    firstcontent.style.display='none';
                    secondcontent.style.display='block';

                }


            });


            s3.addEventListener('click',(e)=>{

                const image=document.getElementById("image-input");


                if(image.value == "" || image.value == null){

                    document.getElementById("image_error").innerText = 'الحقل مطلوب';

                }

                else {
                    document.getElementById('step3').className='active';
                    thirdcontent.style.display='block';
                    firstcontent.style.display='none';
                    secondcontent.style.display='none';


                }


            });



    </script>

<script>

    var step1 = document.getElementById('step1');
    var step2 = document.getElementById('step2');
    var step3 = document.getElementById('step3');

    var Firstcontent = document.getElementById("firstcontent");
    var Secondcontent = document.getElementById("secondcontent");
    var Thirdcontent = document.getElementById("thirdcontent");



    step1.addEventListener('click',()=>{

        step2.className='none';
        step3.className='none';


        Firstcontent.style.display='block'
        Secondcontent.style.display='none'
        Thirdcontent.style.display='none'
    });

    step2.addEventListener('click',()=>{

        step1.className='none';
        step3.className='none';

        Firstcontent.style.display='none'
        Secondcontent.style.display='block'
        Thirdcontent.style.display='none'
    });

    step3.addEventListener('click',()=>{

        step2.className='none';
        step3.className='none';

        Firstcontent.style.display='none'
        Secondcontent.style.display='none'
        Thirdcontent.style.display='block'
    });


</script>



<x:notify-messages />
</body>

</html>
