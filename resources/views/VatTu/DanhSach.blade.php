@extends('user.user_master')
@section('content')

@php
// dd($DSThietBi[0]->id);
@endphp


<section class="table_area">
    <br>
    <h1 style="text-align:center">TỔNG SỐ VẬT TƯ: {{$Count}}</h1>
    <br>
    <form action="/vattu/timkiem" method="GET">
        @csrf
        <div class="content">
            <div class="row">
                <div class="col-sm-3 col-3">
                    <input class="form-control" name="Ten_Model_Serial" style=" border-radius: 10px;"
                        placeholder="Tên vật tư|model|serial">
                </div>
                <div class="col-sm-3 col-3">
                    <select style="height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                        name="TinhTrang" class="form-control">
                        <option value="">Chọn tình trạng</option>
                        @foreach ($DSTinhTrang as $TinhTrang)
                            <option value="{{ $TinhTrang->TinhTrang }}">{{ $TinhTrang->TinhTrang }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="col-sm-3 col-3">
                    <select style="height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                        name="LoaiVatTu" id="LoaiVatTu" class="form-control">
                        <option value="">Chọn loại vật tư</option>
                        @foreach ($DSLoaiVatTu as $LVT)
                            <option value="{{ $LVT->LoaiVatTu }}">{{ $LVT->LoaiVatTu }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4 col-4" style="text-align: center;">
                    <button class="btn btn-rounded " style="background-color: #009efb; color: white;float: left;"
                        type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                </div>
            </div>
        </div>
    </form>
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
                            <th>Tên vật tư</th>
                            <th>Ảnh Minh Họa</th>
                            <th>Model</th>
                            <th>Serial</th>
                            <th>Tình Trạng</th>
                            <th>Số lượng</th>
                            <th>Đã dùng</th>
                            <th>Loại vật tư</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach ($DSVatTu as $VatTu)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $VatTu->TenVatTu }}</td>

                            <td><img alt="" class="form-image" style="border:0"
                                src="{{ empty($VatTu->AnhMinhHoa) ? url('upload/no_image.jpg') : url( $VatTu->AnhMinhHoa) }}"
                                height="100px" width="100px" /></td>

                            <td>{{ $VatTu->Model }}</td>

                            <td>{{ $VatTu->Serial }}</td>

                            <td>{{ $VatTu->TinhTrang }}</td>

                            <td>{{ $VatTu->SoLuong }}</td>

                            <td>{{ $VatTu->DaDung }}</td>

                            <td>{{ $VatTu->LoaiVatTu }}</td>

                            <td>
                                {{-- @if ($ThietBi->TinhTrang == 'Mới')
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
                                @endif --}}
                                <a href="/vattu/thietbituongthich/{{$VatTu->id}}"><i class="fa fa-arrows"
                                    style="font-size: 15px;color:#000000" title="Thiết bị tương thích"
                                    aria-hidden="true"></i></a>
                                <a href="/vattu/xem/{{$VatTu->id}}"><i class="fa fa-eye"
                                        style="font-size: 15px;color:#00cbfd" title="Xem hồ sơ vật tư"
                                        aria-hidden="true"></i></a>
                                <a href="/vattu/getsua/{{$VatTu->id}}"><i class="fa fa-edit"
                                        style="font-size: 15px;" title="Chỉnh sửa thông tin" aria-hidden="true"></i></a>
                                </a>
                                <a href="/vattu/xoa/{{$VatTu->id}}" onclick="return confirm('Bạn có muốn xóa?')"><i
                                        class="fa fa-trash" style="font-size: 15px;color:#ff0404" title="Xóa vật tư"
                                        aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    
                </table>
                {{-- {{ $DSVatTu->links('pagination::bootstrap-4') }} --}}
            </div>
        </div>
    </div> <!-- /table -->
</section>
@endsection