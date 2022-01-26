@extends('user.user_master')
@section('content')
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.30166" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.30166" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.30166" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.30166" type="text/javascript">
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
if (window.JotForm && JotForm.accessible) $('input_44').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_44').hint('Tên vật tư...');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_45').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_45').hint('Tên vật tư...');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_51').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_51', 'Ghi ch\u00fa...' );

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("50", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("50", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });
 JotForm.formatDate({date:(new Date()), dateField:$("id_"+50)});
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"clickTo","qid":"40","text":"Ban giao thiết bi","type":"control_head"},null,{"description":"","name":"typeA","qid":"42","subLabel":"","text":"Ten thiết bi","type":"control_textbox"},{"name":"banGiao","qid":"43","text":"Ban giao","type":"control_button"},{"description":"","name":"tenVt","qid":"44","subLabel":"","text":"Model","type":"control_textbox"},{"description":"","name":"model","qid":"45","subLabel":"","text":"Serial","type":"control_textbox"},{"description":"","name":"typeA46","qid":"46","subLabel":"","text":"Chon can bộ khoa phong phu trach","type":"control_dropdown"},{"description":"","name":"typeA47","qid":"47","subLabel":"","text":"Chon Khoa Phong - Ban","type":"control_dropdown"},{"description":"","name":"chonCan","qid":"48","subLabel":"","text":"Chon can bộ sử dung","type":"control_dropdown"},null,{"description":"","name":"date","qid":"50","text":"Ngay ban giao","type":"control_datetime"},{"description":"","name":"typeA51","qid":"51","subLabel":"","text":"Ghi chu","type":"control_textarea"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"clickTo","qid":"40","text":"Ban giao thiết bi","type":"control_head"},null,{"description":"","name":"typeA","qid":"42","subLabel":"","text":"Ten thiết bi","type":"control_textbox"},{"name":"banGiao","qid":"43","text":"Ban giao","type":"control_button"},{"description":"","name":"tenVt","qid":"44","subLabel":"","text":"Model","type":"control_textbox"},{"description":"","name":"model","qid":"45","subLabel":"","text":"Serial","type":"control_textbox"},{"description":"","name":"typeA46","qid":"46","subLabel":"","text":"Chon can bộ khoa phong phu trach","type":"control_dropdown"},{"description":"","name":"typeA47","qid":"47","subLabel":"","text":"Chon Khoa Phong - Ban","type":"control_dropdown"},{"description":"","name":"chonCan","qid":"48","subLabel":"","text":"Chon can bộ sử dung","type":"control_dropdown"},null,{"description":"","name":"date","qid":"50","text":"Ngay ban giao","type":"control_datetime"},{"description":"","name":"typeA51","qid":"51","subLabel":"","text":"Ghi chu","type":"control_textarea"}]);}, 20); 
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
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.30166" />
<link type="text/css" rel="stylesheet"
    href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.30166" />
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
        height: 100%;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
    }

    .supernova {
        background-image: url("https://www.jotform.com/uploads/ecem/form_files/free_soul.28.jpg");
    }

    #stage {
        background-image: url("https://www.jotform.com/uploads/ecem/form_files/free_soul.28.jpg");
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

