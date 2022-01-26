<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
class BanGiaoThietBiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'idKhoaPhongSuDung' => 'required',
            'idCanBoKhoaPhongPhuTrach' => 'required',
            'NgayBanGiao' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'idKhoaPhongSuDung.required' => 'Bạn chưa chọn khoa phòng sử dụng',
            'idCanBoKhoaPhongPhuTrach.required' => 'Bạn chưa chọn cán bộ phụ trách',
            'NgayBanGiao.required' => 'Bạn chưa chọn ngày bàn giao'
        ];
    }
}
