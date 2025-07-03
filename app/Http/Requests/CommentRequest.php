<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "author"=>"required|unique:comment,author,{$this->input("post_id")}",
            "content"=>"required"
        ];
    }
    public function messages(): array
    {
        return [
            "author.required"=>"required filed",
            "content.required"=>"required filed"
        ];
    }
}
