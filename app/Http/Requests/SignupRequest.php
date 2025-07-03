<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
        'first_name'=>'required|string|max:255',
        'last_name'=> 'required|string|max:255',
        'company'=> 'nullable|string|max:255',
        'email'=> "required|email|max:255|unique:users,email,{$this->input('id')}",
        'phone'=> 'required|string|max:255',
        'password'=> 'required|string|min:8|confirmed',
        ];
    }
}
