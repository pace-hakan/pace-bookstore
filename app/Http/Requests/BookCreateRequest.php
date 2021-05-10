<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreateRequest extends FormRequest
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
            'title' => 'required|max:64',
            'description' => 'required|max:256',
        ];
    }

    public function messages()
    {
        return [
            'title.max' => 'Title can be max 64 chars.',
            'description.max' => 'Desciption can be max 256 chars.',
        ];
    }
}
