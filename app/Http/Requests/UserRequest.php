<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'required|max:255',
            'surname'=>'required|max:255',
            'nickname'=>'required|max:255',
            'email'=>'required|max:255|email|unique:users,email',
            'phone_number'=>'required|min:10|max:255',
            'password'=>'required|min:6|max:255',
            'password2'=>'required|same:password'
            ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Ad alanı boş bırakılamaz',
            'name.max' => 'Ad alanı 255 karakterden uzun olamaz',
            'surname.required' => 'Soyad alanı boş bırakılamaz',
            'surname.max' => 'Soyad alanı 255 karakterden uzun olamaz',
            'nickname.required' => 'Nickname alanı boş bırakılamaz',
            'nickname.max' => 'Nickname alanı 255 karakterden uzun olamaz',
            'email.required' => 'Email alanı boş bırakılamaz',
            'email.max' => 'Email alanı 255 karakterden uzun olamaz',
            'email.email' => 'Girdiğiniz email adresi doğru değil',
            'email.unique' => 'Girdiğiniz email sistemde kayıtlı',
            'phone_number.required' => 'Telefon numarası alanı boş bırakılamaz',
            'phone_number.max' => 'Telefon numarası alanı 255 karakterden uzun olamaz',
            'phone_number.min' => 'Telefon numarası alanı 10 karakterden kısa olamaz',
            'password.required' => 'Şifre alanı boş bırakılamaz',
            'password.max' => 'Şifre alanı 255 karakterden uzun olamaz',
            'password.min' => 'Şifre alanı 6 karakterden kısa olamaz',
            'password2.required' => 'Şifre (Tekrar) alanı boş bırakılamaz',
            'password2.same' => 'Şifre (Tekrar) alanı ilk girdiğiniz şifre ile aynı değil',
    ];
    }
}
