@extends('user.user_master')

@section('content')
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.30073" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/imageinfo.js?v=3.3.30073" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/file-uploader/fileuploader.js?v=3.3.30073"></script>
<script src="https://cdn02.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.30073" type="text/javascript"></script>
<script defer src="https://cdn03.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.30073" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.30073" type="text/javascript">
</script>
<script type="text/javascript">
    JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

   JotForm.setConditions([{"action":[{"field":"31","visibility":"Show","id":"action_1_1641920467418"}],"id":"1641920368876","index":"1","link":"Any","priority":"1","terms":[{"field":"10","operator":"equals","value":"Yes"}],"type":"field"}]);
	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_42').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_42').hint('Tên thiết bị...');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_43').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_43').hint('Model...');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_44').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_44').hint('Serial');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_45').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_45').hint('Số lượng...');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_46').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_46').hint('Đơn vị...');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_51').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_51').hint('Nhà cung cấp...');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_52').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_52').hint('Hãng sản xuất...');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_53').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_53').hint('Xuất xứ...');
       }, 20);
      setTimeout(function() {
          $('input_57').hint('yyyy');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_59').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_59').hint('VNĐ');
       }, 20);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("64", true, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("64", true, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("65", true, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("65", true, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("66", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("66", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
if (window.JotForm && JotForm.accessible) $('input_69').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_69', 'Type here...' );
if (window.JotForm && JotForm.accessible) $('input_70').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_70', 'Type here...' );
    if(typeof $('input_71').spinner !== 'undefined') {$('input_71').spinner({ imgPath:'https://cdn.jotfor.ms/images/', width: '310', maxValue:'', minValue:'', allowNegative: false, addAmount: 1, value:'0' });}
    $('input_71').up(2).setAttribute('tabindex','');
    if(typeof $('input_72').spinner !== 'undefined') {$('input_72').spinner({ imgPath:'https://cdn.jotfor.ms/images/', width: '310', maxValue:'', minValue:'', allowNegative: false, addAmount: 1, value:'0' });}
    $('input_72').up(2).setAttribute('tabindex','');
    if(typeof $('input_73').spinner !== 'undefined') {$('input_73').spinner({ imgPath:'https://cdn.jotfor.ms/images/', width: '310', maxValue:'', minValue:'', allowNegative: false, addAmount: 1, value:'0' });}
    $('input_73').up(2).setAttribute('tabindex','');
      setTimeout(function() {
          $('input_89').hint('yyyy');
       }, 20);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("86", true, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("86", true, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
if (window.JotForm && JotForm.accessible) $('input_77').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_77').hint('Đơn vị bảo trì...');
       }, 20);
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"them","qid":"36","text":"Them","type":"control_button"},null,null,null,{"name":"clickTo","qid":"40","text":"Nhập thiết bi mới","type":"control_head"},null,{"description":"","name":"typeA","qid":"42","subLabel":"","text":"Ten thiết bi","type":"control_textbox"},{"description":"","name":"typeA43","qid":"43","subLabel":"","text":"Model","type":"control_textbox"},{"description":"","name":"model","qid":"44","subLabel":"","text":"Serial","type":"control_textbox"},{"description":"","name":"serial","qid":"45","subLabel":"","text":"Số luợng","type":"control_textbox"},{"description":"","name":"donVi","qid":"46","subLabel":"","text":"Don vi","type":"control_textbox"},null,{"description":"","name":"typeA48","qid":"48","subLabel":"","text":"Nhom thiết bi","type":"control_dropdown"},{"description":"","name":"nhomThit","qid":"49","subLabel":"","text":"Loai thiết bi","type":"control_dropdown"},{"description":"","name":"loaiThit","qid":"50","subLabel":"","text":"Mức dộ rui ro","type":"control_dropdown"},{"description":"","name":"donVi51","qid":"51","subLabel":"","text":"Nha cung cấp","type":"control_textbox"},{"description":"","name":"nhaCung","qid":"52","subLabel":"","text":"Hang san xuất","type":"control_textbox"},{"description":"","name":"xutX53","qid":"53","subLabel":"","text":"Xuất xứ","type":"control_textbox"},null,null,null,{"description":"","name":"namSan57","qid":"57","subLabel":"","text":"Nam san xuất","type":"control_number"},null,{"description":"","name":"xutX","qid":"59","subLabel":"","text":"Gia nhập","type":"control_textbox"},null,null,null,null,{"description":"","name":"date","qid":"64","text":"Ngay nhập kho","type":"control_datetime"},{"description":"","name":"ngayNhp","qid":"65","text":"Ngay kiểm dinh gần nhất","type":"control_datetime"},{"description":"","name":"ngayKim","qid":"66","text":"Ngay hết han bao hanh","type":"control_datetime"},null,{"description":"","name":"number","qid":"68","subLabel":"Nhập số thang","text":"Kiểm dinh dinh ki","type":"control_number"},{"description":"","name":"typeA69","qid":"69","subLabel":"","text":"Thong số ki thuật","type":"control_textarea"},{"description":"","name":"thongS","qid":"70","subLabel":"","text":"Cấu hinh ki thuật","type":"control_textarea"},{"description":"","name":"typeA71","qid":"71","subLabel":"Don vi: %","text":"Gia tri ban dầu","type":"control_spinner"},{"description":"","name":"giaTri","qid":"72","subLabel":"Don vi: %","text":"Gia tri hiện tai","type":"control_spinner"},{"description":"","name":"giaTri73","qid":"73","subLabel":"Don vi: %","text":"Khấu hao hang nam","type":"control_spinner"},null,null,null,{"description":"","name":"xutX77","qid":"77","subLabel":"","text":"Don vi bao tri","type":"control_textbox"},null,null,{"description":"","name":"nhomThit80","qid":"80","subLabel":"","text":"Can bộ vật tu phu trach","type":"control_dropdown"},{"description":"","name":"canB","qid":"81","subLabel":"","text":"Can bộ khoa phong phu trach","type":"control_dropdown"},{"description":"","name":"canB82","qid":"82","subLabel":"","text":"Khoa phong sử dung","type":"control_dropdown"},{"description":"","name":"anhDai83","qid":"83","subLabel":"","text":"Anh minh hoa","type":"control_fileupload"},null,null,{"description":"","name":"ngayKim86","qid":"86","text":"Ngay ban giao","type":"control_datetime"},null,null,{"description":"","name":"number89","qid":"89","subLabel":"","text":"Nam sử dung","type":"control_number"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"them","qid":"36","text":"Them","type":"control_button"},null,null,null,{"name":"clickTo","qid":"40","text":"Nhập thiết bi mới","type":"control_head"},null,{"description":"","name":"typeA","qid":"42","subLabel":"","text":"Ten thiết bi","type":"control_textbox"},{"description":"","name":"typeA43","qid":"43","subLabel":"","text":"Model","type":"control_textbox"},{"description":"","name":"model","qid":"44","subLabel":"","text":"Serial","type":"control_textbox"},{"description":"","name":"serial","qid":"45","subLabel":"","text":"Số luợng","type":"control_textbox"},{"description":"","name":"donVi","qid":"46","subLabel":"","text":"Don vi","type":"control_textbox"},null,{"description":"","name":"typeA48","qid":"48","subLabel":"","text":"Nhom thiết bi","type":"control_dropdown"},{"description":"","name":"nhomThit","qid":"49","subLabel":"","text":"Loai thiết bi","type":"control_dropdown"},{"description":"","name":"loaiThit","qid":"50","subLabel":"","text":"Mức dộ rui ro","type":"control_dropdown"},{"description":"","name":"donVi51","qid":"51","subLabel":"","text":"Nha cung cấp","type":"control_textbox"},{"description":"","name":"nhaCung","qid":"52","subLabel":"","text":"Hang san xuất","type":"control_textbox"},{"description":"","name":"xutX53","qid":"53","subLabel":"","text":"Xuất xứ","type":"control_textbox"},null,null,null,{"description":"","name":"namSan57","qid":"57","subLabel":"","text":"Nam san xuất","type":"control_number"},null,{"description":"","name":"xutX","qid":"59","subLabel":"","text":"Gia nhập","type":"control_textbox"},null,null,null,null,{"description":"","name":"date","qid":"64","text":"Ngay nhập kho","type":"control_datetime"},{"description":"","name":"ngayNhp","qid":"65","text":"Ngay kiểm dinh gần nhất","type":"control_datetime"},{"description":"","name":"ngayKim","qid":"66","text":"Ngay hết han bao hanh","type":"control_datetime"},null,{"description":"","name":"number","qid":"68","subLabel":"Nhập số thang","text":"Kiểm dinh dinh ki","type":"control_number"},{"description":"","name":"typeA69","qid":"69","subLabel":"","text":"Thong số ki thuật","type":"control_textarea"},{"description":"","name":"thongS","qid":"70","subLabel":"","text":"Cấu hinh ki thuật","type":"control_textarea"},{"description":"","name":"typeA71","qid":"71","subLabel":"Don vi: %","text":"Gia tri ban dầu","type":"control_spinner"},{"description":"","name":"giaTri","qid":"72","subLabel":"Don vi: %","text":"Gia tri hiện tai","type":"control_spinner"},{"description":"","name":"giaTri73","qid":"73","subLabel":"Don vi: %","text":"Khấu hao hang nam","type":"control_spinner"},null,null,null,{"description":"","name":"xutX77","qid":"77","subLabel":"","text":"Don vi bao tri","type":"control_textbox"},null,null,{"description":"","name":"nhomThit80","qid":"80","subLabel":"","text":"Can bộ vật tu phu trach","type":"control_dropdown"},{"description":"","name":"canB","qid":"81","subLabel":"","text":"Can bộ khoa phong phu trach","type":"control_dropdown"},{"description":"","name":"canB82","qid":"82","subLabel":"","text":"Khoa phong sử dung","type":"control_dropdown"},{"description":"","name":"anhDai83","qid":"83","subLabel":"","text":"Anh minh hoa","type":"control_fileupload"},null,null,{"description":"","name":"ngayKim86","qid":"86","text":"Ngay ban giao","type":"control_datetime"},null,null,{"description":"","name":"number89","qid":"89","subLabel":"","text":"Nam sử dung","type":"control_number"}]);}, 20); 
</script>

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
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.30073" />
<link type="text/css" rel="stylesheet"
    href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.30073" />
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

<form action="/thietbi/danhsach">
    <li class="form-line" data-type="control_button" id="id_36">
        <div id="cid_36" class="form-input-wide" data-layout="full">
            <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
                <button style="background-color:#036df8;" id="input_36" type="submit"
                    class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button"
                    data-content="">
                    Quay lại
                </button>
            </div>
        </div>
    </li>
</form>
@foreach ($errors->all() as $error)
<script>
    toastr.error("{{ $error }}");
</script>
@endforeach

<form class="jotform-form" action="{{route('thietbi.postthem')}}" method="post" enctype="multipart/form-data"
    name="form_220091442781451" id="220091442781451" accept-charset="utf-8" autocomplete="on">
    @csrf
    <input type="hidden" name="formID" value="220091442781451" />
    <input type="hidden" id="JWTContainer" value="" />
    <input type="hidden" id="cardinalOrderNumber" value="" />
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
                            Nhập thiết bị mới
                        </h1>
                    </div>
                </div>
            </li>

            <li class="form-line fixed-width jf-required" data-type="control_textbox" id="id_42">
                <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42">
                    Tên thiết bị
                    <span class="form-required">
                        *
                    </span>
                </label>
                <div id="cid_42" class="form-input-wide jf-required" data-layout="half">
                    <input type="text" id="input_42" name="TenThietBi" data-type="input-textbox"
                        class="form-textbox validate[required]" data-defaultvalue="" style="width:790px" size="790"
                        value="{{ old('TenThietBi') }}" placeholder="Tên thiết bị..." data-component="textbox"
                        aria-labelledby="label_42" required="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_43">
                <label class="form-label form-label-top form-label-auto" id="label_43" for="input_43">
                    Model
                    <span class="form-required">
                        *
                    </span>
                </label>
                <div id="cid_43" class="form-input-wide jf-required" data-layout="half">
                    <input type="text" id="input_43" name="Model" data-type="input-textbox"
                        class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                        value="{{ old('Model') }}" placeholder="Model..." data-component="textbox"
                        aria-labelledby="label_43" required="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-2 jf-required" data-type="control_textbox" id="id_44">
                <label class="form-label form-label-top form-label-auto" id="label_44" for="input_44">
                    Serial
                    <span class="form-required">
                        *
                    </span>
                </label>
                <div id="cid_44" class="form-input-wide jf-required" data-layout="half">
                    <input type="text" id="input_44" name="Serial" data-type="input-textbox"
                        class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                        value="{{ old('Serial') }}" placeholder="Serial" data-component="textbox"
                        aria-labelledby="label_44" required="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-1 jf-required" data-type="control_number" id="id_94">
                <label class="form-label form-label-top form-label-auto" id="label_94" for="input_94">
                    Số lượng
                    <span class="form-required">
                        *
                    </span>
                </label>
                <div id="cid_94" class="form-input-wide jf-required" data-layout="half">
                    <input type="number" id="input_94" name="SoLuong" data-type="input-number"
                        class=" form-number-input form-textbox validate[required]" data-defaultvalue=""
                        style="width:310px" size="310" value="{{old('SoLuong')}}" placeholder="Số lượng..."
                        data-component="number" aria-labelledby="label_94" required="" step="any" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-4" data-type="control_textbox" id="id_46">
                <label class="form-label form-label-top form-label-auto" id="label_46" for="input_46"> Đơn vị Tính
                </label>
                <div id="cid_46" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_46" name="DonViTinh" data-type="input-textbox" class="form-textbox"
                        data-defaultvalue="" style="width:310px" size="310" value="{{ old('DonViTinh') }}"
                        placeholder="Đơn vị..." data-component="textbox" aria-labelledby="label_46" />
                </div>
            </li>

            <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="id_48">
                <label class="form-label form-label-top form-label-auto" id="label_48" for="idNhomThietBi"> Nhóm thiết
                    bị
                </label>
                <div id="cid_48" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="idNhomThietBi" name="idNhomThietBi">
                        <option value=""> Chọn nhóm thiết bị </option>
                        @foreach ($DSNhomThietBi as $NhomThietBi )
                        <option value="{{$NhomThietBi->idNhomThietBi}}" {{old('idNhomThietBi')==$NhomThietBi->
                            idNhomThietBi ? 'selected' : ''}}>
                            {{$NhomThietBi->TenNhomThietBi}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-6" data-type="control_dropdown" id="id_49">
                <label class="form-label form-label-top form-label-auto" id="label_49" for="idLoaiThietBi"> Loại thiết
                    bị
                </label>
                <div id="cid_49" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="idLoaiThietBi" name="idLoaiThietBi">
                        <option value=""> Chọn loại thiết bị </option>
                        @foreach ($DSLoaiThietBi as $LoaiThietBi )
                        <option value="{{$LoaiThietBi->idLoaiThietBi}}" {{old('idLoaiThietBi')==$LoaiThietBi->
                            idLoaiThietBi ? 'selected' : ''}}>
                            {{$LoaiThietBi->idLoaiThietBi}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-7" data-type="control_dropdown" id="id_50">
                <label class="form-label form-label-top form-label-auto" id="label_50" for="input_50"> Mức độ rủi ro
                </label>
                <div id="cid_50" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_50" name="MucDoRuiRo">
                        <option value=""> Chọn mức độ rủi ro</option>
                        <option value="A" {{old('MucDoRuiRo')=='A' ? 'selected' : '' }}> A </option>
                        <option value="B" {{old('MucDoRuiRo')=='B' ? 'selected' : '' }}> B </option>
                        <option value="C" {{old('MucDoRuiRo')=='C' ? 'selected' : '' }}> C </option>
                        <option value="D" {{old('MucDoRuiRo')=='D' ? 'selected' : '' }}> D </option>
                    </select>
                </div>
            </li>
            
            <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_51">
                <label class="form-label form-label-top form-label-auto" id="label_51" for="input_51"> Nhà cung cấp
                </label>
                <div id="cid_51" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_51" name="idNhaCungCap">
                        <option value=""> Chọn nhà cung cấp </option>
                        @foreach ($DSNhaCungCap as $NhaCungCap )
                        <option value="{{$NhaCungCap->idNhaCungCap}}" {{old('idNhaCungCap')==$NhaCungCap->
                            idNhaCungCap ? 'selected' : ''}}>
                            {{$NhaCungCap->TenNhaCungCap}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </li>



            <li class="form-line form-line-column form-col-9" data-type="control_textbox" id="id_52">
                <label class="form-label form-label-top form-label-auto" id="label_52" for="input_52"> Hãng sản xuất
                </label>
                <div id="cid_52" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_52" name="HangSanXuat" data-type="input-textbox" class="form-textbox"
                        data-defaultvalue="" style="width:310px" size="310" value="{{ old('HangSanXuat') }}"
                        placeholder="Hãng sản xuất..." data-component="textbox" aria-labelledby="label_52" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-10" data-type="control_textbox" id="id_53">
                <label class="form-label form-label-top form-label-auto" id="label_53" for="input_53"> Xuất xứ </label>
                <div id="cid_53" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_53" name="XuatXu" data-type="input-textbox" class="form-textbox"
                        data-defaultvalue="" style="width:310px" size="310" value="{{ old('XuatXu') }}"
                        placeholder="Xuất xứ..." data-component="textbox" aria-labelledby="label_53" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-11" data-type="control_number" id="id_57">
                <label class="form-label form-label-top form-label-auto" id="label_57" for="input_57"> Năm sản xuất
                </label>
                <div id="cid_57" class="form-input-wide" data-layout="half">
                    <input type="number" id="input_57" name="NamSanXuat" data-type="input-number"
                        class=" form-number-input form-textbox" data-defaultvalue="" style="width:310px" size="310"
                        value="{{ old('NamSanXuat') }}" placeholder="yyyy" data-numbermin="1900" data-numbermax="2100"
                        data-component="number" aria-labelledby="label_57" step="any" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-12" data-type="control_textbox" id="id_59">
                <label class="form-label form-label-top form-label-auto" id="label_59" for="input_59"> Giá nhập </label>
                <div id="cid_59" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_59" name="GiaNhap" data-type="input-textbox"
                        class="form-textbox validate[Numeric]" data-defaultvalue="" style="width:310px" size="310"
                        value="{{ old('GiaNhap') }}" placeholder="VNĐ" data-component="textbox"
                        aria-labelledby="label_59" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-13" data-type="control_dropdown" id="id_80">
                <label class="form-label form-label-top form-label-auto" id="label_80" for="input_80"> Cán bộ vật tư phụ
                    trách </label>
                <div id="cid_80" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_80" name="idCanBoVatTuPhuTrach">
                        <option value=""> Chọn cán bộ vật tư phụ trách </option>
                        @foreach ($DSCanBoVatTuPhuTrach as $CanBoVatTuPhuTrach )
                        <option value="{{$CanBoVatTuPhuTrach->idNguoiDung}}"
                            {{old('idCanBoVatTuPhuTrach')==$CanBoVatTuPhuTrach->idNguoiDung ? 'selected' : ''}}>
                            {{$CanBoVatTuPhuTrach->HoVaTen}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-14" data-type="control_dropdown" id="id_81">
                <label class="form-label form-label-top form-label-auto" id="label_81" for="input_81"> Cán bộ khoa phòng
                    phụ trách </label>
                <div id="cid_81" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_81" name="idCanBoKhoaPhongPhuTrach">
                        <option value=""> Chọn cán bộ khoa phòng </option>
                        @foreach ($DSCanBoKhoaPhongPhuTrach as $CanBoKhoaPhongPhuTrach )
                        <option value="{{$CanBoKhoaPhongPhuTrach->idNguoiDung}}"
                            {{old('idCanBoKhoaPhongPhuTrach')==$CanBoKhoaPhongPhuTrach->idNguoiDung ? 'selected' : ''}}>
                            {{$CanBoKhoaPhongPhuTrach->HoVaTen}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </li>



            <li class="form-line form-line-column form-col-15" data-type="control_dropdown" id="id_82">
                <label class="form-label form-label-top form-label-auto" id="label_82" for="input_82"> Khoa phòng sử
                    dụng </label>
                <div id="cid_82" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_82" name="idKhoaPhongSuDung">
                        <option value=""> Chọn khoa phòng </option>
                        @foreach ($DSKhoaPhongSuDung as $KhoaPhongSuDung )
                        <option value="{{$KhoaPhongSuDung->idKhoaPhong}}" {{old('idKhoaPhongSuDung')==$KhoaPhongSuDung->
                            idKhoaPhong ? 'selected' : ''}}>
                            {{$KhoaPhongSuDung->TenKhoaPhong}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </li>

            <li class="form-line" data-type="control_datetime" id="id_64">
                <label class="form-label form-label-top form-label-auto" id="label_64" for="lite_mode_64"> Ngày nhập kho
                </label>
                <div id="cid_64" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="date" name="NgayNhapKho"
                                class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_64" size="12"
                                data-maxlength="12" maxLength="12" data-age="" value="{{old('NgayNhapKho')}}"
                                data-format="mmddyyyy" data-seperator="/" placeholder="MM/DD/YYYY"
                                autoComplete="section-input_64 off" aria-labelledby="label_64" />
                            <img class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                id="input_64_pick" src="https://cdn.jotfor.ms/images/calendar.png"
                                data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
                            <label class="form-sub-label is-empty" for="lite_mode_64" id="sublabel_64_litemode"
                                style="min-height:13px" aria-hidden="false"> </label>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-1" data-type="control_number" id="id_68">
                <label class="form-label form-label-top form-label-auto" id="label_68" for="input_68"> Kiểm định định kì
                </label>
                <div id="cid_68" class="form-input-wide" data-layout="half">
                    <span class="form-sub-label-container" style="vertical-align:top">
                        <input type="number" id="input_68" name="KiemDinhDinhKy" data-type="input-number"
                            class=" form-number-input form-textbox" data-defaultvalue="0" style="width:310px" size="310"
                            value="{{old('KiemDinhDinhKy')}}" data-component="number"
                            aria-labelledby="label_68 sublabel_input_68" step="any" />
                        <label class="form-sub-label" for="input_68" id="sublabel_input_68" style="min-height:13px"
                            aria-hidden="false"> Nhập số tháng </label>
                    </span>
                </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_65">
                <label class="form-label form-label-top form-label-auto" id="label_65" for="lite_mode_65"> Ngày kiểm
                    định gần nhất </label>
                <div id="cid_65" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <!-- -->
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="date" class="form-textbox validate[limitDate, validateLiteDate]"
                                id="lite_mode_65" size="12" name="NgayKiemDinhGanNhat" data-maxlength="12"
                                maxLength="12" data-age="" value="{{old('NgayKiemDinhGanNhat')}}" data-format="mmddyyyy"
                                data-seperator="/" placeholder="MM/DD/YYYY" autoComplete="section-input_65 off"
                                aria-labelledby="label_65" />
                            <img class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                id="input_65_pick" src="https://cdn.jotfor.ms/images/calendar.png"
                                data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
                            <label class="form-sub-label is-empty" for="lite_mode_65" id="sublabel_65_litemode"
                                style="min-height:13px" aria-hidden="false"> </label>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_datetime" id="id_66">
                <label class="form-label form-label-top form-label-auto" id="label_66" for="lite_mode_66"> Ngày hết hạn
                    bảo hành </label>
                <div id="cid_66" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <!-- -->
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="date" name="NgayHetHanBaoHanh"
                                class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_66" size="12"
                                data-maxlength="12" maxLength="12" data-age="" value="{{old('NgayHetHanBaoHanh')}}"
                                data-format="mmddyyyy" data-seperator="/" placeholder="MM/DD/YYYY"
                                autoComplete="section-input_66 off" aria-labelledby="label_66" />
                            <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_66_pick"
                                src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                aria-hidden="true" data-allow-time="No" data-version="v2" />
                            <label class="form-sub-label is-empty" for="lite_mode_66" id="sublabel_66_litemode"
                                style="min-height:13px" aria-hidden="false"> </label>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-1" data-type="control_textarea" id="id_69">
                <label class="form-label form-label-top form-label-auto" id="label_69" for="input_69"> Thông số kĩ thuật
                </label>
                <div id="cid_69" class="form-input-wide" data-layout="full">
                    <textarea id="input_69" class="form-textarea" name="ThongSoKyThuat"
                        value="{{old('ThongSoKyThuat')}}" style="width:648px;height:163px" data-component="textarea"
                        aria-labelledby="label_69"></textarea>
                </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_textarea" id="id_70">
                <label class="form-label form-label-top form-label-auto" id="label_70" for="input_70"> Cấu hình kĩ thuật
                </label>
                <div id="cid_70" class="form-input-wide" data-layout="full">
                    <textarea id="input_70" class="form-textarea" name="CauHinhKyThuat"
                        value="{{old('CauHinhKyThuat')}}" style="width:648px;height:163px" data-component="textarea"
                        aria-labelledby="label_70"></textarea>
                </div>
            </li>
            <li class="form-line form-line-column form-col-1" data-type="control_number" id="id_71">
                <label class="form-label form-label-top form-label-auto" id="label_71" for="input_71"> Giá trị ban đầu
                </label>
                <div id="cid_71" class="form-input-wide" data-layout="half">
                    <span class="form-sub-label-container" style="vertical-align:top">
                        <input type="number" id="input_68" name="GiaTriBanDau" data-type="input-number"
                            class=" form-number-input form-textbox" data-defaultvalue="" style="width:310px" size="310"
                            value="{{old('GiaTriBanDau')}}" data-component="number"
                            aria-labelledby="label_71 sublabel_input_71" step="any" />
                        <label class="form-sub-label" for="input_71" id="sublabel_input_71" style="min-height:13px"
                            aria-hidden="false"> Đơn vị: % </label>
                    </span>
                </div>
            </li>

            <li class="form-line form-line-column form-col-4" data-type="control_spinner" id="id_72">
                <label class="form-label form-label-top form-label-auto" id="label_72" for="input_72"> Giá trị hiện tại
                </label>
                <div id="cid_72" class="form-input-wide" data-layout="half">
                    <span class="form-sub-label-container" style="vertical-align:top">
                        <input type="number" id="input_72" name="GiaTriHienTai" data-type="input-spinner"
                            class="form-number-input  form-textbox" data-defaultvalue=""
                            value="{{ old('GiaTriHienTai') }}" data-component="number"
                            aria-labelledby="label_72 sublabel_input_72" />
                        <label class="form-sub-label" for="input_72" id="sublabel_input_72" style="min-height:13px"
                            aria-hidden="false"> Đơn vị: % </label>
                    </span>
                </div>
            </li>
            <li class="form-line" data-type="control_spinner" id="id_73">
                <label class="form-label form-label-top form-label-auto" id="label_73" for="input_73"> Khấu hao hàng năm
                </label>
                <div id="cid_73" class="form-input-wide" data-layout="half">
                    <span class="form-sub-label-container" style="vertical-align:top">
                        <input type="number" id="input_73" name="KhauHaoHangNam" data-type="input-spinner"
                            class="form-number-input  form-textbox" data-defaultvalue=""
                            value="{{ old('KhauHaoHangNam') }}" data-component="number"
                            aria-labelledby="label_73 sublabel_input_73" />
                        <label class="form-sub-label" for="input_73" id="sublabel_input_73" style="min-height:13px"
                            aria-hidden="false"> Đơn vị: % </label>
                    </span>
                </div>
            </li>
            <li class="form-line form-line-column form-col-1" data-type="control_number" id="id_89">
                <label class="form-label form-label-top form-label-auto" id="label_89" for="input_89"> Năm sử dụng
                </label>
                <div id="cid_89" class="form-input-wide" data-layout="half">
                    <input type="number" id="input_89" name="NamSuDung" data-type="input-number"
                        class=" form-number-input form-textbox" data-defaultvalue="" style="width:310px" size="310"
                        value="{{ old('NamSuDung') }}" placeholder="yyyy" data-numbermin="1900" data-numbermax="2100"
                        data-component="number" aria-labelledby="label_89" step="any" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_86">
                <label class="form-label form-label-top form-label-auto" id="label_86" for="lite_mode_86"> Ngày bàn giao
                </label>
                <div id="cid_86" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <!-- -->
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="date" name="NgayBanGiao"
                                class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_86" size="12"
                                data-maxlength="12" maxLength="12" data-age="" value="{{ old('NgayBanGiao') }}"
                                data-format="mmddyyyy" data-seperator="/" placeholder="MM/DD/YYYY"
                                autoComplete="section-input_86 off" aria-labelledby="label_86" />
                            <img class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                id="input_86_pick" src="https://cdn.jotfor.ms/images/calendar.png"
                                data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
                            <label class="form-sub-label is-empty" for="lite_mode_86" id="sublabel_86_litemode"
                                style="min-height:13px" aria-hidden="false"> </label>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_77">
                <label class="form-label form-label-top form-label-auto" id="label_77" for="input_77"> Đơn vị bảo trì
                </label>
                <div id="cid_77" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_77" name="idDonViBaoTri">
                        <option value=""> Chọn đơn vị bảo trì </option>
                        @foreach ($DSDonViBaoTri as $DonViBaoTri )
                        <option value="{{$DonViBaoTri->idDonViBaoTri}}" {{old('idDonViBaoTri')==$DonViBaoTri->
                            idDonViBaoTri ? 'selected' : ''}}>
                            {{$DonViBaoTri->TenDonViBaoTri}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </li>


            <li class="form-line" data-type="control_button" id="id_36">
                <div id="cid_36" class="form-input-wide" data-layout="full">
                    <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                        <button style="background-color:#036df8;" id="input_36" type="submit"
                            class="form-submit-button submit-button jf-form-buttons jsTest-submitField"
                            data-component="button" data-content="">
                            Thêm
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
    <script>
        JotForm.showJotFormPowered = "new_footer";
    </script>
    <script>
        JotForm.poweredByText = "Powered by Jotform";
    </script>
    <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="220091442781451" />
    <script type="text/javascript">
        var all_spc = document.querySelectorAll("form[id='220091442781451'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "220091442781451-220091442781451";
}
    </script>

</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.30073"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.30073"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

{{-- dropdown dependent --}}
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>

<script>
    $(document).ready(function () {
                $('#idNhomThietBi').on('change', function () {
                let id = $(this).val();
                $('#idLoaiThietBi').empty();
                $('#idLoaiThietBi').append(`<option value="" >Chọn loại thiết bị</option>`);
                $.ajax({
                type: 'GET',
                url: 'thietbi/layloaithietbitunhomthietbi/'+ id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#idLoaiThietBi').empty();
                $('#idLoaiThietBi').append(`<option value="" >Chọn loại thiết bị</option>`);
                response.forEach(element => {
                    $('#idLoaiThietBi').append(`<option value="${element['idLoaiThietBi']}"> ${element['idLoaiThietBi']} </option>`);
                    });
                }
            });
        });
    });
</script>

@endsection