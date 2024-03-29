@extends('user.user_master')
@section('header_script')
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.30239" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.30239" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.30239" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.30239" type="text/javascript">
</script>
<script src="https://cdn03.jotfor.ms/js/vendor/imageinfo.js?v=3.3.30239" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/file-uploader/fileuploader.js?v=3.3.30239"></script>
<script type="text/javascript">
                JotForm.newDefaultTheme = true;
                JotForm.extendsNewTheme = false;
                JotForm.newPaymentUIForNewCreatedForms = false;
                JotForm.newPaymentUI = true;

            JotForm.setConditions([{"action":[{"field":"31","visibility":"Show","id":"action_1_1641920467418"}],"id":"1641920368876","index":"1","link":"Any","priority":"1","terms":[{"field":"10","operator":"equals","value":"Yes"}],"type":"field"}]);
                JotForm.init(function(){
                /*INIT-START*/
            if (window.JotForm && JotForm.accessible) $('input_95').setAttribute('tabindex',0);
            if (window.JotForm && JotForm.accessible) $('input_96').setAttribute('tabindex',0);
                setTimeout(function() {
                    $('input_98').hint('ex: 23');
                }, 20);
            if (window.JotForm && JotForm.accessible) $('input_100').setAttribute('tabindex',0);

            JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
            JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
            JotForm.calendarOther = {"today":"Today"};
            var languageOptions = document.querySelectorAll('#langList li'); 
            for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
            languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("101", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
            } 
            JotForm.onTranslationsFetch(function() { JotForm.setCalendar("101", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
                setTimeout(function() {
                    JotForm.initMultipleUploads();
                }, 2);
                /*INIT-END*/
                });

                JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"them","qid":"36","text":"Them","type":"control_button"},null,null,null,{"name":"clickTo","qid":"40","text":"Thay dổi thong tin","type":"control_head"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"hoVa","qid":"95","subLabel":"","text":"Ho va ten","type":"control_textbox"},{"description":"","name":"hoVa96","qid":"96","subLabel":"","text":"Email","type":"control_textbox"},null,{"description":"","name":"number","qid":"98","subLabel":"","text":"Số diện thoai","type":"control_number"},null,{"description":"","name":"typeA","qid":"100","subLabel":"","text":"Dia chi","type":"control_textbox"},{"description":"","name":"date","qid":"101","text":"Ngay sinh","type":"control_datetime"},{"description":"","name":"typeA102","qid":"102","subLabel":"","text":"Khoa Phong - Ban","type":"control_dropdown"},null,{"description":"","name":"anh104","qid":"104","subLabel":"","text":"Anh dai diện ","type":"control_fileupload"},{"description":"","labelText":"","name":"40noj661e8e2e7bbb67908217757","qid":"105","text":"40noj6.61e8e2e7bbb679.08217757","type":"control_image"}]);
            setTimeout(function() {
            JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"them","qid":"36","text":"Them","type":"control_button"},null,null,null,{"name":"clickTo","qid":"40","text":"Thay dổi thong tin","type":"control_head"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"hoVa","qid":"95","subLabel":"","text":"Ho va ten","type":"control_textbox"},{"description":"","name":"hoVa96","qid":"96","subLabel":"","text":"Email","type":"control_textbox"},null,{"description":"","name":"number","qid":"98","subLabel":"","text":"Số diện thoai","type":"control_number"},null,{"description":"","name":"typeA","qid":"100","subLabel":"","text":"Dia chi","type":"control_textbox"},{"description":"","name":"date","qid":"101","text":"Ngay sinh","type":"control_datetime"},{"description":"","name":"typeA102","qid":"102","subLabel":"","text":"Khoa Phong - Ban","type":"control_dropdown"},null,{"description":"","name":"anh104","qid":"104","subLabel":"","text":"Anh dai diện ","type":"control_fileupload"},{"description":"","labelText":"","name":"40noj661e8e2e7bbb67908217757","qid":"105","text":"40noj6.61e8e2e7bbb679.08217757","type":"control_image"}]);}, 20); 
</script>
@endsection
@section('css')
<style type="text/css">
    @media print {
        .form-section {
            display: inline !important
        }

        .form-pagebreak {
            display: none !important
        }

        .form-section-closed {
            height: auto !important
        }

        .page-section {
            position: initial !important
        }
    }
