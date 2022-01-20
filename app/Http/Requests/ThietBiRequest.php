<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
class ThietBiRequest extends FormRequest
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
            'TenThietBi' => 'required',
            'Serial' => 'required|unique:thietbi,Serial',
            'Model' => 'required',
            'SoLuong' => 'required',
            'NamSanXuat' => 'min:1800|max:3000|nullable',
            'NamSuDung' => 'min:1800|max:3000|nullable',
        ];
    }
    public function messages()
    {
        return [
            'TenThietBi.required' => 'Bạn chưa nhập tên thiết bị',
            'Serial.required' => 'Bạn chưa nhập serial',
            'Model.required' => 'Bạn chưa nhập model',
            'SoLuong.required' => 'Bạn chưa nhập model',
            'Serial.unique' => 'Serial đã tồn tại',
            'NamSanXuat.min' => 'Năm sản xuất không hợp lệ',
            'NamSanXuat.max' => 'Năm sản xuất không hợp lệ',
            'NamSuDung.min' => 'Năm sử dụng không hợp lệ',
            'NamSuDung.max' => 'Năm sử dụng không hợp lệ'
        ];
    }
}
