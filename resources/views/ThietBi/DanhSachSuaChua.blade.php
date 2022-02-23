@extends('user.user_master')
@section('content')



<section class="table_area">
    <br>
    <h1 style="text-align:center">TỔNG SỐ THIẾT BỊ: {{$Count}}</h1>
    <br>
    <form action="/thietbi/timkiem" method="GET">
        @csrf
        <div class="content">
            <div class="row">
                <div class="col-sm-3 col-3">
                    <input class="form-control" name="Ten_Model_Serial" style=" border-radius: 10px;"
                        placeholder="Tên thiết bị|model|serial">
                </div>
                <div class="col-sm-3 col-3">
                    <select style="height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                        name="KhoaPhong" class="form-control">
                        <option value="{{old('KhoaPhong')}}">Chọn khoa phòng</option>
                        @foreach ($DSKhoaPhong as $KhoaPhong)
                            <option value="{{ $KhoaPhong->idKhoaPhong }}">{{ $KhoaPhong->TenKhoaPhong }}</option>
                        @endforeach
                    </select>
                    
                </div>
                <div class="col-sm-3 col-3">
                    <select style="height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                        name="TinhTrang" class="form-control">
                        <option value="">Chọn tình trạng</option>
                        <option value="Đang Sửa Chữa">Đang Sửa Chữa</option>
                        <option value="Đang Báo Hỏng">Đang Báo Hỏng</option>
                    </select>
                </div>
                <div class="col-sm-3 col-3">
                    <select style="height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                        name="idNhomThietBi" id="NhomThietBi" class="form-control">
                        <option value="">Chọn nhóm thiết bị</option>
                        @foreach ($DSNhomThietBi as $NhomThietBi)
                            <option value="{{ $NhomThietBi->idNhomThietBi }}">{{ $NhomThietBi->TenNhomThietBi }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="col-sm-3 col-3">
                    <select style="height: 100% ;border-radius: 10px; border: 1px solid #f1f1f1"
                        name="idLoaiThietBi" id="LoaiThietBi" class="form-control">
                        <option value="">Chọn loại thiết bị</option>
                        @foreach ($DSLoaiThietBi as $LoaiThietBi)
                            <option value="{{ $LoaiThietBi->idLoaiThietBi }}">{{ $LoaiThietBi->idLoaiThietBi }}</option>
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
            <div class="panel_title" style="text-align:center"><span>Danh Sách Thiết Bị Đang Sửa Chữa, Báo Hỏng</span></div>

        </div>
        <div class="panel_body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Thiết Bị</th>
                            <th>Ảnh Minh Họa</th>
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

                            <td><img alt="" class="form-image" style="border:0"
                                src="{{ empty($ThietBi->AnhMinhHoa) ? url('upload/no_image.jpg') : url( $ThietBi->AnhMinhHoa) }}"
                                height="100px" width="100px" /></td>

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
                                <a href="/thietbi/getsuachua/{{$ThietBi->id}}" ><i class="far fa-plus-square"
                                        style="font-size: 15px; color:#070707;" title="Tạo lịch sửa chữa"
                                        aria-hidden="true"></i></a>
                                @endif
                                @if ($ThietBi->TinhTrang == 'Đang Sửa Chữa')
                                <a href="/thietbi/getcapnhat/{{$ThietBi->id}}" ><i class="	fa fa-check-square"
                                        style="font-size: 15px; color:#1ebb33;" title="Cập nhật tình trạng"
                                        aria-hidden="true"></i></a>
                                @endif
                                <a href="/thietbi/lichsusuachua/{{$ThietBi->id}}" ><i class="	fa fa-list"
                                    style="font-size: 15px; color:#006bf7;" title="Xem lịch sử sửa chữa"
                                    aria-hidden="true"></i></a>
                                {{-- @if ($ThietBi->TinhTrang == 'Đang Sử Dụng')
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
                                </a> --}}
                            </td>
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