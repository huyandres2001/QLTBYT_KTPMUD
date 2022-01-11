<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonViBaoTri extends Model
{
    use HasFactory;
    protected $table ='donvibaotri';
    protected $fillable = [
        'idDonViBaoTri', 'TenDonViBaoTri', 'DiaChi', 'NguoiDaiDien',
         'SoDienThoai', 'Email', 'MaSoThue', 'GhiChu'
    ];
    public function NhaCungCap ()
    {
        # code...
        return $this->belongsTo(NhaCungCap::class, 'idNhaCungCap');
    }
}
