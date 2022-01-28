<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaoHong extends Model
{
    use HasFactory;
    protected $table = 'baohong';
    protected $fillable = [
        'idNguoiBaoHong', 'SerialThietBiHong', 
        'LyDo', 'NgayBaoHong'
    ];
    public function ThietBiHong()
    {
        # code...
        return $this->hasMany(ThietBi::class, 'idThietBi', 'idThietBiHong');

    }
    public function NguoiBaoHong()
    {
        # code...
        return $this->hasOne(User::class, 'idNguoiDung', 'idNguoiBaoHong');
    }
}
