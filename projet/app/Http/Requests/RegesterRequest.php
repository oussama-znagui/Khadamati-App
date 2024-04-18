<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegesterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'prenom' => 'required',
            'nom' => 'required',
            'sexe' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'role' => '',
            'email' => 'required',
            'password' => 'required',
            'cpassword' => 'required',
            'ville_id' => 'required',
        ];
    }
}
