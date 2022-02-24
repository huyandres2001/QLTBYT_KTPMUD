<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiVatTu extends Model
{
    use HasFactory;
    protected $table = 'loaivattu';
    protected $fillable = ['LoaiVatTu'];
}
