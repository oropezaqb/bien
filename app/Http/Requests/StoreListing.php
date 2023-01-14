<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StoreListing extends FormRequest
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
            'contract' => ['required', Rule::in(['Sale', 'Rent'])],
            'property_type' => ['required'],
            'property_description' => ['required'],
            'price' => ['numeric'],
            'address_barangay' => ['required'],
            'address_city' => ['required'],
            'address_region' => ['required'],
            'available_at' => ['required', 'date'],
            'owner_name' => ['required'],
            'phone_number' => ['required'],
            'photos' => ['required'],
            'photos.*' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:3048'],
            'user_id' => ['required', 'exists:App\Models\User,id']
        ];
    }
}
