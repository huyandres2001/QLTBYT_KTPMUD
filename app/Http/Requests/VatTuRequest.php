<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
class VatTuRequest extends FormRequest
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
            'Serial' => 'unique:vattu,Serial',
            'LoaiVatTu' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'Serial.unique' => 'Serial đã tồn tại',
            'LoaiVatTu.required' => 'Bạn chưa nhập loại vật tư'
        ];
    }
}
