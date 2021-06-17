<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Digite um email num formato valido',
            'email.required' => 'O campo e-mail é obrigatorio',
            'name.required' => 'O campo nome é obrigatorio',
            'message.required' => 'O campo da messagem é obrigatorio',
        ];
    }
}