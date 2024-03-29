<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'book_name' => 'required',
            'user_id' => 'required',
            'contact_number' => 'required',
            'donor_name'  => 'required',
            'category' => 'required',
            'division' => 'required',
            'district' => 'required',
            'address' => 'required'
        ];
    }
}
