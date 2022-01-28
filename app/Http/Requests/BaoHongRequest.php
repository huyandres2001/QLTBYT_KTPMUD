<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BaoHongRequest extends FormRequest
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
            'NgayBaoHong' => 'required',
            'LyDoHong' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'NgayBaoHong.required' => 'Bạn chưa nhập ngày báo hỏng',
            'LyDoHong.required' => 'Bạn chưa nhập lý do hỏng',
        ];
    }
}
