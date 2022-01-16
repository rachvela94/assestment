<?php

namespace App\Http\Requests;

class PostCommentUpdateRequest extends PostCommentsCreateRequest
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
        ];
    }

    /**
     * @return string
     */
    public function getCommentContent(): string
    {
        return $this->input('content');
    }
}
