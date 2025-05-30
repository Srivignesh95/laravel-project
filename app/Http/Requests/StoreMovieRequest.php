<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'release_year' => 'required|integer|digits:4',
            'network' => 'nullable|string|max:255',
            'cast' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'rating' => 'nullable|numeric|min:1|max:10',
            'poster_url' => 'nullable|url',
        ];
    }
}
