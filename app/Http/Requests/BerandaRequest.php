<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BerandaRequest extends FormRequest
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
            'negara'   => ['required', 'string', 'min:3', 'max:50', 'unique:kurmas'],
            'img'      => ['required', 'mimes:png,jpg,jpeg'],
            'deskripsi'=> ['required']
        ];
    }
}
