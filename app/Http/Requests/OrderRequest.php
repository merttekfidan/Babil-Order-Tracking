<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
          'phoneNumber'=>'required|max:255',
          'address'=>'required|max:255',
          'productCode'=>'required|max:255',
          'price'=>'required|numeric|min:0.01|max:9999999.99',
          'note'=>'max:255'
        ];
    }
    public function messages()
    {
        return [
        'name.required' => 'Ad alanı boş bırakılamaz',
        'name.max' => 'Ad alanı 255 karakterden uzun olamaz',
        'surname.required'  => 'Soyad alanı boş bırakılamaz',
        'surname.max' => 'Soyad alanı 255 karakterden uzun olamaz',
        'phoneNumber.required'  => 'Telefon numarası alanı boş bırakılamaz',
        'phoneNumber.max' => 'Telefon numarası alanı 255 karakterden uzun olamaz',
        'address.required'  => 'Adres alanı boş bırakılamaz',
        'address.max' => 'Adres alanı 255 karakterden uzun olamaz',
        'productCode.required'  => 'Ürün kodu alanı boş bırakılamaz',
        'productCode.max' => 'Ürün kodu alanı 255 karakterden uzun olamaz',
        'price.required'  => 'Fiyat alanı boş bırakılamaz',
        'price.min' => 'Fiyat alanı 0.01den az olamaz',
        'price.max' => 'Fiyat alanı 9999999.99dan büyük olamaz',
        'price.max' => 'Fiyat alanı sadece sayı olmalıdır örn 12.34',
        'note.max' =>'Not alanı 255 karakterden uzun olamaz'
    ];
    }
}
