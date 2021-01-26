<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Role;

class StoreRequest extends FormRequest
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
            'name' => 'required|unique:roles|max:255',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '* El campo nombre es requerido',
            'name.unique' => '*El nombre ya esta ocupado',
            'description.required' => '* El campo descripcion es requerido',
        ];
    }
}
