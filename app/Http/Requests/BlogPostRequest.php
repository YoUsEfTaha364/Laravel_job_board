<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
 
    
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
              "title"=>"bail|required|unique:post,title,{$this->input('id')}",
            "author"=>"required",
            "body"=>"required|max:200"
        ];
    }
    public function messages(): array
    {
        return [
             "title.required"=>"field must be required",
             "author.required"=>"field must be required",
             "body.required"=>"field must be required",
             "body.max"=>"field must be not exceeds 200 char "

        ];
    }
}
