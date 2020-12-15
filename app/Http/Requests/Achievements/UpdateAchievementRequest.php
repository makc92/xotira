<?php

namespace App\Http\Requests\Achievements;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAchievementRequest extends FormRequest
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
            'uz_title' => 'required',
            'oz_title' => 'required',
            'ru_title' => 'required',
            'en_title' => 'required',
            'uz_content' => 'required',
            'oz_content' => 'required',
            'ru_content' => 'required',
            'en_content' => 'required',
            'thumbnail' => 'mimes:jpeg,jpg,png|max:1024',
        ];
    }


    public function messages(): array
    {
        return [
            'uz_title.required' => 'Не заполнен заголовок на Латинице',
            'oz_title.required' => 'Не заполнен заголовок на Кириллице',
            'ru_title.required' => 'Не заполнен заголовок на Русском',
            'en_title.required' => 'Не заполнен заголовок на Английском',
            'uz_content.required' => 'Не заполнен контент новости на Латинице',
            'oz_content.required' => 'Не заполнен контент новости на Кириллице',
            'ru_content.required' => 'Не заполнен контент новости на Русском',
            'en_content.required' => 'Не заполнен контент новости на Английском',
            'thumbnail.mimes' => 'Картинка должна быть в формате: jpeg,jpg,png',
            'thumbnail.max' => 'Размер картинки не должен превышать 1 МБ',
        ];
    }
}
