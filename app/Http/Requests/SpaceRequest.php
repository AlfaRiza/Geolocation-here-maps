<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpaceRequest extends FormRequest
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
            'title' => 'required|min:3',
            'address' => 'required|min:5',
            'description' => 'required|min:10',
            'latitude' => 'required',
            'longitude' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul harus diisi',
            'title.min' => 'Judul minimal 3 karakter',
            'address.required' => 'Address harus diisi',
            'address.min' => 'Address minimal 5',
            'description.required' => 'Deskripsi harus diisi',
            'description.min' => 'Deskripsi minimal 10 karakter',
            'latitude.required' => 'Latitude harus diisi',
            'longitude.required' => 'Longitude harus diisi'
        ];
    }
}
