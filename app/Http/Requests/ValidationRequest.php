<?php

namespace App\Http\Requests;

use App\Rules\UppercaseRule;
use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            'text' => ['required',new UppercaseRule()],
            'number' => ['required','integer', function ($attribute, $value, $fail) {
                if ((($value % 5) != 0) || ($value == 0)) {
                    return $fail('The ' . $attribute . ' must be divisible by 5');
                }
            }
],
        ];
    }
}
