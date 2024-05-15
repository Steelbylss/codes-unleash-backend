<?php

namespace App\Http\Requests\ProgrammingLanguage;

use App\Http\Requests\ResponseRequest;

class CreateProgrammingLanguageRequest extends ResponseRequest
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
            'name' => ['string','required', 'unique:programming_languages,name'],
            'description' => ['string', 'required']
        ];
    }
}
