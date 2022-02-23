<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuaChua extends Model
{
    use HasFactory;
    protected $table = 'SuaChua';
    protected $fillable = [
        'SerialThietBiHong', 'NgaySuaChua','NgaySuaXong', 'TinhTrangSauKhiSua', 'ChiPhi', 'GhiChu'
    ];
}
