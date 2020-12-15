<?php

namespace App\Http\Requests\Veteran;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVeteranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'uz_name' => 'required',
            'oz_name' => 'required',
            'ru_name' => 'required',
            'en_name' => 'required',
            'uz_description' => 'required',
            'oz_description' => 'required',
            'ru_description' => 'required',
            'en_description' => 'required',
            'thumbnail' => 'mimes:jpeg,jpg,png|max:1024',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'uz_name.required' => 'Не заполнены ФИО на Латинице',
            'oz_name.required' => 'Не заполнены ФИО на Кириллице',
            'ru_name.required' => 'Не заполнены ФИО на Русском',
            'en_name.required' => 'Не заполнены ФИО на Английском',
            'uz_description.required' => 'Не заполнено краткое описание на Латинице',
            'oz_description.required' => 'Не заполнено краткое описание на Кириллице',
            'ru_description.required' => 'Не заполнено краткое описание на Русском',
            'en_description.required' => 'Не заполнено краткое описание на Английском',
            'thumbnail.mimes' => 'Картинка должна быть в формате: jpeg,jpg,png',
            'thumbnail.max' => 'Размер картинки не должен превышать 1 МБ',
        ];
    }
}
