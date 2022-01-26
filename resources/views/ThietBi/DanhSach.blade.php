@extends('user.user_master')
@section('content')

@php
// dd($DSThietBi[0]->id);
@endphp


<section class="table_area">
    <br>
    <h1 style="text-align:center">TỔNG SỐ THIẾT BỊ: {{$Count}}</h1>
    <br>
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

                            <td>{{ $ThietBi->Model }}</td>

                            <td>{{ $ThietBi->Serial }}</td>

                            <td>{{ $ThietBi->TinhTrang }}</td>

                            @if($ThietBi->idKhoaPhongSuDung)
                            <td>{{ $ThietBi->idKhoaPhongSuDung }}</td>
                            @else
                            <td style="color:red;">Không có dữ liệu</td>
                            @endif

                            @if($ThietBi->idNhomThietBi)
                            <td>{{ $ThietBi->NhomThietBi->TenNhomThietBi }}</td>
                            @else
                            <td style="color:red;">Không có dữ liệu</td>
                            @endif

                            @if($ThietBi->idLoaiThietBi)
                            <td>{{ $ThietBi->idLoaiThietBi }}</td>
                            @else
                            <td style="color:red;">Không có dữ liệu</td>
                            @endif

                            <td>
                                @if ($ThietBi->TinhTrang == 'Đang Báo Hỏng')
                                <a href="#"><i class="fa fa-plus-square" style="font-size: 15px; color:#000000;"
                                        title="Tạo lịch sửa chữa" aria-hidden="true"></i></a>
                                @endif

                                @if ($ThietBi->TinhTrang == 'Mới')
                                <a href="/thietbi/getbangiao/{{$ThietBi->id}}" ><i class="fa fa-check"
                                        style="font-size: 15px; color:#1ebb33;" title="Bàn giao thiết bị"
                                        aria-hidden="true"></i></a>
                                @endif
                                @if ($ThietBi->TinhTrang == 'Đang Sử Dụng')
                                <a href="/thietbi/getbaohong/{{$ThietBi->id}}" ><i class="fas fa-exclamation-triangle"
                                        style="font-size: 15px; color:#ff0000;" title="Báo hỏng thiết bị"
                                        aria-hidden="true"></i></a>
                                @endif
                                @if ($ThietBi->TinhTrang == 'Ngừng Sử Dụng')
                                <a href="/thietbi/getthanhly/{{$ThietBi->id}}" ><i class="fas fa-handshake"
                                        style="font-size: 15px; color:#000000;" title="Thanh lý thiết bị"
                                        aria-hidden="true"></i></a>
                                @endif
                                <a href="/thietbi/xem/{{$ThietBi->id}}"><i class="fa fa-eye"
                                        style="font-size: 15px;color:#00cbfd" title="Xem hồ sơ thiết bị"
                                        aria-hidden="true"></i></a>
                                <a href="/thietbi/getsua/{{$ThietBi->id}}"><i class="fa fa-edit"
                                        style="font-size: 15px;" title="Chỉnh sửa thông tin" aria-hidden="true"></i></a>
                                </a>
                                <a href="/thietbi/xoa/{{$ThietBi->id}}" onclick="return confirm('Bạn có muốn xóa?')"><i
                                        class="fa fa-trash" style="font-size: 15px;color:#ff0404" title="Xóa thiết bị"
                                        aria-hidden="true"></i>
                                </a>
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