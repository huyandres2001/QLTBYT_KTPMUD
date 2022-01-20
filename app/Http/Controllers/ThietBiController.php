<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ThietBi;
use App\Models\NhomThietBi;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\LoaiThietBi;
use App\Models\KhoaPhong;
use App\Http\Requests\ThietBiRequest;
use App\Models\DonViBaoTri;
use App\Models\NhaCungCap;

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
        $data['DSThietBi'] = $this->ThietBi::paginate(10);
        $id = Auth::user()->id;
        $data['user'] = User::find($id);
        return view('ThietBi.DanhSach', $data);
    }
    public function GetThem()
    {
        if(Auth::user()->PhanQuyen == 'Cán bộ khoa phòng')
        {
            return back()->with('warning', 'Bạn không có quyền thực hiện chức năng này!');
        }
        $data['user'] = User::find(Auth::user()->id);
        $data['DSNhomThietBi'] = NhomThietBi::all();
        $data['DSLoaiThietBi'] = LoaiThietBi::orderBy('idLoaiThietBi')->get();
        $data['DSCanBoVatTuPhuTrach'] = User::where('PhanQuyen', 'Cán bộ vật tư')->orWhere('PhanQuyen', 'Admin')->orderBy('HoVaTen')->get();
        $data['DSCanBoKhoaPhongPhuTrach'] = User::where('PhanQuyen', 'Cán bộ khoa phòng')->orWhere('PhanQuyen', 'Admin')->orderBy('HoVaTen')->get();
        $data['DSKhoaPhongSuDung'] = KhoaPhong::orderBy('TenKhoaPhong')->get();
        $data['DSDonViBaoTri'] = DonViBaoTri::orderBy('TenDonViBaoTri')->get();
        $data['DSNhaCungCap'] = NhaCungCap::orderBy('TenNhaCungCap')->get();
        return view('ThietBi.Them', $data);
    }
    public function LayLoaiThietBiTuNhomThietBi($id)  //khi thay đổi nhóm thiết bị thì danh mục loại thiết bị đc hiển thị cũng sẽ thay đổi theo
    {
        echo json_encode(DB::table('loaithietbi')->where('idNhomThietBi', $id)->get());
    }
    public function PostThem(ThietBiRequest $request)
    {   
        $this->ThietBi->create($request->all());
        return redirect()->route('thietbi.danhsach')->with('message', 'Thêm thiết bị thành công!');
    }
    public function Xoa($id)
    {
        DB::table('thietbi')->where('id', $id)->delete();
        return redirect()->route('thietbi.danhsach')->with('message', 'Đã xóa thiết bị!');
    }
    public function GetSua($id)
    {
        if(Auth::user()->PhanQuyen == 'Cán bộ khoa phòng')
        {
            return back()->with('warning', 'Bạn không có quyền thực hiện chức năng này!');
        }
        $data['user'] = User::find(Auth::user()->id);
        $data['ThietBi'] = ThietBi::find($id);
        $data['DSNhomThietBi'] = NhomThietBi::all();
        $data['DSLoaiThietBi'] = LoaiThietBi::all();
        $data['DSCanBoVatTuPhuTrach'] = User::where('PhanQuyen', 'Cán bộ vật tư')->orWhere('PhanQuyen', 'Admin')->get();
        $data['DSCanBoKhoaPhongPhuTrach'] = User::where('PhanQuyen', 'Cán bộ khoa phòng')->orWhere('PhanQuyen', 'Admin')->get();
        $data['DSKhoaPhongSuDung'] = KhoaPhong::all();
        return view('ThietBi.Sua', $data);
    }
    public function PostSua(ThietBiRequest $request, $id)
    {
        $data = $this->ThietBi->find($id);
        $data->update($request->all());
        return redirect('/thietbi/danhsach')->with('message', 'Chỉnh sửa thành công');
    }
    public function Xem($id)
    {
        $data['ThietBi'] = ThietBi::find($id);
        $data['user'] = User::find(Auth::user()->id);
        return view('ThietBi.Xem' , $data);
    }
    public function GetBanGiao($id)
    {
        if(Auth::user()->PhanQuyen == 'Cán bộ khoa phòng')
        {
            return back()->with('warning', 'Bạn không có quyền thực hiện chức năng này!');
        }
        $data['ThietBi'] = ThietBi::find($id);
        $data['user'] = User::find(Auth::user()->id);
        $data['DSKhoaPhongSuDung'] = KhoaPhong::all();
        $data['DSCanBoKhoaPhongPhuTrach'] = User::where('PhanQuyen', 'Cán bộ khoa phòng')->orWhere('PhanQuyen', 'Admin')->get();
        $data['DSCanBoVatTuPhuTrach'] = User::where('PhanQuyen', 'Cán bộ vật tư')->orWhere('PhanQuyen', 'Admin')->get();
        return view('ThietBi.BanGiao', $data);
    }
}
