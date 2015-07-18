<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateExperienceRequest extends StoreExperienceRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = parent::rules();
        $rules['id'] = 'required';
        return $rules;
    }
}
