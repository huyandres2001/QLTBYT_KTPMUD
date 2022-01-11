<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThietBi extends Model
{
    use HasFactory;
    protected $table = "ThietBi";
    protected $fillable = [
        'idThietBi','TenThietBi','Model','Serial','MucDoRuiRo','SoLuong',
        'DonViTinh','TinhTrang','idNhomThietBi',
        'idLoaiThietBi','idCanBoVatTuPhuTrach',
        'idCanBoKhoaPhongPhuTrach','idKhoaPhongSuDung','idNhaCungCap',
        'idDonViBaoTri','HangSanXuat', 'GiaNhap',
        'XuatXu','NamSanXuat','KiemDinhDinhKy','NgayKiemDinhGanNhat',
        'NgayNhapKho','NgayHetHanBaoHanh','ThongSoKyThuat','CauHinhKyThuat','GiaTriBanDau',
        'KhauHaoHangNam','GiaTriHienTai','NamSuDung','AnhMinhHoa'
    ];
    public function LoaiThietBi()
    {
        return $this->belongsTo(LoaiThietBi::class, 'idLoaiThietBi', 'idLoaiThietBi');
    }
    public function NhomThietBi(){
        return $this->belongsTo(NhomTHietBi::class, 'idNhomThietBi', 'idNhomThietBi');
    }
    // public function CanBoPhuTrach($maNguoiDung)
    // {
    //     $rs = User::where('maNguoiDung', $maNguoiDung)->first();
    //     return $rs;
    // }
}
