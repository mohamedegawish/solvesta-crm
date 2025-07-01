<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   
    public function index()
    {
        $contacts=Contact::latest()->paginate(10);
        return view('admin/contacts.index',['contacts'=>$contacts]);
    }

   
    public function create()
    {
        return view('admin/contacts.create');
        
    }

    
    public function store(ContactFormRequest $request)
    {
      
        $contact= new Contact();
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->email = $request->input('email');
        $contact->email_2 = $request->input('email_2');     
        $contact->phone = $request->input('phone');
        $contact->phone_2 = $request->input('phone_2');
        $contact->mobile = $request->input('mobile');
        $contact->fax = $request->input('fax');
        $contact->assistant_name = $request->input('assistant_name');
        $contact->assistant_phone = $request->input('assistant_phone');
        $contact->job_title = $request->input('job_title');
        $contact->Skype_ID = $request->input('Skype_ID');
        $contact->twitter = $request->input('twitter');
        $contact->department = $request->input('department');
        $contact->company = $request->input('company');
        $contact->lead_source = $request->input('lead_source');
        $contact->birth_date = $request->input('birth_date');
        $contact->mailing_street = $request->input('mailing_street');
        $contact->mailing_city = $request->input('mailing_city');
        $contact->mailing_state = $request->input('mailing_state');
        $contact->mailing_zip_code = $request->input('mailing_zip_code');
        $contact->mailing_country = $request->input('mailing_country');
        $contact->other_street = $request->input('other_street');
        $contact->other_city = $request->input('other_city');
        $contact->other_state = $request->input('other_state');
        $contact->other_zip_code = $request->input('other_zip_code');
        $contact->other_country = $request->input('other_country');
        $contact->description = $request->input('description');
        $contact->save();

      return redirect('contacts')->with('success', 'Contact created successfully!');
        
    }

    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
      $contact = Contact::findOrFail($id);
      return view('admin.contacts.edit', ['contact' => $contact]);  
    }

    
    public function update(ContactFormRequest $request, string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->email = $request->input('email');
        $contact->email_2 = $request->input('email_2');     
        $contact->phone = $request->input('phone');
        $contact->phone_2 = $request->input('phone_2');
        $contact->mobile = $request->input('mobile');
        $contact->fax = $request->input('fax');
        $contact->assistant_name = $request->input('assistant_name');
        $contact->assistant_phone = $request->input('assistant_phone');
        $contact->job_title = $request->input('job_title');
        $contact->Skype_ID = $request->input('Skype_ID');
        $contact->twitter = $request->input('twitter');
        $contact->department = $request->input('department');
        $contact->company = $request->input('company');
        $contact->lead_source = $request->input('lead_source');
        $contact->birth_date = $request->input('birth_date');
        $contact->mailing_street = $request->input('mailing_street');
        $contact->mailing_city = $request->input('mailing_city');
        $contact->mailing_state = $request->input('mailing_state');
        $contact->mailing_zip_code = $request->input('mailing_zip_code');
        $contact->mailing_country = $request->input('mailing_country');
        $contact->other_street = $request->input('other_street');
        $contact->other_city = $request->input('other_city');
        $contact->other_state = $request->input('other_state');
        $contact->other_zip_code = $request->input('other_zip_code');
        $contact->other_country = $request->input('other_country');
        $contact->description = $request->input('description');
        $contact->save();

      return redirect('contacts')->with('success', 'Contact Updated successfully!');

       
    }

    public function destroy(string $id)
    {
        
    }
}
