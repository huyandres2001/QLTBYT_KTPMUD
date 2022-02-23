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

<form class="jotform-form" action="/thietbi/postsuachua" method="post" id="220092097471454"
    accept-charset="utf-8" autocomplete="on">
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
                            Thông tin
                        </h1>
                    </div>
                </div>
            </li>
            <li class="form-line form-line-column form-col-8" data-type="control_image" id="id_105">
                <div id="cid_105" class="form-input-wide" data-layout="full">
                    <div style="text-align:center">
                        <img alt="" class="form-image" style="border:0"
                            src="{{ empty($ThietBi->AnhMinhHoa) ? url('upload/no_image.jpg') : url( $ThietBi->AnhMinhHoa) }}"
                            height="200px" width="199px" data-component="image" />
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
                    <input type="text" id="input_44" data-type="input-textbox" class="form-readonly form-textbox"
                        data-defaultvalue="" style="width:433px" size="433" value="{{$ThietBi->Model}}" tabindex="-1"
                        data-component="textbox" aria-labelledby="label_44" readonly="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_45">
                <label class="form-label form-label-top form-label-auto" id="label_45" for="input_45"> Serial </label>
                <div id="cid_45" class="form-input-wide" data-layout="half">
                    <input type="text" name="SerialThietBiHong" id="input_45" data-type="input-textbox"
                        class="form-readonly form-textbox" data-defaultvalue="" style="width:433px" size="433"
                        value="{{$ThietBi->Serial}}" tabindex="-1" data-component="textbox" aria-labelledby="label_45"
                        readonly="" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-15" data-type="control_dropdown" id="id_82">
                <label class="form-label form-label-top form-label-auto" id="label_82" for="input_82"> Khoa phòng sử
                    dụng </label>
                <div id="cid_82" class="form-input-wide" data-layout="half">
                    <select disabled readonly class="form-dropdown" style="width:310px;" id="input_82">
                        <option value="{{$ThietBi->idKhoaPhongSuDung}}"> {{$ThietBi->idKhoaPhongSuDung}} </option>
                    </select>
                </div>
            </li>
            <li class="form-line form-line-column form-col-11" data-type="control_number" id="id_57">
                <label class="form-label form-label-top form-label-auto" id="label_57" for="input_57"> Năm sản xuất
                </label>
                <div id="cid_57" class="form-input-wide" data-layout="half">
                    <input disabled readonly type="number" id="input_57" data-type="input-number"
                        class=" form-number-input form-textbox" data-defaultvalue="" style="width:310px" size="310"
                        value="{{$ThietBi->NamSanXuat}}" data-numbermin="1900" data-numbermax="2100"
                        data-component="number" aria-labelledby="label_57" step="any" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-9" data-type="control_textbox" id="id_52">
                <label class="form-label form-label-top form-label-auto" id="label_52" for="input_52"> Hãng sản xuất
                </label>
                <div id="cid_52" class="form-input-wide" data-layout="half">
                    <input disabled readonly type="text" id="input_52" data-type="input-textbox" class="form-textbox"
                        data-defaultvalue="" style="width:310px" size="310" value="{{$ThietBi->HangSanXuat}}"
                        data-component="textbox" aria-labelledby="label_52" />
                </div>
            </li>
            <li class="form-line form-line-column form-col-9" data-type="control_datetime" id="id_64">
                <label class="form-label form-label-top form-label-auto" id="label_64" for="lite_mode_64"> Ngày nhập kho
                </label>
                <div id="cid_64" class="form-input-wide" data-layout="half">
                    <div data-wrapper-react="true">
                        <span class="form-sub-label-container" style="vertical-align:top">
                            <input disabled readonly type="date"
                                class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_64" size="12"
                                data-maxlength="12" maxLength="12" data-age="" value="{{$ThietBi->NgayNhapKho}}"
                                data-format="mmddyyyy" data-seperator="/" autoComplete="section-input_64 off"
                                aria-labelledby="label_64" />
                            <img class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                id="input_64_pick" src="https://cdn.jotfor.ms/images/calendar.png"
                                data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
                            <label class="form-sub-label is-empty" for="lite_mode_64" id="sublabel_64_litemode"
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
                            <input disabled readonly type="date"
                                class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_66" size="12"
                                data-maxlength="12" maxLength="12" data-age="" value="{{$ThietBi->NgayHetHanBaoHanh}}"
                                data-format="mmddyyyy" data-seperator="/" autoComplete="section-input_66 off"
                                aria-labelledby="label_66" />
                            <label class="form-sub-label is-empty" for="lite_mode_66" id="sublabel_66_litemode"
                                style="min-height:13px" aria-hidden="false"> </label>
                        </span>
                    </div>
                </div>
            </li>
            
            
            <li style="clear:both">
            </li>
        </ul>
    </div>
    <script>
        JotForm.showJotFormPowered = "new_footer";
    </script>
    <script>
        JotForm.poweredByText = "Powered by Jotform";
    </script>
    <script type="text/javascript">
        var all_spc = document.querySelectorAll("form[id='220092097471454'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "220092097471454-220092097471454";
}
    </script>

</form>

<section class="table_area">
    
    <div class="panel">
        <div class="panel_header">
            <div class="panel_title" style="text-align:center"><span>Lịch sử sửa chữa</span></div>

        </div>
        <div class="panel_body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ngày sửa chữa</th>
                            <th>Ngày sửa xong</th>
                            <th>Tình trạng sau khi sửa</th>
                            <th>Chi phí</th>
                            <th>Ghi Chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach ($DSSuaChua as $SuaChua)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $SuaChua->NgaySuaChua }}</td>
                            <td>{{ $SuaChua->NgaySuaXong }}</td>
                            <td>{{ $SuaChua->TinhTrangSauKhiSua }}</td>
                            <td>{{ $SuaChua->ChiPhi }}</td>
                            <td>{{ $SuaChua->GhiChu }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                    
                </table>
                {{-- {{ $DSThietBi->links('pagination::bootstrap-4') }} --}}
            </div>
        </div>
    </div> <!-- /table -->
</section>
<script>
    $(document).ready(function() {
        $('#NhomThietBi').change(function() {
            
            var idNhomThietBi = $(this).val();
            $.get('/ajax/LoaiThietBi/' + idNhomThietBi, function(data) {
                //alert(data);
                $('#LoaiThietBi').html(data);
            });
            //alert(idNhomThietBi);
        });
    });

</script>
@endsection