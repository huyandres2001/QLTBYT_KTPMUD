<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhomThietBi extends Model
{
    use HasFactory;
    protected $table = 'nhomthietbi';
    protected $fillable = [
        'idNhomThietBi', 'TenNhomThietBi'
    ];
    public function ThietBi()
    {
        # code...
        return $this->hasMany(ThietBi::class, 'idNhomThietBi', 'idNhomThietBi');
    }
    public function LoaiThietBi()
    {
        # code...
        return $this->hasMany(LoaiThietBi::class, 'idNhomThietBi', 'idNhomThietBi');
    }
}
