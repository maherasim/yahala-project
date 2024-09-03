<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSongRequest extends FormRequest
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
            'name' => 'nullable',
            'music_id' => Rule::requiredIf(function () {
                return empty($this->request->get('album_id'));
            }),
            'album_id' => Rule::requiredIf(function () {
                return empty($this->request->get('music_id'));
            }),
            'artist_id' => 'nullable',
            'audio' => 'nullable',
            'file_size' => 'nullable',
            'length' => 'nullable',
            'status' => 'nullable',
        ];
    }
}
