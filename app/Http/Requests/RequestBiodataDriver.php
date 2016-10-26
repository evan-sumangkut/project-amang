<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestBiodataDriver extends FormRequest
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
            'namalengkap'=>'required|max:30',
            'namapanggilan'=>'required|max:10',
            'driver'=>'required',
            'jk'=>'required',
            'tempatlahir'=>'required|max:25',
            'tanggallahir'=>'required|max:17',
            'ktp'=>'required|max:16',
            'sim'=>'required|max:12',
            'alamat'=>'required|max:120',
            'hp'=>'required|max:14',
            'email'=>'required|email|unique:biodata_driver|max:30',
            'bank'=>'required',
            'norekening'=>'required|max:30',
            'namarekening'=>'required|max:30',
            'jaminan'=>'required',

        ];
    }
}
