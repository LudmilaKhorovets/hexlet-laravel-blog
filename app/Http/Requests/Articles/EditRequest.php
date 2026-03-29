<?php

namespace App\Http\Requests\Articles;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $article = $this->route('article');

        $id = is_object($article) ? $article->id : $article;

        return [
            'name' => "required|unique:articles,name,{$id}",
            'body' => 'required|min:100',
        ];
    }
}
