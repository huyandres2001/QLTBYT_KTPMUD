@extends('user.user_master')

@section('user')

{{-- <div class="row" style="padding: 20px;">
    <div class="col-md-6">
        <h3>Change Password</h3>
        <form method="post" action="{{ route('user.password.update') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" name="name" class="form-control" placeholder="{{ $user->HoVaTen }}" disabled
                    readonly>
                <!---->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="{{ $user->Email }}" disabled
                    readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Current Password</label>
                <input type="password" name="current_password" id="current_password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">New Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>
</div> --}}



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

<form class="jotform-form" action="{{ route('user.password.update') }}" method="post" name="form_220092097471454"
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
                            Đổi mật khẩu
                        </h1>
                    </div>
                </div>
            </li>
            <li class="form-line fixed-width" data-type="control_textbox" id="id_42">
                <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42"> Họ và tên
                </label>
                <div id="cid_42" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_42" data-type="input-textbox" class="form-readonly form-textbox"
                        data-defaultvalue="" style="width:790px" size="790" value="{{$user->HoVaTen}}"
                        tabindex="-1" data-component="textbox" aria-labelledby="label_42" disabled readonly />
                </div>
            </li>

            <li class="form-line fixed-width" data-type="control_textbox" id="id_42">
                <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42"> Email
                </label>
                <div id="cid_42" class="form-input-wide" data-layout="half">
                    <input type="text" id="input_42" data-type="input-textbox" class="form-readonly form-textbox"
                        data-defaultvalue="" style="width:790px" size="790" value="{{$user->Email}}"
                        tabindex="-1" data-component="textbox" aria-labelledby="label_42" disabled readonly />
                </div>
            </li>

            <li class="form-line fixed-width" data-type="control_textbox" id="id_42">
                <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42"> Mật khẩu cũ
                </label>
                <div id="cid_42" class="form-input-wide" data-layout="half">
                    <input type="password" id="input_42" name="current_password" data-type="input-textbox" class="form-readonly form-textbox"
                        data-defaultvalue="" style="width:790px" size="790" name
                        tabindex="-1" data-component="textbox" aria-labelledby="label_42"  />
                </div>
            </li>

            <li class="form-line fixed-width" data-type="control_textbox" id="id_42">
                <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42"> Mật khẩu mới
                </label>
                <div id="cid_42" class="form-input-wide" data-layout="half">
                    <input type="password" id="input_42" name="password" data-type="input-textbox" class="form-readonly form-textbox"
                        data-defaultvalue="" style="width:790px" size="790" 
                        tabindex="-1" data-component="textbox" aria-labelledby="label_42" />
                </div>
            </li>

            <li class="form-line fixed-width" data-type="control_textbox" id="id_42">
                <label class="form-label form-label-top form-label-auto" id="label_42" for="input_42"> Xác nhận mật khẩu mới
                </label>
                <div id="cid_42" class="form-input-wide" data-layout="half">
                    <input type="password" name="password_confirmation" id="input_42" data-type="input-textbox" class="form-readonly form-textbox"
                        data-defaultvalue="" style="width:790px" size="790" 
                        tabindex="-1" data-component="textbox" aria-labelledby="label_42"  />
                </div>
            </li>

            <li class="form-line" data-type="control_button" id="id_43">
                <div id="cid_43" class="form-input-wide" data-layout="full">
                    <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                        <button style="background-color:#036df8;" id="input_43" type="submit"
                            class="form-submit-button submit-button jf-form-buttons jsTest-submitField"
                            data-component="button" data-content="">
                            Đổi mật khẩu
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