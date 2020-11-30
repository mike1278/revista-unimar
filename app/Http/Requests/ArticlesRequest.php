<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ArticlesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'author' => 'required|string|min:3|max:150',
            'image' => 'required|image',
            'file' => 'required|file|mimes:pdf,docx',
            'title' => 'required|array',
            'text' => 'required|array',
            'title.es' => 'required|min:3|max:255',
            'text.es' => 'required|min:3|max:60000',
        ];
    }
}
