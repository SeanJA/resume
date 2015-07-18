<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreExperienceRequest extends Request
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
            'title'=>'required',
            'company' => 'required',
            'start' => 'required|date',
            'end' => 'date|after:start',
            'type' => 'in:Education,Work,Open-source,Projects',
            'description' => 'required',
//            'file' => 'mimes:jpeg,jpg,png,gif'
        ];
    }
}