<form class="jotform-form" action="/thietbi/postbangiao/{{$ThietBi->id}}" method="post" name="form_220092097471454"
    id="220092097471454" accept-charset="utf-8" autocomplete="on">
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
                            Bàn giao thiết bị
                        </h1>
                    </div>
                </div>
            </li>
            <li class="form-line fixed-width" data-type="control_textbox" id="id_42">
                <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42"> Tên thiết bị
                </label>
                <div id="cid_42" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_42" data-type="input-textbox" class="form-readonly form-textbox"
                        data-defaultvalue="" style="width:790px" size="790" value="{{$ThietBi->TenThietBi}}"
                        tabindex="-1" data-component="textbox" aria-labelledby="label_42" readonly="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_44">
                <label class="form-label form-label-top form-label-auto" id="label_44" for="input_44"> Model </label>
                <div id="cid_44" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_44" name="q44_tenVt" data-type="input-textbox"
                        class="form-readonly form-textbox" data-defaultvalue="" style="width:433px" size="433"
                        value="{{$ThietBi->Model}}" tabindex="-1" data-component="textbox" aria-labelledby="label_44"
                        readonly="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_45">
                <label class="form-label form-label-top form-label-auto" id="label_45" for="input_45"> Serial </label>
                <div id="cid_45" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_45" name="q45_model" data-type="input-textbox"
                        class="form-readonly form-textbox" data-defaultvalue="" style="width:433px" size="433"
                        value="{{$ThietBi->Serial}}" tabindex="-1" data-component="textbox" aria-labelledby="label_45"
                        readonly="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_47">
                <label class="form-label form-label-top" id="label_47" for="input_47"> Chọn Khoa Phòng - Ban
                    <span class="form-required">
                        *
                    </span>
                </label>
                <div id="cid_47" class="form-input-wide" data-layout="half">
                    <select name="idKhoaPhongSuDung" class="form-dropdown" style="width:310px;" id="input_47">
                        {{-- bảng thiết bị liên kết với bảng khoa phòng qua khóa chính: idKhoaPhongSuDung, khóa ngoại: idKhoaPhong --}}
                        <option value=""> Chọn Khoa Phòng - Ban... </option>
                        @foreach ($DSKhoaPhongSuDung as $KhoaPhongSuDung )
                        <option value="{{$KhoaPhongSuDung->idKhoaPhong}}"
                            {{old('idKhoaPhongSuDung')==$KhoaPhongSuDung->idKhoaPhong ? 'selected' : ''}}>
                            {{$KhoaPhongSuDung->TenKhoaPhong}} </option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_46">
                <label class="form-label form-label-top" id="label_46" for="input_46"> Chọn cán bộ khoa phòng phụ trách
                    <span class="form-required">
                        *
                    </span>
                </label>
                <div id="cid_46" class="form-input-wide" data-layout="half">
                    {{-- bảng thiết bị liên kết với bảng người dùng qua khóa chính: idCanBoKhoaPhongPhuTrach, khóa ngoại: idNguoiDung --}}
                    <select class="form-dropdown" style="width:310px;" id="input_46" name="idCanBoKhoaPhongPhuTrach">
                        <option value=""> Chọn cán bộ khoa phòng phụ trách... </option>
                        @foreach ($DSCanBoKhoaPhongPhuTrach as $CanBoKhoaPhongPhuTrach )
                        <option value="{{$CanBoKhoaPhongPhuTrach->idNguoiDung}}"
                            {{old('idCanBoKhoaPhongPhuTrach')==$CanBoKhoaPhongPhuTrach->idNguoiDung ? 'selected' : ''}}>
                            {{$CanBoKhoaPhongPhuTrach->HoVaTen}} </option>
                        @endforeach
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-6" data-type="control_textarea" id="id_51">
                <label class="form-label form-label-top form-label-auto" id="label_51" for="input_51"> Ghi chú </label>
                <div id="cid_51" class="form-input-wide" data-layout="full">
                    <textarea id="input_51" class="form-textarea" name="GhiChu" style="width:648px;height:163px"
                        data-component="textarea" aria-labelledby="label_51"></textarea>
                </div>
            </li>
            <li class="form-line form-line-column form-col-7" data-type="control_datetime" id="id_50">
                <label class="form-label form-label-top" id="label_50" for="lite_mode_50"> Ngày bàn giao </label>
                <div id="cid_50" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input name="NgayBanGiao" type="date" class="form-textbox validate[limitDate, validateLiteDate]"
                                id="lite_mode_50" size="12" data-maxlength="12" maxLength="12" data-age=""
                                value="{{old('NgayBanGiao')}}" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY"
                                autoComplete="section-input_50 off" aria-labelledby="label_50" />
                            <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_50_pick"
                                src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                aria-hidden="true" data-allow-time="No" data-version="v2" />
                            <label class="form-sub-label is-empty" for="lite_mode_50" id="sublabel_50_litemode"
                                style="min-height:13px" aria-hidden="false"> </label>
                        </span>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_button" id="id_43">
                <div id="cid_43" class="form-input-wide" data-layout="full">
                    <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                        <button  style="background-color:#036df8;" id="input_43" type="submit"
                            class="form-submit-button submit-button jf-form-buttons jsTest-submitField"
                            data-component="button" data-content="">
                            Bàn giao
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
    <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="220092097471454" />
    <script type="text/javascript">
        var all_spc = document.querySelectorAll("form[id='220092097471454'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "220092097471454-220092097471454";
}
    </script>

</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.30166"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.30166"></script>
@endsection