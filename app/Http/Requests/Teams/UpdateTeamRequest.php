<?php

namespace App\Http\Requests\Teams;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
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
            'uz_name' => 'required',
            'oz_name' => 'required',
            'ru_name' => 'required',
            'en_name' => 'required',

            'uz_position' => 'required',
            'oz_position' => 'required',
            'ru_position' => 'required',
            'en_position' => 'required',

            'uz_bio' => 'required',
            'oz_bio' => 'required',
            'ru_bio' => 'required',
            'en_bio' => 'required',

            'uz_activity' => 'required',
            'oz_activity' => 'required',
            'ru_activity' => 'required',
            'en_activity' => 'required',

            'thumbnail' => 'mimes:jpeg,jpg,png|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'uz_name.required' => 'Не заполнено ФИО на Латинице',
            'oz_name.required' => 'Не заполнено ФИО на Кириллице',
            'ru_name.required' => 'Не заполнено ФИО на Русском',
            'en_name.required' => 'Не заполнено ФИО на Английском',
            'uz_position.required' => 'Не заполнена должность на Латинице',
            'oz_position.required' => 'Не заполнена должность на Кириллице',
            'ru_position.required' => 'Не заполнена должность на Русском',
            'en_position.required' => 'Не заполнена должность на Английском',
            'uz_bio.required' => 'Не заполнена Биография на Латинице',
            'oz_bio.required' => 'Не заполнена Биография на Кириллице',
            'ru_bio.required' => 'Не заполнена Биография на Русском',
            'en_bio.required' => 'Не заполнена Биография на Английском',
            'uz_activity.required' => 'Не заполнена деятельность на Латинице',
            'oz_activity.required' => 'Не заполнена деятельность на Кириллице',
            'ru_activity.required' => 'Не заполнена деятельность на Русском',
            'en_activity.required' => 'Не заполнена деятельность на Английском',
            'thumbnail.mimes' => 'Картинка должна быть в формате: jpeg,jpg,png',
            'thumbnail.max' => 'Размер картинки не должен превышать 1 МБ',
        ];
    }
}
