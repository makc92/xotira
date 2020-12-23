<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
            'name'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'message'=> 'required',
            'photo'=> 'mimes:jpeg,jpg,png|max:2048',
            'document'=> 'mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            'captcha'=> 'required|captcha',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните ФИО',
            'phone.required' => 'Заполните Телефон',
            'email.required' => 'Заполните E-mail',
            'message.required' => 'Заполните Сообщение',
            'photo.mimes' => 'Фото должно быть в формате: jpeg,jpg,png',
            'document.mimes' => 'Документ должн быть в формате: pdf,doc,docx',
            'photo.max' => 'Размер фото не должен превышать 2 МБ',
            'document.max' => 'Размер документа не должен превышать 2 МБ',
            'captcha.required' => 'Введите каптчу',
            'captcha.captcha' => 'Каптча введена некорректно',
        ];
    }
}
