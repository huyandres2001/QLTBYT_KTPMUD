<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.30025" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/imageinfo.js?v=3.3.30025" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/file-uploader/fileuploader.js?v=3.3.30025"></script>
<script src="https://cdn02.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.30025" type="text/javascript"></script>
<script defer src="https://cdn03.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.30025" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.30025" type="text/javascript">
</script>
<script type="text/javascript">
    JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

   JotForm.setConditions([{"action":{"field":"31","visibility":"Show"},"link":"Any","terms":[{"field":"10","operator":"equals","value":"Yes"}],"type":"field"}]);
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
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("64", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("64", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("65", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("65", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });

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
    if(typeof $('input_71').spinner !== 'undefined') {$('input_71').spinner({ imgPath:'https://cdn.jotfor.ms/images/', width: '310', maxValue:'', minValue:'', allowNegative: false, addAmount: 1, value:'' });}
    $('input_71').up(2).setAttribute('tabindex','');
    if(typeof $('input_72').spinner !== 'undefined') {$('input_72').spinner({ imgPath:'https://cdn.jotfor.ms/images/', width: '310', maxValue:'', minValue:'', allowNegative: false, addAmount: 1, value:'' });}
    $('input_72').up(2).setAttribute('tabindex','');
    if(typeof $('input_73').spinner !== 'undefined') {$('input_73').spinner({ imgPath:'https://cdn.jotfor.ms/images/', width: '310', maxValue:'', minValue:'', allowNegative: false, addAmount: 1, value:'' });}
    $('input_73').up(2).setAttribute('tabindex','');

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("74", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("74", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("75", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("75", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
if (window.JotForm && JotForm.accessible) $('input_77').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_77').hint('Đơn vị bảo trì...');
       }, 20);
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"them","qid":"36","text":"Them","type":"control_button"},null,null,null,{"name":"clickTo","qid":"40","text":"Nhập thiết bi mới","type":"control_head"},null,{"description":"","name":"typeA","qid":"42","subLabel":"","text":"Ten thiết bi","type":"control_textbox"},{"description":"","name":"typeA43","qid":"43","subLabel":"","text":"Model","type":"control_textbox"},{"description":"","name":"model","qid":"44","subLabel":"","text":"Serial","type":"control_textbox"},{"description":"","name":"serial","qid":"45","subLabel":"","text":"Số luợng","type":"control_textbox"},{"description":"","name":"donVi","qid":"46","subLabel":"","text":"Don vi","type":"control_textbox"},null,{"description":"","name":"typeA48","qid":"48","subLabel":"","text":"Nhom thiết bi","type":"control_dropdown"},{"description":"","name":"nhomThit","qid":"49","subLabel":"","text":"Loai thiết bi","type":"control_dropdown"},{"description":"","name":"loaiThit","qid":"50","subLabel":"","text":"Mức dộ rui ro","type":"control_dropdown"},{"description":"","name":"donVi51","qid":"51","subLabel":"","text":"Nha cung cấp","type":"control_textbox"},{"description":"","name":"nhaCung","qid":"52","subLabel":"","text":"Hang san xuất","type":"control_textbox"},{"description":"","name":"xutX53","qid":"53","subLabel":"","text":"Xuất xứ","type":"control_textbox"},null,null,null,{"description":"","name":"namSan57","qid":"57","subLabel":"","text":"Nam san xuất","type":"control_number"},null,{"description":"","name":"xutX","qid":"59","subLabel":"","text":"Gia nhập","type":"control_textbox"},null,null,null,null,{"description":"","name":"date","qid":"64","text":"Ngay nhập kho","type":"control_datetime"},{"description":"","name":"ngayNhp","qid":"65","text":"Ngay kiểm dinh gần nhất","type":"control_datetime"},{"description":"","name":"ngayKim","qid":"66","text":"Ngay hết han bao hanh","type":"control_datetime"},null,{"description":"","name":"number","qid":"68","subLabel":"Nhập số thang","text":"Kiểm dinh dinh ki","type":"control_number"},{"description":"","name":"typeA69","qid":"69","subLabel":"","text":"Thong số ki thuật","type":"control_textarea"},{"description":"","name":"thongS","qid":"70","subLabel":"","text":"Cấu hinh ki thuật","type":"control_textarea"},{"description":"","name":"typeA71","qid":"71","subLabel":"Don vi: %","text":"Gia tri ban dầu","type":"control_spinner"},{"description":"","name":"giaTri","qid":"72","subLabel":"Don vi: %","text":"Gia tri hiện tai","type":"control_spinner"},{"description":"","name":"giaTri73","qid":"73","subLabel":"Don vi: %","text":"Khấu hao hang nam","type":"control_spinner"},{"description":"","name":"date74","qid":"74","text":"Nam sử dung","type":"control_datetime"},{"description":"","name":"namS","qid":"75","text":"Ngay ban giao","type":"control_datetime"},null,{"description":"","name":"xutX77","qid":"77","subLabel":"","text":"Don vi bao tri","type":"control_textbox"},null,null,{"description":"","name":"nhomThit80","qid":"80","subLabel":"","text":"Can bộ vật tu phu trach","type":"control_dropdown"},{"description":"","name":"canB","qid":"81","subLabel":"","text":"Can bộ khoa phong phu trach","type":"control_dropdown"},{"description":"","name":"canB82","qid":"82","subLabel":"","text":"Khoa phong sử dung","type":"control_dropdown"},{"description":"","name":"anhDai83","qid":"83","subLabel":"","text":"Anh minh hoa","type":"control_fileupload"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"them","qid":"36","text":"Them","type":"control_button"},null,null,null,{"name":"clickTo","qid":"40","text":"Nhập thiết bi mới","type":"control_head"},null,{"description":"","name":"typeA","qid":"42","subLabel":"","text":"Ten thiết bi","type":"control_textbox"},{"description":"","name":"typeA43","qid":"43","subLabel":"","text":"Model","type":"control_textbox"},{"description":"","name":"model","qid":"44","subLabel":"","text":"Serial","type":"control_textbox"},{"description":"","name":"serial","qid":"45","subLabel":"","text":"Số luợng","type":"control_textbox"},{"description":"","name":"donVi","qid":"46","subLabel":"","text":"Don vi","type":"control_textbox"},null,{"description":"","name":"typeA48","qid":"48","subLabel":"","text":"Nhom thiết bi","type":"control_dropdown"},{"description":"","name":"nhomThit","qid":"49","subLabel":"","text":"Loai thiết bi","type":"control_dropdown"},{"description":"","name":"loaiThit","qid":"50","subLabel":"","text":"Mức dộ rui ro","type":"control_dropdown"},{"description":"","name":"donVi51","qid":"51","subLabel":"","text":"Nha cung cấp","type":"control_textbox"},{"description":"","name":"nhaCung","qid":"52","subLabel":"","text":"Hang san xuất","type":"control_textbox"},{"description":"","name":"xutX53","qid":"53","subLabel":"","text":"Xuất xứ","type":"control_textbox"},null,null,null,{"description":"","name":"namSan57","qid":"57","subLabel":"","text":"Nam san xuất","type":"control_number"},null,{"description":"","name":"xutX","qid":"59","subLabel":"","text":"Gia nhập","type":"control_textbox"},null,null,null,null,{"description":"","name":"date","qid":"64","text":"Ngay nhập kho","type":"control_datetime"},{"description":"","name":"ngayNhp","qid":"65","text":"Ngay kiểm dinh gần nhất","type":"control_datetime"},{"description":"","name":"ngayKim","qid":"66","text":"Ngay hết han bao hanh","type":"control_datetime"},null,{"description":"","name":"number","qid":"68","subLabel":"Nhập số thang","text":"Kiểm dinh dinh ki","type":"control_number"},{"description":"","name":"typeA69","qid":"69","subLabel":"","text":"Thong số ki thuật","type":"control_textarea"},{"description":"","name":"thongS","qid":"70","subLabel":"","text":"Cấu hinh ki thuật","type":"control_textarea"},{"description":"","name":"typeA71","qid":"71","subLabel":"Don vi: %","text":"Gia tri ban dầu","type":"control_spinner"},{"description":"","name":"giaTri","qid":"72","subLabel":"Don vi: %","text":"Gia tri hiện tai","type":"control_spinner"},{"description":"","name":"giaTri73","qid":"73","subLabel":"Don vi: %","text":"Khấu hao hang nam","type":"control_spinner"},{"description":"","name":"date74","qid":"74","text":"Nam sử dung","type":"control_datetime"},{"description":"","name":"namS","qid":"75","text":"Ngay ban giao","type":"control_datetime"},null,{"description":"","name":"xutX77","qid":"77","subLabel":"","text":"Don vi bao tri","type":"control_textbox"},null,null,{"description":"","name":"nhomThit80","qid":"80","subLabel":"","text":"Can bộ vật tu phu trach","type":"control_dropdown"},{"description":"","name":"canB","qid":"81","subLabel":"","text":"Can bộ khoa phong phu trach","type":"control_dropdown"},{"description":"","name":"canB82","qid":"82","subLabel":"","text":"Khoa phong sử dung","type":"control_dropdown"},{"description":"","name":"anhDai83","qid":"83","subLabel":"","text":"Anh minh hoa","type":"control_fileupload"}]);}, 20); 
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
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.30025" />
<link type="text/css" rel="stylesheet"
    href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.30025" />
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

    .form-label.form-label-auto {

        display: block;
        float: none;
        text-align: left;
        width: 100%;

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
    /* Injected CSS Code */
</style>

<form class="jotform-form" action="https://submit.jotform.com/submit/220091442781451/" method="post"
    enctype="multipart/form-data" name="form_220091442781451" id="220091442781451" accept-charset="utf-8"
    autocomplete="on">
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
            <li class="form-line form-line-column form-col-1" data-type="control_fileupload" id="id_83">
                <label class="form-label form-label-top form-label-auto" id="label_83" for="input_83"> Ảnh minh họa
                </label>
                <div id="cid_83" class="form-input-wide" data-layout="full">
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
                                                Drag and drop files here
                                            </div>
                                            <div class="jfUpload-heading forMobile">
                                                Choose a file
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jfUpload-files-container">
                                    <input type="file" id="input_83" name="q83_anhDai83[]" multiple=""
                                        class="form-upload-multiple" data-imagevalidate="yes"
                                        data-file-accept=" jpg, jpeg, png" data-file-maxsize="10854"
                                        data-file-minsize="0" data-file-limit="" data-component="fileupload"
                                        aria-label="Chọn ảnh" />
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
            <li class="form-line fixed-width jf-required" data-type="control_textbox" id="id_42">
                <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42">
                    Tên thiết bị
                    <span class="form-required">
                        *
                    </span>
                </label>
                <div id="cid_42" class="form-input-wide jf-required" data-layout="half">
                    <input type="text" id="input_42" name="q42_typeA" data-type="input-textbox"
                        class="form-textbox validate[required]" data-defaultvalue="" style="width:790px" size="790"
                        value="" placeholder="Tên thiết bị..." data-component="textbox" aria-labelledby="label_42"
                        required="" />
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
                    <input type="text" id="input_43" name="q43_typeA43" data-type="input-textbox"
                        class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                        value="" placeholder="Model..." data-component="textbox" aria-labelledby="label_43"
                        required="" />
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
                    <input type="text" id="input_44" name="q44_model" data-type="input-textbox"
                        class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                        value="" placeholder="Serial" data-component="textbox" aria-labelledby="label_44" required="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-3 jf-required" data-type="control_textbox" id="id_45">
                <label class="form-label form-label-top form-label-auto" id="label_45" for="input_45">
                    Số lượng
                    <span class="form-required">
                        *
                    </span>
                </label>
                <div id="cid_45" class="form-input-wide jf-required" data-layout="half">
                    <input type="text" id="input_45" name="q45_serial" data-type="input-textbox"
                        class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310"
                        value="" placeholder="Số lượng..." data-component="textbox" aria-labelledby="label_45"
                        required="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-4" data-type="control_textbox" id="id_46">
                <label class="form-label form-label-top form-label-auto" id="label_46" for="input_46"> Đơn vị </label>
                <div id="cid_46" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_46" name="q46_donVi" data-type="input-textbox" class="form-textbox"
                        data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Đơn vị..."
                        data-component="textbox" aria-labelledby="label_46" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="id_48">
                <label class="form-label form-label-top form-label-auto" id="label_48" for="input_48"> Nhóm thiết bị
                </label>
                <div id="cid_48" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_48" name="q48_typeA48">
                        <option value=""> Chọn nhóm thiết bị </option>
                        <option value="Nhóm 1"> Nhóm 1 </option>
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-6" data-type="control_dropdown" id="id_49">
                <label class="form-label form-label-top form-label-auto" id="label_49" for="input_49"> Loại thiết bị
                </label>
                <div id="cid_49" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_49" name="q49_nhomThit">
                        <option value=""> Chọn loại thiết bị </option>
                        <option selected value=""> </option>
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-7" data-type="control_dropdown" id="id_50">
                <label class="form-label form-label-top form-label-auto" id="label_50" for="input_50"> Mức độ rủi ro
                </label>
                <div id="cid_50" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_50" name="q50_loaiThit">
                        <option value=""> Chọn mức độ rủi ro </option>
                        <option value="A"> A </option>
                        <option value="B"> B </option>
                        <option value="C"> C </option>
                        <option value="D"> D </option>
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-8" data-type="control_textbox" id="id_51">
                <label class="form-label form-label-top form-label-auto" id="label_51" for="input_51"> Nhà cung cấp
                </label>
                <div id="cid_51" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_51" name="q51_donVi51" data-type="input-textbox" class="form-textbox"
                        data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Nhà cung cấp..."
                        data-component="textbox" aria-labelledby="label_51" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-9" data-type="control_textbox" id="id_52">
                <label class="form-label form-label-top form-label-auto" id="label_52" for="input_52"> Hãng sản xuất
                </label>
                <div id="cid_52" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_52" name="q52_nhaCung" data-type="input-textbox" class="form-textbox"
                        data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Hãng sản xuất..."
                        data-component="textbox" aria-labelledby="label_52" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-10" data-type="control_textbox" id="id_53">
                <label class="form-label form-label-top form-label-auto" id="label_53" for="input_53"> Xuất xứ </label>
                <div id="cid_53" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_53" name="q53_xutX53" data-type="input-textbox" class="form-textbox"
                        data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Xuất xứ..."
                        data-component="textbox" aria-labelledby="label_53" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-11" data-type="control_number" id="id_57">
                <label class="form-label form-label-top form-label-auto" id="label_57" for="input_57"> Năm sản xuất
                </label>
                <div id="cid_57" class="form-input-wide" data-layout="half">
                    <input type="number" id="input_57" name="q57_namSan57" data-type="input-number"
                        class=" form-number-input form-textbox" data-defaultvalue="" style="width:310px" size="310"
                        value="" placeholder="yyyy" data-numbermin="1900" data-numbermax="3000" data-component="number"
                        aria-labelledby="label_57" step="any" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-12" data-type="control_textbox" id="id_59">
                <label class="form-label form-label-top form-label-auto" id="label_59" for="input_59"> Giá nhập </label>
                <div id="cid_59" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_59" name="q59_xutX" data-type="input-textbox"
                        class="form-textbox validate[Numeric]" data-defaultvalue="" style="width:310px" size="310"
                        value="" placeholder="VNĐ" data-component="textbox" aria-labelledby="label_59" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-13" data-type="control_dropdown" id="id_80">
                <label class="form-label form-label-top form-label-auto" id="label_80" for="input_80"> Cán bộ vật tư phụ
                    trách </label>
                <div id="cid_80" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_80" name="q80_nhomThit80">
                        <option value=""> Chọn cán bộ vật tư </option>
                        <option value="Dùng code"> Dùng code </option>
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-14" data-type="control_dropdown" id="id_81">
                <label class="form-label form-label-top form-label-auto" id="label_81" for="input_81"> Cán bộ khoa phòng
                    phụ trách </label>
                <div id="cid_81" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_81" name="q81_canB">
                        <option value=""> Chọn cán bộ khoa phòng </option>
                        <option value="Dùng code"> Dùng code </option>
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-15" data-type="control_dropdown" id="id_82">
                <label class="form-label form-label-top form-label-auto" id="label_82" for="input_82"> Khoa phòng sử
                    dụng </label>
                <div id="cid_82" class="form-input-wide" data-layout="half">
                    <select class="form-dropdown" style="width:310px;" id="input_82" name="q82_canB82">
                        <option value=""> Chọn khoa phòng </option>
                        <option value="Dùng code"> Dùng code </option>
                    </select>
                </div>
            </li>
            <li class="form-line" data-type="control_datetime" id="id_64">
                <label class="form-label form-label-top form-label-auto" id="label_64" for="lite_mode_64"> Ngày nhập kho
                </label>
                <div id="cid_64" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <div style="display:none">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="month_64"
                                    name="q64_date[month]" size="2" data-maxlength="2" data-age="" maxLength="2"
                                    value="" autoComplete="section-input_64 off"
                                    aria-labelledby="label_64 sublabel_64_month" />
                                <span class="date-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="month_64" id="sublabel_64_month"
                                    style="min-height:13px" aria-hidden="false"> Month </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="day_64"
                                    name="q64_date[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value=""
                                    autoComplete="section-input_64 off" aria-labelledby="label_64 sublabel_64_day" />
                                <span class="date-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="day_64" id="sublabel_64_day" style="min-height:13px"
                                    aria-hidden="false"> Day </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="year_64"
                                    name="q64_date[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value=""
                                    autoComplete="section-input_64 off" aria-labelledby="label_64 sublabel_64_year" />
                                <label class="form-sub-label" for="year_64" id="sublabel_64_year"
                                    style="min-height:13px" aria-hidden="false"> Year </label>
                            </span>
                        </div>
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" class="form-textbox validate[limitDate, validateLiteDate]"
                                id="lite_mode_64" size="12" data-maxlength="12" maxLength="12" data-age="" value=""
                                data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                autoComplete="section-input_64 off" aria-labelledby="label_64" />
                            <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_64_pick"
                                src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                aria-hidden="true" data-allow-time="No" data-version="v2" />
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
                        <input type="number" id="input_68" name="q68_number" data-type="input-number"
                            class=" form-number-input form-textbox" data-defaultvalue="" style="width:310px" size="310"
                            value="" data-component="number" aria-labelledby="label_68 sublabel_input_68" step="any" />
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
                        <div style="display:none">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="month_65"
                                    name="q65_ngayNhp[month]" size="2" data-maxlength="2" data-age="" maxLength="2"
                                    value="" autoComplete="section-input_65 off"
                                    aria-labelledby="label_65 sublabel_65_month" />
                                <span class="date-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="month_65" id="sublabel_65_month"
                                    style="min-height:13px" aria-hidden="false"> Month </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="day_65"
                                    name="q65_ngayNhp[day]" size="2" data-maxlength="2" data-age="" maxLength="2"
                                    value="" autoComplete="section-input_65 off"
                                    aria-labelledby="label_65 sublabel_65_day" />
                                <span class="date-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="day_65" id="sublabel_65_day" style="min-height:13px"
                                    aria-hidden="false"> Day </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="year_65"
                                    name="q65_ngayNhp[year]" size="4" data-maxlength="4" data-age="" maxLength="4"
                                    value="" autoComplete="section-input_65 off"
                                    aria-labelledby="label_65 sublabel_65_year" />
                                <label class="form-sub-label" for="year_65" id="sublabel_65_year"
                                    style="min-height:13px" aria-hidden="false"> Year </label>
                            </span>
                        </div>
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" class="form-textbox validate[limitDate, validateLiteDate]"
                                id="lite_mode_65" size="12" data-maxlength="12" maxLength="12" data-age="" value=""
                                data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                autoComplete="section-input_65 off" aria-labelledby="label_65" />
                            <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_65_pick"
                                src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                aria-hidden="true" data-allow-time="No" data-version="v2" />
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
                        <div style="display:none">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="month_66"
                                    name="q66_ngayKim[month]" size="2" data-maxlength="2" data-age="" maxLength="2"
                                    value="" autoComplete="section-input_66 off"
                                    aria-labelledby="label_66 sublabel_66_month" />
                                <span class="date-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="month_66" id="sublabel_66_month"
                                    style="min-height:13px" aria-hidden="false"> Month </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="day_66"
                                    name="q66_ngayKim[day]" size="2" data-maxlength="2" data-age="" maxLength="2"
                                    value="" autoComplete="section-input_66 off"
                                    aria-labelledby="label_66 sublabel_66_day" />
                                <span class="date-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="day_66" id="sublabel_66_day" style="min-height:13px"
                                    aria-hidden="false"> Day </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="year_66"
                                    name="q66_ngayKim[year]" size="4" data-maxlength="4" data-age="" maxLength="4"
                                    value="" autoComplete="section-input_66 off"
                                    aria-labelledby="label_66 sublabel_66_year" />
                                <label class="form-sub-label" for="year_66" id="sublabel_66_year"
                                    style="min-height:13px" aria-hidden="false"> Year </label>
                            </span>
                        </div>
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" class="form-textbox validate[limitDate, validateLiteDate]"
                                id="lite_mode_66" size="12" data-maxlength="12" maxLength="12" data-age="" value=""
                                data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
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
                    <textarea id="input_69" class="form-textarea" name="q69_typeA69" style="width:648px;height:163px"
                        data-component="textarea" aria-labelledby="label_69"></textarea>
                </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_textarea" id="id_70">
                <label class="form-label form-label-top form-label-auto" id="label_70" for="input_70"> Cấu hình kĩ thuật
                </label>
                <div id="cid_70" class="form-input-wide" data-layout="full">
                    <textarea id="input_70" class="form-textarea" name="q70_thongS" style="width:648px;height:163px"
                        data-component="textarea" aria-labelledby="label_70"></textarea>
                </div>
            </li>
            <li class="form-line form-line-column form-col-3" data-type="control_spinner" id="id_71">
                <label class="form-label form-label-top form-label-auto" id="label_71" for="input_71"> Giá trị ban đầu
                </label>
                <div id="cid_71" class="form-input-wide" data-layout="half">
                    <span class="form-sub-label-container" style="vertical-align:top">
                        <input type="number" id="input_71" name="q71_typeA71" data-type="input-spinner"
                            class="form-spinner-input  form-textbox" data-defaultvalue="" value=""
                            data-component="spinner" aria-labelledby="label_71 sublabel_input_71" />
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
                        <input type="number" id="input_72" name="q72_giaTri" data-type="input-spinner"
                            class="form-spinner-input  form-textbox" data-defaultvalue="" value=""
                            data-component="spinner" aria-labelledby="label_72 sublabel_input_72" />
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
                        <input type="number" id="input_73" name="q73_giaTri73" data-type="input-spinner"
                            class="form-spinner-input  form-textbox" data-defaultvalue="" value=""
                            data-component="spinner" aria-labelledby="label_73 sublabel_input_73" />
                        <label class="form-sub-label" for="input_73" id="sublabel_input_73" style="min-height:13px"
                            aria-hidden="false"> Đơn vị: % </label>
                    </span>
                </div>
            </li>
            <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_74">
                <label class="form-label form-label-top form-label-auto" id="label_74" for="lite_mode_74"> Năm sử dụng
                </label>
                <div id="cid_74" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <div style="display:none">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="month_74"
                                    name="q74_date74[month]" size="2" data-maxlength="2" data-age="" maxLength="2"
                                    value="" autoComplete="section-input_74 off"
                                    aria-labelledby="label_74 sublabel_74_month" />
                                <span class="date-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="month_74" id="sublabel_74_month"
                                    style="min-height:13px" aria-hidden="false"> Month </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="day_74"
                                    name="q74_date74[day]" size="2" data-maxlength="2" data-age="" maxLength="2"
                                    value="" autoComplete="section-input_74 off"
                                    aria-labelledby="label_74 sublabel_74_day" />
                                <span class="date-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="day_74" id="sublabel_74_day" style="min-height:13px"
                                    aria-hidden="false"> Day </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="year_74"
                                    name="q74_date74[year]" size="4" data-maxlength="4" data-age="" maxLength="4"
                                    value="" autoComplete="section-input_74 off"
                                    aria-labelledby="label_74 sublabel_74_year" />
                                <label class="form-sub-label" for="year_74" id="sublabel_74_year"
                                    style="min-height:13px" aria-hidden="false"> Year </label>
                            </span>
                        </div>
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" class="form-textbox validate[limitDate, validateLiteDate]"
                                id="lite_mode_74" size="12" data-maxlength="12" maxLength="12" data-age="" value=""
                                data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                autoComplete="section-input_74 off" aria-labelledby="label_74" />
                            <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_74_pick"
                                src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                aria-hidden="true" data-allow-time="No" data-version="v2" />
                            <label class="form-sub-label is-empty" for="lite_mode_74" id="sublabel_74_litemode"
                                style="min-height:13px" aria-hidden="false"> </label>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_75">
                <label class="form-label form-label-top form-label-auto" id="label_75" for="lite_mode_75"> Ngày bàn giao
                </label>
                <div id="cid_75" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <div style="display:none">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="month_75"
                                    name="q75_namS[month]" size="2" data-maxlength="2" data-age="" maxLength="2"
                                    value="" autoComplete="section-input_75 off"
                                    aria-labelledby="label_75 sublabel_75_month" />
                                <span class="date-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="month_75" id="sublabel_75_month"
                                    style="min-height:13px" aria-hidden="false"> Month </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="day_75"
                                    name="q75_namS[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value=""
                                    autoComplete="section-input_75 off" aria-labelledby="label_75 sublabel_75_day" />
                                <span class="date-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="day_75" id="sublabel_75_day" style="min-height:13px"
                                    aria-hidden="false"> Day </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" class="form-textbox validate[limitDate]" id="year_75"
                                    name="q75_namS[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value=""
                                    autoComplete="section-input_75 off" aria-labelledby="label_75 sublabel_75_year" />
                                <label class="form-sub-label" for="year_75" id="sublabel_75_year"
                                    style="min-height:13px" aria-hidden="false"> Year </label>
                            </span>
                        </div>
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" class="form-textbox validate[limitDate, validateLiteDate]"
                                id="lite_mode_75" size="12" data-maxlength="12" maxLength="12" data-age="" value=""
                                data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                autoComplete="section-input_75 off" aria-labelledby="label_75" />
                            <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_75_pick"
                                src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                aria-hidden="true" data-allow-time="No" data-version="v2" />
                            <label class="form-sub-label is-empty" for="lite_mode_75" id="sublabel_75_litemode"
                                style="min-height:13px" aria-hidden="false"> </label>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_77">
                <label class="form-label form-label-top form-label-auto" id="label_77" for="input_77"> Đơn vị bảo trì
                </label>
                <div id="cid_77" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_77" name="q77_xutX77" data-type="input-textbox" class="form-textbox"
                        data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Đơn vị bảo trì..."
                        data-component="textbox" aria-labelledby="label_77" />
                </div>
            </li>
            <li class="form-line" data-type="control_button" id="id_36">
                <div id="cid_36" class="form-input-wide" data-layout="full">
                    <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                        <button id="input_36" type="submit"
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
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.30025"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.30025"></script>