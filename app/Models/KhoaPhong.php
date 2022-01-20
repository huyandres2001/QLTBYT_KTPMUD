<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhoaPhong extends Model
{
    use HasFactory;
    protected $table ='department';
    protected $fillable =[
        'idKhoaPhong', 
        'TenKhoaPhong',
        'TruongKhoa',
        'SoDienThoai',
        'DiaChi'
    ];
}
