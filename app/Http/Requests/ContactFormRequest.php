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
            'name'    => 'required',
            'email'   => 'required|email:rfc,dns',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Campo nome é obrigatório!',
            'email.email'      => 'Formato de e-mail incorreto!',
            'email.required'   => 'Campo e-mail é obrigatório!',
            'message.required' => 'Campo mensagem é obrigatório!',
        ];
    }

}
