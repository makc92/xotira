<?php

namespace App\Http\Requests\Books;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title'=>'required',
            'description.uz' => 'required',
            'description.oz' => 'required',
            'description.ru' => 'required',
            'description.en' => 'required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png|max:1024',
            'book' => 'required|mimes:pdf,doc,docx|max:102400',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Не заполнено название книги',
            'description.uz.required' => 'Не заполнено описание книги на Латинице',
            'description.oz.required' => 'Не заполнено описание книги на Кириллице',
            'description.ru.required' => 'Не заполнено описание книги на Русском',
            'description.en.required' => 'Не заполнено описание книги на Английском',
            'thumbnail.required' => 'Не загружена картинка',
            'thumbnail.mimes' => 'Картинка должна быть в формате: jpeg,jpg,png',
            'thumbnail.max' => 'Размер картинки не должен превышать 1 МБ',
            'book.required' => 'Не загружена книга',
            'book.mimes' => 'Книга должна быть в формате: pdf,doc,docx',
            'book.max' => 'Размер картинки не должен превышать 100 МБ',
        ];
    }
}
