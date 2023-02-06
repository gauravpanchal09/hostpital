<?php

/**
 * Patient
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Patient extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'address' => 'required|max:255',
            'age' => 'required|numeric',
            'aadhar_card' => 'required|numeric|digits:12',
            'mobile' => 'required|numeric|digits:10',
            'hospital_id' => 'nullable|exists:hospitals,id',
            'tests' => 'required|max:255',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'mobile' => str_replace(['-', '_'], '', $this->mobile),
            'aadhar_card' => str_replace(['/', '_', ' '], '', $this->aadhar_card)
        ]);
    }
}
