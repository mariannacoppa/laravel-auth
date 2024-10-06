<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name' => 'required|max:200',
            'slug' => 'required|max:255'
        ];
    }
    public function messages(){
        return [
            "name.required" => "Il nome del progetto è obbligatorio",
            "name.max" => "Il nome del progetto dev'essere lungo al massimo :max caratteri",
            "slug.required" => "Lo slug del progetto è obbligatorio",
            "slug.max" => "Lo slug del progetto dev'essere lungo al massimo :max caratteri"
        ];
    }
}
