<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ShowZipCodesRequest extends FormRequest
{

    public function validationData()
    {
        $this->replace(['zip_code' => $this->route('zipCode')]);
        return parent::validationData();
    }

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
            'zip_code' => ['required', Rule::exists('zip_codes', 'zip_code')]
        ];
    }


}
