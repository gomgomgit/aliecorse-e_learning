<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'user_id' => 'required',
            'category_id' => 'required',
            'title' => 'required|max:20|string',
            'content' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'Admin Harus Diisi',
            'category_id.required' => 'Kategori Harus Diisi',
            'title.required' => 'Judul harus diisi',
            'title.max' => 'Judul harus diisi maksimal dengan 20 karakter',
            'title.string' => 'Judul harus diisi dengan abjad',
            'content.required' => 'Konten harus diisi',
            'content.max' => 'Konten harus diisi maksimal 1000 karakter'

        ];
    }
}
 