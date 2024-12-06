<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LiveChatScriptRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Set to true to allow all authorized users
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'script_code' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/<script.*?>.*?<\\/script>/is', $value)) {
                        $fail('The script code must contain valid <script> tags.');
                    }
                    if (!preg_match('/src=["\']https?:\\/\\/.+?["\']/', $value)) {
                        $fail('The script code must include a valid src URL.');
                    }
                },
            ],
        ];
    }
}
