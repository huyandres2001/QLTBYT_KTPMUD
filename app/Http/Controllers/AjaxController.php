<?php

namespace App\Http\Controllers;
use App\Models\LoaiThietBi;
use App\Models\DonViBaoTri;
use App\Models\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function GetLoaiThietBi($idNhomThietBi)
    {
        $DSLoaiThietBi = LoaiThietBi::where('idNhomThietBi', $idNhomThietBi)->get();
        foreach ($DSLoaiThietBi as $LoaiThietBi) {
            echo "<option value='$LoaiThietBi->idLoaiThietBi'>$LoaiThietBi->idLoaiThietBi</option>";
        }
    }
    public function GetDonViBaoTri($idNhaCungCap)
    {
        $DSDonViBaoTri = DonViBaoTri::where('idNhaCungCap', $idNhaCungCap)->get();
        foreach ($DSDonViBaoTri as $DonViBaoTri) {
            echo "<option value='$DonViBaoTri->idDonViBaoTri'>$DonViBaoTri->TenDonViBaoTri</option>";
        }
    }
    public function GetUser($idKhoaPhong)
    {
        $users = User::where('idKhoaPhong', $idKhoaPhong)->get();
        foreach ($users as $user) {
            echo "<option value='$user->idNguoiDung'>$user->HoVaTen</option>";
        }
    }
}
