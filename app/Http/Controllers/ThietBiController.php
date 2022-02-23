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
use App\Http\Requests\BanGiaoThietBiRequest;
use App\Models\BaoHong;
use App\Http\Requests\BaoHongRequest;
use App\Models\TinhTrang;
use App\Http\Requests\SuaChuaRequest;
Use App\Models\SuaChua;
class ThietBiController extends Controller
{
    //
    public function __construct(
        ThietBi $ThietBi,
        NhomThietBi $NhomThietBi,
        LoaiThietBi $LoaiThietBi,
        BaoHong $BaoHong,
        //KhoaPhong $KhoaPhong,
        //NhaCungCap $NhaCungCap,
        //DonViBaoTri $DonViBaoTri,
    ) {
        $this->ThietBi = $ThietBi;
        $this->LoaiThietBi = $LoaiThietBi;
        $this->NhomThietBi = $NhomThietBi;
        $this->middleware('auth');
        //$this->KhoaPhong = $KhoaPhong;
        //$this->NhaCungCap = $NhaCungCap;
        //$this->DonViBaoTri = $DonViBaoTri;


    }
    public function DanhSach()
    {
        # code...
        $data['DSThietBi'] = $this->ThietBi::paginate(10);
        $id = Auth::user()->id;
        $data['DSKhoaPhong'] = KhoaPhong::all();
        $data['DSTinhTrang'] = TinhTrang::all();
        $data['DSNhomThietBi'] = NhomThietBi::all();
        $data['DSLoaiThietBi'] = LoaiThietBi::all();
        $data['user'] = User::find($id);
        $data['Count'] = ThietBi::count();
        return view('ThietBi.DanhSach', $data);
    }
    public function GetThem()
    {
        if (Auth::user()->PhanQuyen == 'Cán bộ khoa phòng') {
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
    public function LayLoaiThietBiTuNhomThietBi($idLTB)  //khi thay đổi nhóm thiết bị thì danh mục loại thiết bị đc hiển thị cũng sẽ thay đổi theo
    {
        echo json_encode(DB::table('loaithietbi')->where('idNhomThietBi', $idLTB)->get());
    }
    public function PostThem(ThietBiRequest $request)
    {
        // $this->ThietBi->create($request->all());
        // $ThietBi = DB::table('thietbi')->insert($request->all());
        $ThietBi = array();
        $ThietBi = $request->except('_token');
        $image = $request->file('AnhMinhHoa');
        if ($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/ThietBi/';
            $img_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $ThietBi['AnhMinhHoa'] = $img_url;
        }
        DB::table('thietbi')->insert($ThietBi);
        return redirect()->route('thietbi.danhsach')->with('message', 'Thêm thiết bị thành công!');
    }
    public function Xoa($id)
    {
        DB::table('thietbi')->where('id', $id)->delete();
        return redirect()->route('thietbi.danhsach')->with('message', 'Đã xóa thiết bị!');
    }
    public function GetSua($id)
    {
        if (Auth::user()->PhanQuyen == 'Cán bộ khoa phòng') {
            return back()->with('warning', 'Bạn không có quyền thực hiện chức năng này!');
        }

        $data['user'] = User::find(Auth::user()->id);
        $data['ThietBi'] = ThietBi::find($id);
        $data['DSNhomThietBi'] = NhomThietBi::all();
        $data['DSLoaiThietBi'] = LoaiThietBi::orderBy('idLoaiThietBi')->get();
        $data['DSCanBoVatTuPhuTrach'] = User::where('PhanQuyen', 'Cán bộ vật tư')->orWhere('PhanQuyen', 'Admin')->get();
        $data['DSCanBoKhoaPhongPhuTrach'] = User::where('PhanQuyen', 'Cán bộ khoa phòng')->orWhere('PhanQuyen', 'Admin')->get();
        $data['DSKhoaPhongSuDung'] = KhoaPhong::all();
        $data['DSDonViBaoTri'] = DonViBaoTri::orderBy('TenDonViBaoTri')->get();
        $data['DSNhaCungCap'] = NhaCungCap::orderBy('TenNhaCungCap')->get();
        return view('ThietBi.Sua', $data);
    }
    public function PostSua(Request $request, $id)
    {
        $ThietBi = ThietBi::where('Serial', $request->Serial)->get()->first();
        if ($ThietBi) {
            if ($ThietBi->id != $id) {
                $request->validate(
                    $request,
                    ['Serial' => 'unique:thietbi,Serial'],
                    ['Serial.unique' => 'Serial đã tồn tại']
                );
            }
        }
        //do request có cái _token nên phải loại trừ
        $ThietBi->update($request->except('_token'));
        $image = $request->file('AnhMinhHoa');
        if ($image) {
            @unlink(public_path($ThietBi->AnhMinhHoa));
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/ThietBi/';
            $img_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $ThietBi->AnhMinhHoa = $img_url;
        }
        $ThietBi->save();
        // $data = ThietBi::find($id);
        // $data->update($request->all());
        return redirect('/thietbi/danhsach')->with('message', 'Chỉnh sửa thành công');
    }
    public function Xem($id)
    {
        $data['ThietBi'] = ThietBi::find($id);
        $data['DSSuaChua'] = SuaChua::where('SerialThietBiHong', $data['ThietBi']->Serial)->get();
        $data['user'] = User::find(Auth::user()->id);
        return view('ThietBi.Xem', $data);
    }
    public function GetBanGiao($id)
    {
        if (Auth::user()->PhanQuyen == 'Cán bộ khoa phòng') {
            return back()->with('warning', 'Bạn không có quyền thực hiện chức năng này!');
        }
        $data['ThietBi'] = ThietBi::find($id);
        $data['user'] = User::find(Auth::user()->id);
        $data['DSKhoaPhongSuDung'] = KhoaPhong::all();
        $data['DSCanBoKhoaPhongPhuTrach'] = User::where('PhanQuyen', 'Cán bộ khoa phòng')->orWhere('PhanQuyen', 'Admin')->get();
        $data['DSCanBoVatTuPhuTrach'] = User::where('PhanQuyen', 'Cán bộ vật tư')->orWhere('PhanQuyen', 'Admin')->get();
        return view('ThietBi.BanGiao', $data);
    }
    public function PostBanGiao(BanGiaoThietBiRequest $request, $id)
    {
        if (Auth::user()->PhanQuyen == 'Cán bộ khoa phòng') {
            return back()->with('warning', 'Bạn không có quyền thực hiện chức năng này!');
        }
        $ThietBi = ThietBi::find($id);
        $ThietBi->TinhTrang = 'Đang Sử Dụng';
        $ThietBi->idKhoaPhongSuDung = $request->idKhoaPhongSuDung;
        $ThietBi->idCanBoKhoaPhongPhuTrach = $request->idCanBoKhoaPhongPhuTrach;
        $ThietBi->NgayBanGiao = $request->NgayBanGiao;
        $ThietBi->GhiChu = $ThietBi->GhiChu . '\n' . $request->GhiChu;
        $ThietBi->save();
        return redirect()->route('thietbi.danhsach')->with('message', 'Bàn giao thành công');
    }
    public function GetThanhLy($id)
    {
        # code...
        $data['user'] = User::find(Auth::user()->id);
        $data['ThietBi'] = ThietBi::find($id);
        return view('ThietBi.ThanhLy', $data);
    }
    public function PostThanhLy(Request $request, $id)
    {
        # code...
        $ThietBi = ThietBi::find($id);
        $ThietBi->TinhTrang = 'Đã thanh lý';
        $ThietBi->NgayThanhLy = $request->NgayThanhLy;
        $ThietBi->GhiChu = $ThietBi->GhiChu . '\n' . $request->GhiChu;
        $ThietBi->save();
        return redirect('/thietbi/danhsach')->with('message', 'Thanh lý thiết bị thành công');
    }
    public function GetBaoHong($id)
    {
        # code...
        $data['ThietBi'] = ThietBi::find($id);
        $data['user'] = User::find(Auth::user()->id);
        return view('ThietBi.BaoHong', $data);
    }
    public function PostBaoHong(BaoHongRequest $request, $id)
    {
        # code...
        $BaoHong['SerialThietBiHong'] = $request->SerialThietBiHong;
        $BaoHong['idNguoiBaoHong'] = $request->idNguoiBaoHong;
        $BaoHong['LyDoHong'] = $request->LyDoHong;
        $BaoHong['NgayBaoHong'] = $request->NgayBaoHong;

        $BaoHong = DB::table('baohong')->insert($BaoHong);
        $ThietBi = ThietBi::find($id);
        $ThietBi->TinhTrang = "Đang Báo Hỏng";
        $ThietBi->save();
        return redirect('/thietbi/danhsach')->with('warning', 'Đã báo hỏng thiết bị');
    }
    public function TimKiem(Request $request)
    {
        $DSThietBi = DB::table('thietbi');
        // $data['DSThietBi'] = ThietBi::all();
        $id = Auth::user()->id;
        $data['DSKhoaPhong'] = KhoaPhong::all();
        $data['DSTinhTrang'] = TinhTrang::all();
        $data['DSNhomThietBi'] = NhomThietBi::all();
        $data['DSLoaiThietBi'] = LoaiThietBi::all();
        $data['user'] = User::find($id);
        if($request->Ten_Model_Serial != null){
            $DSThietBi = $DSThietBi->where('model', 'like', '%' . $request->Ten_Model_Serial . '%')
            ->orwhere('TenThietBi', 'like', '%' . $request->Ten_Model_Serial . '%')
            ->orwhere('Serial', 'like', '%' . $request->Ten_Model_Serial . '%');
        }
        if ($request->KhoaPhong){
            $DSThietBi = $DSThietBi->where('idKhoaPhongSuDung', $request->KhoaPhong);
        }
        if ($request->TinhTrang) {
            $DSThietBi = $DSThietBi->where('TinhTrang', $request->TinhTrang);
        }
        if ($request->idNhomThietBi) {
            $DSThietBi = $DSThietBi->where('idNhomThietBi', $request->idNhomThietBi);
        }
        if ($request->idLoaiThietBi) {
            $DSThietBi = $DSThietBi->where('idLoaiThietBi', $request->idLoaiThietBi);
        }
        $DSThietBi = $DSThietBi->paginate(10);
        $data['Count'] = $DSThietBi->count();
        return view('ThietBi.DanhSach', $data, compact('DSThietBi'));
        
    }
    public function GetDanhSachSuaChua()
    {
        # code...
        $data['DSThietBi'] = ThietBi::where('TinhTrang', 'Đang Sửa Chữa')->orWhere('TinhTrang', 'Đang Báo Hỏng')->get();
        $id = Auth::user()->id;
        $data['DSKhoaPhong'] = KhoaPhong::all();
        $data['DSTinhTrang'] = TinhTrang::all();
        $data['DSNhomThietBi'] = NhomThietBi::all();
        $data['DSLoaiThietBi'] = LoaiThietBi::all();
        $data['user'] = User::find($id);
        $data['Count'] = $data['DSThietBi']->count();
        return view('ThietBi.DanhSachSuaChua', $data);
    }
    public function GetSuaChua($id)
    {
        # code...
        $data['ThietBi'] = ThietBi::find($id);
        $data['user'] = User::find(Auth::user()->id);
        $data['DSDonViBaoTri'] = DonViBaoTri::all();
        return view('ThietBi.SuaChua', $data);
    }
    public function PostSuaChua(SuaChuaRequest $request)
    {
        # code...
        $SuaChua['NgaySuaChua'] = $request->NgaySuaChua;
        $SuaChua['GhiChu'] = $request->GhiChu;
        $SuaChua['SerialThietBiHong'] = $request->SerialThietBiHong;
        $ThietBi = ThietBi::where('Serial', $request->SerialThietBiHong)->get();
        $ThietBi[0]->TinhTrang = 'Đang Sửa Chữa';
        $ThietBi[0]->save();
        DB::table('suachua')->insert($SuaChua);
        return redirect('/thietbi/danhsachsuachua')->with('message','Tạo lịch sửa chữa thành công!');
    }
    public function LichSuSuaChua($id)
    {
        # code...
        $data['ThietBi'] = ThietBi::find($id);
        $data['DSSuaChua'] = SuaChua::where('SerialThietBiHong', $data['ThietBi']->Serial)->get();
        return view('ThietBi.LichSuSuaChua', $data );
    }
    public function GetCapNhat($id)
    {
        # code...
        $data['ThietBi'] = ThietBi::find($id);
        $SuaChua = SuaChua::where('SerialThietBiHong', $data['ThietBi']->Serial)->orderBy('NgaySuaChua')->get();
        $data['SuaChua'] = $SuaChua[0];
        return view('ThietBi.CapNhatSuaChua', $data);
    }
    public function PostCapNhat(Request $request)
    {
        # code...
        $request->validate(['ChiPhi' => 'required',
        'NgaySuaXong' => 'required',
        'TinhTrang'=>'required',] , 
        ['ChiPhi.required' => 'Bạn chưa nhập chi phí',
        'NgaySuaXong.required' => 'Bạn chưa chọn ngày sửa xong',
        'TinhTrang.required' => 'Bạn chưa chọn tình Trạng']);

        $ThietBi = ThietBi::where('Serial', $request->SerialThietBiHong)->get();
        $ThietBi[0]->TinhTrang = $request->TinhTrang;
        $ThietBi[0]->save();

        $SuaChua = SuaChua::where('SerialThietBiHong', $request->SerialThietBiHong)->orderBy('NgaySuaChua')->get();
        $SuaChua[0]->NgaySuaXong = $request->NgaySuaXong;
        $SuaChua[0]->ChiPhi = $request->ChiPhi;
        $SuaChua[0]->GhiChu = $SuaChua[0]->GhiChu . '\n' . $request->GhiChu;
        $SuaChua[0]->TinhTrangSauKhiSua = $request->TinhTrang == 'Đang Sử Dụng' ? 'Đã sửa xong, hoạt động tốt' : 'Không thể sửa, ngừng sử dụng';
        $SuaChua[0]->save();
        return redirect('/thietbi/danhsachsuachua')->with('message', 'Cập nhật trạng thái thành công');
    }
}