</style>
<link type="text/css" rel="stylesheet"
    href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251" />
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.30239" />
<link type="text/css" rel="stylesheet"
    href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.30239" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
    /*PREFERENCES STYLE*/
    .form-all {
        font-family: Inter, sans-serif;
    }

    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
        font-family: Inter, sans-serif;
    }

    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
        font-family: Inter, sans-serif;
    }

    .form-header-group {
        font-family: Inter, sans-serif;
    }

    .form-label {
        font-family: Inter, sans-serif;
    }



    .form-line {
        margin-top: 12px 36px 12px 36px px;
        margin-bottom: 12px 36px 12px 36px px;
    }

    .form-all {
        max-width: 900px;
        width: 100%;
    }

    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
        width: 230px;
    }

    .form-all {
        font-size: 16px
    }

    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
        font-size: 16px
    }

    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
        font-size: 16px
    }

    .supernova .form-all,
    .form-all {
        background-color: #fff;
    }

    .form-all {
        color: #2C3345;
    }

    .form-header-group .form-header {
        color: #2C3345;
    }

    .form-header-group .form-subHeader {
        color: #2C3345;
    }

    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
        color: #2C3345;
    }

    .form-sub-label {
        color: #464d5f;
    }

    .supernova {
        background-color: #ecedf3;
    }

    .supernova body {
        background: transparent;
    }

    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
        background-color: #fff;
    }

    .supernova {
        background-image: none;
    }

    #stage {
        background-image: none;
    }

    .form-all {
        background-image: none;
    }

    .ie-8 .form-all:before {
        display: none;
    }

    .ie-8 {
        margin-top: auto;
        margin-top: initial;
    }

    /*PREFERENCES STYLE*/
    /*__INSPECT_SEPERATOR__*/
    .form-label.form-label-auto {

        display: block;
        float: none;
        text-align: left;
        width: 100%;

    }

    /* Injected CSS Code */
</style>
@endsection
@section('content')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="row" style="padding: 20px;">
    <div class="col-md-6">
        <form method="post" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Họ Tên</label>
                <input type="text" name="HoVaTen" class="form-control" value="{{ $user->HoVaTen }}"
                    placeholder="{{ $user->HoVaTen }}" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="Email" class="form-control" value="{{ $user->Email }}"
                    placeholder="{{ $user->Email }}" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                <input type="text" name="SoDienThoai" class="form-control" value="{{ $user->SoDienThoai }}"
                    placeholder="{{ $user->SoDienThoai }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                <input type="text" name="DiaChi" class="form-control" value="{{ $user->DiaChi }}"
                    placeholder="{{ $user->DiaChi }}">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Ảnh đại diện</label>
                <input class="form-control" name="profile_photo_path" type="file" id="image">
            </div>
            <div class="mb-3">
                <img id="showImage"
                    src=" {{ empty($user->profile_photo_path) ? url('upload/no_image.jpg') : url('upload/UserImages/' . $user->profile_photo_path) }}"
                    style="width:200px; height: 200px;">
            </div>
            <button type="submit" class="btn btn-primary">Thay đổi</button>
        </form>
    </div>
</div> --}}









