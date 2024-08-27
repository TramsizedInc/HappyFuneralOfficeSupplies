<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerDataRequest extends FormRequest
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
            'nation' => 'nullable|string',
            'customer_name_prefix' => 'nullable|string',
            'customer_first_name' => 'nullable|string',
            'customer_last_name' =>  'nullable|string',
            'born_name' => 'nullable|string',
            'zip_code' => 'nullable|string',
            'street' => 'nullable|string',
            'house_number' => 'nullable|string',
            'mother_name' =>  'nullable|string',
            // 'birth_place_with_birth_day' => 'required',
            'city' => 'nullable|string',
            'mobile_number' => 'nullable|string',
            'email' => 'nullable|email',
            'id_card_number' => 'nullable|string',
            'id_card_expire_date' => 'nullable|date',
            'id_card_exhibition_place' => 'nullable|string',
            'exhibiting_office' => 'nullable|string',
            'address_id_number' => 'nullable|string',
            'customer_birth_day' => 'nullable|date',
            'birth_place' => 'nullable|string',
            'order_uuid' => 'nullable|string',
        ];
    }
}
