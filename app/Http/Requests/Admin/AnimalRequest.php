<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AnimalRequest extends FormRequest
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
        if($this->animal)
        {
            return [
                'owner_id'=>'required',
                'name'=>[
                    'required',
                    Rule::unique('animals')->ignore($this->animal)->whereNull('deleted_at')
                ],
                'gender'=>[
                    'required',
                    Rule::in(['male','female']),
                ],
                'dob'=>'required|date_format:d-m-Y'
                
            ];
        }
        else{
            return [
                'owner_id'=>'required',
                'name'=>[
                    'required',
                    Rule::unique('animals')->WhereNull('deleted_at')
                ],
                'gender'=>[
                    'required',
                    Rule::in(['male','female']),
                ],
                'dob'=>'required|date_format:d-m-Y'
            ];
        }
        
    }
}
