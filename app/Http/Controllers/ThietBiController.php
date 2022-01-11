<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ThietBi;
use App\Models\NhomThietBi;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\LoaiThietBi;

class ThietBiController extends Controller
{
    //
    public function __construct(
        ThietBi $ThietBi,
        NhomThietBi $NhomThietBi,
        LoaiThietBi $LoaiThietBi,
        //KhoaPhong $KhoaPhong,
        //NhaCungCap $NhaCungCap,
        //DonViBaoTri $DonViBaoTri,
    ) {
        $this->ThietBi = $ThietBi;
        $this->LoaiThietBi = $LoaiThietBi;
        $this->NhomThietBi = $NhomThietBi;
        //$this->KhoaPhong = $KhoaPhong;
        //$this->NhaCungCap = $NhaCungCap;
        //$this->DonViBaoTri = $DonViBaoTri;
    }
    public function DanhSach()
    {
        # code...
        $data['DSThietBi'] = $this->ThietBi::paginate(2);
        //take user id
        $id = Auth::user()->id;
        $data['user'] = User::find($id);
        return view('ThietBi.DanhSach',$data);
    }
    public function GetThem()
    {
        //take user id
        $id = Auth::user()->id;
        $data['user'] = User::find($id);
        $data['DSNhomThietBi'] = $this->NhomThietBi->all();
        $data['DSLoaiThietBi'] = $this->LoaiThietBi->all();
        return view('ThietBi.Them', $data);
    }
}
