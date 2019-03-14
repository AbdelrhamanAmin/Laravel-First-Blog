<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use App\Post;
use App\User;

class UpdatePostRequest extends FormRequest
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
        // dd($this->post);
        return [
            'title' =>'required | min:3 | unique:posts,id,' .$this->post,
            'description' =>'required'
        ];
    }
    public function messages()
    {
        return [
        'title.required' => 'Title Field Is Required',
        'tilte.min' => 'Min Title is 3 characters   ',
        'description.required' =>'Description Field is Required'
        ];
    }
}
