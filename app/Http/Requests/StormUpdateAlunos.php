<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StormUpdateAlunos extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required','min:2'],
            'idade' => ['required','min:1']
        ];
    }
}
