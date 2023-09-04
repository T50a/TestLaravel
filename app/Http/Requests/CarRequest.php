<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $color = config('app-cars.color');

        return [
            'brand' => 'required|max:64',
            'model' => 'required|max:64',
            'price' => 'required|integer|multiple_of:1000',
            'color' => ['required', Rule::in(array_keys($color))],
        ];
    }
}
