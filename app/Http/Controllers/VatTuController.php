<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\Models\VatTu;
use App\Models\TinhTrang;
use App\Models\LoaiVatTu;
use App\Models\NhaCungCap;


use App\Http\Requests\VatTuRequest;
use Illuminate\Http\Request;

class VatTuController extends Controller
{
    //
    public function DanhSach()
    {
        # code...
        $data['DSVatTu'] = VatTu::all();
        $data['Count'] = VatTu::count();
        $data['DSTinhTrang'] = TinhTrang::all();
        $data['DSLoaiVatTu'] = LoaiVatTu::all();
        return view('VatTu.DanhSach', $data);
    }
    public function GetThem()
    {
        # code...
        $data['DSLoaiVatTu'] = LoaiVatTu::all();
        $data['DSNhaCungCap'] = NhaCungCap::orderBy('TenNhaCungCap')->get();
        return view('VatTu.ThemVatTu', $data);
    }
    public function PostThem(VatTuRequest $request)
    {
        $VatTu = array();
        $VatTu = $request->except('_token');
        $image = $request->file('AnhMinhHoa');
        if ($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/upload/VatTu/';
            $img_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $VatTu['AnhMinhHoa'] = $img_url;
        }
        DB::table('vattu')->insert($VatTu);
        return redirect('/vattu/danhsach')->with('message', 'Thêm vật tư thành công!');
    }
    public function Xem($id)
    {
        # code...
        $VatTu = VatTu::find($id);
        return view('VatTu.Xem', compact('VatTu'));
    }
    public function GetSua($id)
    {
        # code...
        
        $data['DSNhaCungCap'] = NhaCungCap::orderBy('TenNhaCungCap')->get();
        $data['DSLoaiVatTu'] = LoaiVatTu::all();
        $data['VatTu'] =  VatTu::find($id);
        return view('VatTu.Sua', $data);
    }
    public function PostSua($id, Request $request)
    {
        # code...
        $VatTu = VatTu::where('Serial', $request->Serial)->get()->first();
        $request->validate(
        [
            'LoaiVatTu' => 'required',
        ] , 
        [
            'LoaiVatTu.required' => 'Bạn chưa nhập loại vật tư',
        ]);
        if ($VatTu) {
            if ($VatTu->id != $id) {
                $request->validate(
                    $request,
                    ['Serial' => 'unique:VatTu,Serial'],
                    ['Serial.unique' => 'Serial đã tồn tại']
                );
            }
        }
        //do request có cái _token nên phải loại trừ
        $VatTu->update($request->except('_token'));
        $image = $request->file('AnhMinhHoa');
        if ($image) {
            @unlink(public_path($VatTu->AnhMinhHoa));
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/VatTu/';
            $img_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $VatTu->AnhMinhHoa = $img_url;
        }
        $VatTu->save();
        return redirect('/vattu/danhsach')->with('message', 'Chỉnh sửa thành công');
    }
    public function Xoa($id)
    {
        # code...
        DB::table('vattu')->where('id', $id)->delete();
        return redirect('/vattu/danhsach')->with('warning', 'Đã xóa vật tư!');
    }
    public function TimKiem(Request $request)
    {
        # code...
        $DSVatTu = DB::table('vattu');
        // $data['DSVatTu'] = VatTu::all();
        $data['DSTinhTrang'] = TinhTrang::all();
        $data['DSLoaiVatTu'] = LoaiVatTu::all();
        if($request->Ten_Model_Serial != null){
            $DSVatTu = $DSVatTu->where('model', 'like', '%' . $request->Ten_Model_Serial . '%')
            ->orwhere('TenVatTu', 'like', '%' . $request->Ten_Model_Serial . '%')
            ->orwhere('Serial', 'like', '%' . $request->Ten_Model_Serial . '%');
        }
        if ($request->TinhTrang) {
            $DSVatTu = $DSVatTu->where('TinhTrang', $request->TinhTrang);
        }
        if ($request->LoaiVatTu) {
            $DSVatTu = $DSVatTu->where('LoaiVatTu', $request->LoaiVatTu);
        }
        $DSVatTu = $DSVatTu->paginate(10);
        $data['Count'] = $DSVatTu->count();
        return view('VatTu.DanhSach', $data, compact('DSVatTu'));
    }
}
