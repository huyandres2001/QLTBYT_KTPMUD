<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    use HasFactory;
    protected $table = 'nhacungcap';
    protected $fillable = [
            'idNhacungcap', 'TenNhaCungCap', 'NguoiDaiDien',
             'DiaChi', 'GhiChu', 'Email', 'SoDienThoai', 'MaSoThue',
    ];
    public function ThietBi()
    {
        # code...
        return $this->hasMany(ThietBi::class, 'idNhacungcap', 'idNhacungcap');
    }
    public function DonViBaoTri()
    {
        return $this->hasMany(DonViBaoTri::class, 'idNhaCungCap');
    }
}
