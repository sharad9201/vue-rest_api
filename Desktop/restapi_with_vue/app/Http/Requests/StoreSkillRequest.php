<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class StoreSkillRequest extends FormRequest
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
            //
            'name' => ['required', 'min:3', 'max:20'],

            // $this used for exception of id that helps in updated method
            // 'slug' => ['required', 'unique:skills,slug,' . $this->skill->id]

            // other method for validatating updated method in skills table which are prone to id
            'slug' => ['required', ValidationRule::unique('skills')->ignore($this->skill)]
        ];
    }
}
