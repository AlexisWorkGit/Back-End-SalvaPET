<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
class OwnerRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if($this->owner)
        {
            return [
                'name'=>[
                    'required',
                    Rule::unique('owners')->ignore($this->owner)->whereNull('deleted_at')
                ],
                'gender'=>[
                    'required',
                    Rule::in(['male','female']),
                ],
                'phone'=>[
                    'required',
                    Rule::unique('owners')->ignore($this->owner)->whereNull('deleted_at')
                ],
                'email'=>[
                    'required',
                    'email',
                    Rule::unique('owners')->ignore($this->owner)->whereNull('deleted_at')
                ],
            ];
        }
        else{
            return [
                'name'=>[
                    'required',
                    Rule::unique('owners')->WhereNull('deleted_at')
                ],
                'gender'=>[
                    'required',
                    Rule::in(['male','female']),
                ],
                'phone'=>[
                    'required',
                    Rule::unique('owners')->WhereNull('deleted_at')
                ],
                'email'=>[
                    'required',
                    'email',
                    Rule::unique('owners')->WhereNull('deleted_at')
                ],
            ];
        }
        
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [];
    }
}
