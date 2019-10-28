<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingCompanyRequest extends FormRequest
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
            'code'=>'required|max:255'
        ];
    }
    public function messages()
    {
        return [
        'name.required' => 'Şirket adı alanı boş bırakılamaz',
        'name.max' => 'Şirket adı 255 karakterden uzun olamaz',
        'code.required' => 'Kod alanı boş bırakılamaz',
        'code.max' => 'Kod alanı 255 karakterden uzun olamaz'
      ];
    }
}
