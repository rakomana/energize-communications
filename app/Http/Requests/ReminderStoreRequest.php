<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReminderStoreRequest extends FormRequest
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
            'first_name' => 'required|string',
            'email' => 'required|email',//how many times each user must be able to get the reminder
            'mobile_number' => 'required|string', //rule
            'est_contract_due_date' => 'required|string',
            'last_name' => 'nullable|string',
            'company' => 'nullable|string',
            'current_spend' => 'nullable|string',
            'no_of_phones' => 'nullable|string|max:255',
            'current_network' => 'nullable|string',
            'phone_type' => 'nullable|string'
        ];
    }
}
