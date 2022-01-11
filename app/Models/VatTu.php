<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VatTu extends Model
{
    use HasFactory;
    protected $table = "vattu";
    protected $fillable = [
        'TenVatTu', 'idVatTu', 'LoaiVatTu', 'SoLuong', 'DonViTinh',
         'TrangThai', 'idThietBiTuongUng', 'GiaNhap', 'HangSanXuat', 
         'XuatXu', 'idNhaCungCap', 'Serial', 'Model', 'NamSanXuat', 
         'NamSuDung', 'NgayNhapKho', 'HanSuDung', 'ThongSoKyThuat', 
         'CauHinhKyThuat', 'QuyTrinhSuDung', 'NgayNhap', 
         'GhiChu', 
    ];
    public function ThietBiTuongUng(Type $var = null)
    {
        # code...
        return $this->belongsTo(ThietBi::class, 'idThietBi','idThietBiTuongUng');
    }
    public function NhaCungCap(Type $var = null)
    {
        # code...
        return $this->belongsTo(NhaCungCap::class, 'idNhaCungCap','idNhaCungCap');
    }
}
