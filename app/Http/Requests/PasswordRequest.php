<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PasswordRequest extends FormRequest
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
            'current_password' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'current_password.required' => 'Bạn chưa nhập mật khẩu',
            'password.required' => 'Bạn chưa nhập mật khẩu mới',
            'password_confirmation.required' => 'Bạn chưa xác nhận mật khẩu'
        ];
    }
}
