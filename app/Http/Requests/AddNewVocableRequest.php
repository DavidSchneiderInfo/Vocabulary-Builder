<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewVocableRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'foreign_term' => 'required|min:1',
            'native_term' => 'required|min:1',
        ];
    }

    public function getForeignTerm()
    {
        return $this->get('foreign_term');
    }

    public function getNativeTerm()
    {
        return $this->get('native_term');
    }
}

