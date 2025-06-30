<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
   

   
    public function rules(): array
    {
        return [
            
            'company' => 'nullable|string|max:255',
            'first_name'=> 'required|string|max:255',
        'last_name'=> 'required|string|max:255',
        'email'=> 'required|email|max:255|unique:contacts,email',
        'email_2'=> 'required|email|max:255',
        'phone'=> 'required|string|max:255',
        'phone_2'=> 'required|string|max:255',
        'mobile'=> 'required|string|max:255',
        'fax'=> 'required|string|max:255',
        'assistant_name'=> 'required|string|max:255',
        'assistant_phone'=> 'required|string|max:255',
        'job_title'=> 'required|string|max:255',
        'Skype_ID'=> 'required|string|max:255',
        'twitter'=> 'required|string|max:255',
        'department'=> 'required|string|max:255',
        'lead_source'=> 'required|string|max:255',
        'birth_date'=> 'required|date_format:Y-m-d',
        'mailing_street'=> 'required|string|max:255',
        'mailing_city'=> 'required|string|max:255',
        'mailing_state'=> 'required|string|max:255',
        'mailing_zip_code'=> 'required|string|max:255',
        'mailing_country'=> 'required|string|max:255',
        'other_street'=> 'nullable|string|max:255',
        'other_city'=> 'nullable|string|max:255',
        'other_state'=> 'nullable|string|max:255',
        'other_zip_code'=> 'nullable|string|max:255',
        'other_country'=> 'nullable|string|max:255',
        'description'=> 'nullable|string'
        ];
    }
}
