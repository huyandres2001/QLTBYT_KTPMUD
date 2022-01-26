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
         'TrangThai', 'SerialThietBiTuongUng', 'GiaNhap', 'HangSanXuat', 
         'XuatXu', 'idNhaCungCap', 'Serial', 'Model', 'NamSanXuat', 
         'NamSuDung', 'NgayNhapKho', 'HanSuDung', 'ThongSoKyThuat', 
         'CauHinhKyThuat', 'QuyTrinhSuDung',  
         'GhiChu', 
    ];
    public function ThietBiTuongUng(Type $var = null)
    {
        # code...
        return $this->belongsTo(ThietBi::class, 'Serial','SerialThietBiTuongUng');
    }
    public function NhaCungCap(Type $var = null)
    {
        # code...
        return $this->belongsTo(NhaCungCap::class, 'idNhaCungCap','idNhaCungCap');
    }
}
