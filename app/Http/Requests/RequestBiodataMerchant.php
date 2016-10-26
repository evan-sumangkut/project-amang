<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestBiodataMerchant extends FormRequest
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
            'namausaha'=>'required|unique:biodata_merchant|max:40',
            'paket'=>'required|max:5',
            'kontrak'=>'required|max:1',
            'alamat'=>'required|max:120',
            'hp'=>'required|max:14',
            'email'=>'required|max:30',
            'dari'=>'required|max:5',
            'sampai'=>'required|max:5',
            'logo'=>'required|max:2000'
        ];
    }
}
