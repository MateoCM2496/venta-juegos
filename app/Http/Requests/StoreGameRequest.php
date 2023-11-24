<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
            'name' => ['required', 'max:40'],
            'description' => ['required', 'max:600'],
            'image' => ['required'],
            'gender' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
            'file' => ['require', 'mimes:jfif,pjpeg,jpeg,pjp,jpg,png,heic,heif', 'max:15360']
        ];
    }
}
