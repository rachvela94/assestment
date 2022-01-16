<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCommentsCreateRequest extends FormRequest
{
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
            'content' => ['string', 'required'],
            'author_name' => ['string', 'required'],
        ];
    }

    /**
     * @return string
     */
    public function getCommentContent(): string
    {
        return $this->input('content');
    }

    /**
     * @return string
     */
    public function getAuthorName(): string
    {
        return $this->input('author_name');
    }
}
