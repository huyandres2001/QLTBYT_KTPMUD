@extends('user.user_master')

@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
</div>
<script type="text/javascript">
    $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
</script>
@endsection