<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email', // a users.email-re vonatkozóan egyedinek kell lennie
            'name' => 'required|min:5',
            'password' => 'required|min:8',
            'password_confirmation' =>'required|same:password' //Azonos a password mező értékével !SAME!
        ];
    }
}
