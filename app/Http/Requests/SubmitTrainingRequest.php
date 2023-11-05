<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitTrainingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'vocable_id' => 'required|exists:vocables,id',
            'native_term' => 'required|min:1',
        ];
    }
}
