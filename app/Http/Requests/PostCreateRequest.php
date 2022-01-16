<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title' => ['string', 'required'],
            'url' => ['url', 'required'],
            'author_name' => ['string', 'required'],
        ];
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->input('title');
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->input('url');
    }

    /**
     * @return string
     */
    public function getAuthorName(): string
    {
        return $this->input('author_name');
    }
}
