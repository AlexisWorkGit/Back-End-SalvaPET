<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmailSettingRequest extends FormRequest
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
            'host'=>'required',
            'port'=>'required|numeric',
            'username'=>'required',
            'password'=>'required',
            'encryption'=>'required',
            'from_address'=>'required|email',
            'from_name'=>'required',
            'owner_code.subject'=>'required',
            'owner_code.body'=>'required|regex:/{owner_code}/|regex:/{owner_name}/',
            'receipt.subject'=>'required',
            'receipt.body'=>'required|regex:/{owner_name}/',
            'report.subject'=>'required',
            'report.body'=>'required|regex:/{owner_name}/',
            'reset_password.subject'=>'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'owner_code.subject' => 'owner code mail subject',
            'owner_code.body' => 'owner code mail body',
            'tests_notification.subject' => 'Tests notification  mail subject',
            'tests_notification.body' => 'Tests notification mail body',
            'reset_password.subject' => 'Resetting password mail subject',
        ];
    }
}
