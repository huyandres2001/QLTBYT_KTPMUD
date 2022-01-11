@extends('user.user_master')
@section('content')
<section class="table_area">
    <div class="panel">
        <div class="panel_header">
            <div class="panel_title" style="text-align:center"><span>Danh Sách Thiết Bị</span></div>
            
        </div>
        <div class="panel_body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Thiết Bị</th>
                            <th>Ảnh Minh Họa</th>
                            <th>Mã Thiết Bị</th>
                            <th>Model</th>
                            <th>Serial</th>
                            <th>Tình Trạng</th>
                            <th>Khoa Phòng</th>
                            <th>Nhóm Thiết Bị</th>
                            <th>Loại Thiết Bị</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach ($DSThietBi as $ThietBi)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $ThietBi->TenThietBi }}</td>
                            <td>
                                <div class="mb-3">
                                    <img id="showImage"
                                        src=" {{ empty($ThietBi->AnhMinhHoa) ? url('upload/no_image.jpg') : url('upload/ThietBi/' . $user->AnhMinhHoa) }}"
                                        style="width:100px; height: 100px;">
                                </div>
                            </td>
                            <td>{{ $ThietBi->idThietBi }}</td>
                            <td>{{ $ThietBi->Model }}</td>
                            <td>{{ $ThietBi->Serial }}</td>
                            <td>{{ $ThietBi->TinhTrang }}</td>
                            <td>{{ $ThietBi->idKhoaPhongSuDung }}</td>
                            <td>{{ $ThietBi->NhomThietBi->TenNhomThietBi }}</td>
                            <td>{{ $ThietBi->idLoaiThietBi }}</td>
                            <td>
                                @if ($ThietBi->TinhTrang == 'Đang Báo Hỏng')
                                <a href="#"><i class="fa fa-plus-square" style="font-size: 15px; color:#000000;"
                                        title="Tạo lịch sửa chữa" aria-hidden="true"></i></a>
                                @endif
                                <a href="#"><i class="fa fa-eye" style="font-size: 15px;color:#00cbfd"
                                        title="Xem hồ sơ thiết bị" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-edit" style="font-size: 15px;" title="Chỉnh sửa thông tin"
                                        aria-hidden="true"></i></a>
                                <a href="#" onclick="return confirm('Bạn có muốn xóa?');"><i class="fa fa-trash"
                                        style="font-size: 15px;color:#ff0404" title="Xóa thiết bị"
                                        aria-hidden="true"></i></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $DSThietBi->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div> <!-- /table -->
</section>
@endsection