<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|in:pendiente,en_espera,en_revision,completada'
        ];
    }

    /**
     * This is a PHP function that returns an array of error messages for form validation.
     * 
     * @return A list of validation error messages in the form of an associative array. The keys are
     * the names of the input fields being validated and the values are the corresponding error
     * messages.
     */
    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio',
            'name.string' => 'El campo nombre solo acepta strings',
            'description.required' => 'El campo descripcion es obligatorio',
            'description.string' => 'El campo descripcion solo acepta strings',
            'status.required' => 'El campo estatus es obligatorio',
            'status.in' => 'El campo estatus solo acepta las opciones; pendiente, en espera, en revision y completada'
        ];
    }
}
