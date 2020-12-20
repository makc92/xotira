<?php

namespace App\Http\Requests\Photos;

use Illuminate\Foundation\Http\FormRequest;

class StorePhotoRequest extends FormRequest
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
            'thumbnail' => 'required|mimes:jpeg,jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'thumbnail.required' => 'Не загружена картинка',
            'thumbnail.mimes' => 'Картинка должна быть в формате: jpeg,jpg,png',
        ];
    }
}