<form class="jotform-form" action="{{route('user.profile.store')}}" method="post" enctype="multipart/form-data"
    name="form_220188742393460" id="220188742393460" accept-charset="utf-8" autocomplete="on">
    @csrf
    <div role="main" class="form-all">
        <style>
            .form-all:before {
                background: none;
            }
        </style>
        <ul class="form-section page-section">
            <li id="cid_40" class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-large">
                    <div class="header-text httal htvam">
                        <h1 id="header_40" class="form-header" data-component="header">
                            Thay đổi thông tin
                        </h1>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_95">
                <label class="form-label form-label-top form-label-auto" id="label_95" for="input_95"> Họ và tên
                </label>
                <div id="cid_95" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_95" name="HoVaTen" data-type="input-textbox"
                        class="form-readonly form-textbox" data-defaultvalue="" style="width:800px" size="800"
                        value="{{$user->HoVaTen}}" tabindex="-1" data-component="textbox" aria-labelledby="label_95"
                        readonly="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_96">
                <label class="form-label form-label-top form-label-auto" id="label_96" for="input_96"> Email </label>
                <div id="cid_96" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_96" name="Email" data-type="input-textbox"
                        class="form-readonly form-textbox" data-defaultvalue="" style="width:800px" size="800"
                        value="{{$user->Email}}" tabindex="-1" data-component="textbox" aria-labelledby="label_96"
                        readonly="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-3" data-type="control_number" id="id_98">
                <label class="form-label form-label-top form-label-auto" id="label_98" for="input_98"> Số điện thoại
                </label>
                <div id="cid_98" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_98" name="SoDienThoai" data-type="input-number" class=" form-textbox"
                        data-defaultvalue="" style="width:310px" size="310"
                        value="{{old('SoDienThoai') ? old('SoDienThoai') : $user->SoDienThoai}}" placeholder=""
                        data-component="number" aria-labelledby="label_98" step="any" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-4" data-type="control_textbox" id="id_100">
                <label class="form-label form-label-top form-label-auto" id="label_100" for="input_100"> Địa chỉ
                </label>
                <div id="cid_100" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_100" name="DiaChi" data-type="input-textbox" class="form-textbox"
                        data-defaultvalue="" style="width:310px" size="310"
                        value="{{old('DiaChi') ? old('DiaChi') : $user->DiaChi}}" data-component="textbox"
                        aria-labelledby="label_100" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-5" data-type="control_datetime" id="id_101">
                <label class="form-label form-label-top form-label-auto" id="label_101" for="lite_mode_101"> Ngày sinh
                </label>
                <div id="cid_101" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">

                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="date" class="form-textbox validate[limitDate, validateLiteDate]"
                                id="lite_mode_101" size="12" data-maxlength="12" maxLength="12" data-age=""
                                value="{{$user->NgaySinh}}" data-format="mmddyyyy" name="NgaySinh" data-seperator="-"
                                placeholder="MM-DD-YYYY" autoComplete="section-input_101 off"
                                aria-labelledby="label_101" />

                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-6" data-type="control_dropdown" id="id_102">
                <label class="form-label form-label-top form-label-auto" id="label_102" for="input_102"> Khoa Phòng -
                    Ban </label>
                <div id="cid_102" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" id="input_102" name="idKhoaPhong" style="width:310px"
                        data-component="dropdown">
                        <option value="{{$user->idKhoaPhong}}"> Chọn Khoa Phòng </option>
                        @foreach ($DSKhoaPhong as $KhoaPhong )
                        <option value="{{$KhoaPhong->idKhoaPhong}}" {{$KhoaPhong->idKhoaPhong == $user->idKhoaPhong ?
                            'selected' : ''}}> {{$KhoaPhong->TenKhoaPhong}}</>
                        </option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-7" data-type="control_fileupload" id="id_104">
                <label class="form-label form-label-top form-label-auto" id="label_104" for="img_upload"> Ảnh đại diện
                </label>
                <div id="cid_104" class="form-input-wide" data-layout="full">
                    <div class="jfQuestion-fields" data-wrapper-react="true">
                        <div class="jfField isFilled">
                            <div class="jfUpload-wrapper">
                                <div class="jfUpload-container">
                                    <div class="jfUpload-text-container">
                                        <div class="jfUpload-icon forDesktop">
                                            <span class="iconSvg  dhtupload ">
                                                <svg viewBox="0 0 54 47" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g stroke="none" strokeWidth="1" fill="none">
                                                        <g transform="translate(-1506.000000, -2713.000000)">
                                                            <g transform="translate(1421.000000, 2713.000000)">
                                                                <path
                                                                    d="M125.212886,10.1718048 C127.110227,10.3826204 128.89335,10.9096517 130.562307,11.7529143 C132.231264,12.596177 133.689384,13.676591 134.93671,14.9941889 C136.184036,16.3117868 137.167828,17.8226097 137.888114,19.5267029 C138.608401,21.2307962 138.968539,23.049054 138.968539,24.9815309 C138.968539,26.8086 138.687456,28.6356416 138.125281,30.4627107 C137.563106,32.2897797 136.746207,33.9323605 135.674561,35.3905021 C134.602915,36.8486438 133.267769,38.0520318 131.669084,39.0007022 C130.070398,39.9493727 128.217005,40.4588363 126.108848,40.5291081 L122.261482,40.5291081 C121.804714,40.5291081 121.409441,40.3622149 121.07565,40.0284235 C120.741858,39.694632 120.574965,39.2993586 120.574965,38.8425913 C120.574965,38.385824 120.741858,37.9905506 121.07565,37.6567591 C121.409441,37.3229677 121.804714,37.1560744 122.261482,37.1560744 L126.108848,37.1560744 C127.549422,37.1560744 128.858216,36.7871526 130.03527,36.0492978 C131.212324,35.3114429 132.222468,34.3627867 133.06573,33.2033006 C133.908993,32.0438144 134.558998,30.743804 135.015765,29.3032303 C135.472533,27.8626567 135.700913,26.4221046 135.700913,24.9815309 C135.700913,23.4004134 135.384694,21.9159421 134.752247,20.5280723 C134.1198,19.1402026 133.258983,17.9280307 132.169768,16.8915204 C131.080554,15.85501 129.833247,15.0293277 128.427809,14.4144487 C127.022371,13.7995697 125.529116,13.4921348 123.947999,13.4921348 L122.735815,13.4394312 L122.366889,12.2799508 C121.48849,9.46907537 120.07429,7.28189569 118.124245,5.71834621 C116.1742,4.15479672 113.53026,3.37303371 110.192346,3.37303371 C108.084189,3.37303371 106.186876,3.73317173 104.500351,4.45345857 C102.813826,5.17374541 101.36449,6.17510478 100.1523,7.45756671 C98.9401098,8.74002865 98.0090213,10.2684193 97.3590063,12.0427844 C96.7089914,13.8171496 96.3839888,15.7232459 96.3839888,17.7611306 L96.4366924,17.7611306 L96.5420997,19.3422402 L95.0136938,19.6057584 C93.1514888,19.9219819 91.5703951,20.9233413 90.2703652,22.6098666 C88.9703353,24.2963919 88.3203301,26.1937043 88.3203301,28.301861 C88.3203301,30.6911051 89.1196608,32.7640947 90.7183462,34.5208919 C92.3170316,36.277689 94.2055603,37.1560744 96.3839888,37.1560744 L101.232725,37.1560744 C101.724628,37.1560744 102.128685,37.3229677 102.444909,37.6567591 C102.761132,37.9905506 102.919242,38.385824 102.919242,38.8425913 C102.919242,39.2993586 102.761132,39.694632 102.444909,40.0284235 C102.128685,40.3622149 101.724628,40.5291081 101.232725,40.5291081 L96.3839888,40.5291081 C94.8380073,40.5291081 93.3798875,40.2041055 92.0095857,39.5540906 C90.6392839,38.9040756 89.4358959,38.0169064 88.3993855,36.8925562 C87.3628752,35.768206 86.5371929,34.4681956 85.9223139,32.992486 C85.3074349,31.5167763 85,29.9532503 85,28.301861 C85,25.5963933 85.7554115,23.1544819 87.266257,20.9760534 C88.7771026,18.7976249 90.7095505,17.3395051 93.0636587,16.6016503 C93.2042025,14.2475421 93.7224499,12.0603624 94.6184164,10.0400456 C95.514383,8.0197289 96.7089871,6.26295807 98.2022647,4.76968048 C99.6955423,3.27640288 101.452313,2.10815028 103.47263,1.26488764 C105.492947,0.421624997 107.732829,0 110.192346,0 C112.089686,0 113.82889,0.237164061 115.410007,0.711499298 C116.991124,1.18583453 118.414109,1.8621913 119.679003,2.74058989 C120.943897,3.61898847 122.033095,4.69061868 122.946629,5.95551264 C123.860164,7.22040661 124.615575,8.62582326 125.212886,10.1718048 Z M113.249157,23.611236 L119.468188,30.4627107 C119.71414,30.7086623 119.837114,30.9985295 119.837114,31.3323209 C119.837114,31.6661124 119.71414,31.9735473 119.468188,32.2546348 L119.046559,32.5181531 C118.835743,32.7641047 118.563444,32.8607271 118.229652,32.8080232 C117.895861,32.7553193 117.605994,32.6059937 117.360042,32.3600421 L113.670787,28.2491573 L113.670787,45.2197331 C113.670787,45.7116364 113.503893,46.1156936 113.170102,46.4319171 C112.83631,46.7481406 112.441037,46.90625 111.98427,46.90625 C111.492366,46.90625 111.088309,46.7481406 110.772086,46.4319171 C110.455862,46.1156936 110.297753,45.7116364 110.297753,45.2197331 L110.297753,28.2491573 L106.713904,32.2546348 C106.467953,32.5005864 106.178086,32.649912 105.844294,32.7026159 C105.510503,32.7553198 105.220636,32.6586974 104.974684,32.4127458 L104.553055,32.1492275 C104.307103,31.86814 104.184129,31.5607051 104.184129,31.2269136 C104.184129,30.8931222 104.307103,30.603255 104.553055,30.3573034 L110.666678,23.611236 L110.666678,23.5585323 L111.088308,23.1369031 C111.193715,22.9963593 111.325473,22.8997369 111.483585,22.847033 C111.641697,22.7943291 111.791022,22.7679775 111.931566,22.7679775 C112.107246,22.7679775 112.265355,22.7943291 112.405899,22.847033 C112.546443,22.8997369 112.686984,22.9963593 112.827528,23.1369031 L113.249157,23.5585323 L113.249157,23.611236 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="jfUpload-button-container">
                                        <div class="jfUpload-button" aria-hidden="true" tabindex="0"
                                            style="display:none" data-version="v2">
                                            Chọn ảnh
                                            <div class="jfUpload-heading forDesktop">
                                                Kéo và thả ảnh vào đây
                                            </div>
                                            <div class="jfUpload-heading forMobile">
                                                Chọn ảnh
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jfUpload-files-container">
                                    <input type="file" id="img_upload" name="profile_photo_path" multiple=""
                                        class="form-upload-multiple" data-imagevalidate="yes"
                                        data-file-accept="jpg, jpeg, png, gif" data-file-maxsize="10854"
                                        data-file-minsize="0" data-file-limit="1" data-component="fileupload"
                                        aria-label="Browse Files" />
                                </div>
                            </div>
                            <div data-wrapper-react="true">
                            </div>
                        </div>
                        <span style="display:none" class="cancelText">
                            Cancel
                        </span>
                        <span style="display:none" class="ofText">
                            of
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-8" data-type="control_image" id="id_105">
                <div id="cid_105" class="form-input-wide" data-layout="full">
                    <div style="text-align:center">
                        <img alt="" class="form-image" style="border:0" id="img"
                            src="{{ empty($user->profile_photo_path) ? url('upload/no_image.jpg') : url('upload/UserImages/' . $user->profile_photo_path) }}"
                            height="200px" width="199px" data-component="image" />
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_button" id="id_36">
                <div id="cid_36" class="form-input-wide" data-layout="full">
                    <div data-align="center"
                        class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
                        <button style="background-color:#036df8;" id="input_36" type="submit"
                            class="form-submit-button submit-button jf-form-buttons jsTest-submitField"
                            data-component="button" data-content="">
                            Cập nhật
                        </button>
                    </div>
                </div>
            </li>
            <li style="clear:both">
            </li>
            <li style="display:none">
                Should be Empty:
                <input type="text" name="website" value="" />
            </li>
        </ul>
    </div>
    <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="220188742393460" />
    <script type="text/javascript">
        var all_spc = document.querySelectorAll("form[id='220188742393460'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "220188742393460-220188742393460";
}
    </script>
    <div class="formFooter-heightMask">
    </div>

</form>

@section('script')


<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.30239"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.30239"></script>
<script>
    $(function(){
        $('#img_upload').change(function(){
            var input = this;
            var url = $(this).val();
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
            {
                var reader = new FileReader();

                reader.onload = function (e) {
                $('#img').attr('src', e.target.result);
                }
            reader.readAsDataURL(input.files[0]);
            }
            else
            {
            $('#img').attr('src', '/public/upload/no_image.png');
            }
        });
    });
</script>
@endsection
@endsection