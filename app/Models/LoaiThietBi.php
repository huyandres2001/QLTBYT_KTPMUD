<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiThietBi extends Model
{
    use HasFactory;
    protected $table = 'loaithietbi';
    protected $fillable = [
        'idLoaiThietBi', 'idNhomThietBi',
    ];
    public function ThietBi()
    {
        return $this->hasMany(ThietBiModel::class, 'idLoaiThietBi', 'idLoaiThietBi');
    }
}
