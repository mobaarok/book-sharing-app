<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookWantedRequest extends FormRequest
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
            'book_id' => 'required',
            'donor_user_id' => 'required',
            'receiver_user_id' => 'required',
            'receiver_need' => 'required',
            'receiver_address' => 'required',
            'receiver_contact_number' => 'required'
        ];
    }
}
