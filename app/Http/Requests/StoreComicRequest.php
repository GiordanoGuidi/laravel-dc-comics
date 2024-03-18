<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreComicRequest extends FormRequest
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
            'title' => 'required|string|unique:comics',
            'description' => 'nullable|string',
            'thumb' => 'url:http,https',
            'price' => 'string|required',
            'series' => 'string|required',
            'sale_date' => 'nullable|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ];
    }
}
