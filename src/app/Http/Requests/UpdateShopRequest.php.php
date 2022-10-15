<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SampleRequest extends FormRequest
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
            'name' => ['required',  'max:20'],
            'information' => ['required', 'max255'],
            'image' => [
                'nullable', // 省略可
                'title', // ファイルがアップロードされている
                'image', // 画像ファイルである
                'max: 2000', // ファイル容量が2000kb以下
                'mimes: jpeg,jpg.png'
            ],
        ];
    }
}
