<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangKyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>'required|min:8|max:30',
            'password'=>'required|min:8|max:15',
            'sdt'=>'required|min:10|max:10',
            'email'=>'required|min:15|max:50'       
         ];
    }
    public function messages()
    {
        return[
            'username.required'=>'Không được để trống thông tin này !',
            'username.max'=>'Tên đăng nhập không dài quá 30 ký tự',
            'username.min'=>'Tên đăng nhập ít nhất 10 ký tự',

            'password.min'=>'Mật khẩu không đc ít hơn 8 ký tự',
            'password.max'=>'Mật khẩu không đc nhiều hơn 15 ký tự',
            'password.required'=>'Mật khẩu không được trống',

            'sdt.min'=>'SĐT không đúng !',
            'sdt.max'=>'SĐT không đúng !',
            'sdt.required'=>'Số điện thoại không được để trống',

            'email.required'=>'Email không được để trống',
            'email.min'=>'Độ dài nhỏ nhất là 15',
            'email.max'=>'Vượt quá độ dài',
        ];
    }
}
