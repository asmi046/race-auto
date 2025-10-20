<?php

namespace App\Http\Requests\Consultation;

use Illuminate\Foundation\Http\FormRequest;

class ConsultFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Получить сообщения об ошибках для определенных правил валидации.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'vin.required' => 'Поле "VIN номер" обязательно для заполнения',
            'vin.string' => 'VIN номер должен быть строкой',
            'part.string' => 'Поле Деталь должно быть строкой',
            'phone.required' => 'Поле "Телефон" обязательно для заполнения',
            'phone.string' => 'Телефон должен быть строкой',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "vin" => ['required', 'string'],
            "part" => ['nullable','string'],
            "phone" => ['required','string'],
        ];
    }
}
