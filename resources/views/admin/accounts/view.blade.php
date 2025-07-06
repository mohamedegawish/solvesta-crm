<x-layout title="{{ $contact->first_name . ' ' . $contact->last_name }}">

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-2xl">

                {{-- Page Header --}}
                <div class="p-6 sm:p-8 bg-white border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start">
                        {{-- Contact Name and Title --}}
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 tracking-tight">
                                {{ $contact->first_name }} {{ $contact->last_name }}
                            </h1>
                            <p class="mt-2 text-lg text-gray-600">
                                @if($contact->job_title)
                                    {{ $contact->job_title }}
                                @endif
                                @if($contact->company)
                                    at <span class="font-semibold text-gray-800">{{ $contact->company }}</span>
                                @endif
                            </p>
                        </div>

                        {{-- Action Buttons --}}
                        <div class="mt-4 sm:mt-0 flex space-x-3 flex-shrink-0">
                            <a href="/contacts/{{ $contact->id }}/edit" class="inline-flex items-center space-x-2 px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.536L16.732 3.732z" />
                                </svg>
                                <span>Edit</span>
                            </a>
                            <form action="/contacts/{{ $contact->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center space-x-2 px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-red-700 uppercase tracking-widest shadow-sm hover:bg-red-50 hover:text-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    <span>Delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="p-6 sm:p-8 bg-white grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-10">

                    <div class="space-y-10">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
                                <h3 class="font-semibold text-lg text-gray-800">Contact Details</h3>
                            </div>
                            <dl class="divide-y divide-gray-200">
                                @if($contact->email)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Email</dt><dd class="text-sm text-gray-900 col-span-2"><a href="mailto:{{ $contact->email }}" class="text-indigo-600 hover:text-indigo-800 hover:underline">{{ $contact->email }}</a></dd></div>
                                @endif
                                @if($contact->email_2)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Email 2</dt><dd class="text-sm text-gray-900 col-span-2"><a href="mailto:{{ $contact->email_2 }}" class="text-indigo-600 hover:text-indigo-800 hover:underline">{{ $contact->email_2 }}</a></dd></div>
                                @endif
                                @if($contact->phone)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Phone</dt><dd class="text-sm text-gray-900 col-span-2"><a href="tel:{{ $contact->phone }}" class="text-indigo-600 hover:text-indigo-800 hover:underline">{{ $contact->phone }}</a></dd></div>
                                @endif
                                @if($contact->phone_2)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Phone 2</dt><dd class="text-sm text-gray-900 col-span-2"><a href="tel:{{ $contact->phone_2 }}" class="text-indigo-600 hover:text-indigo-800 hover:underline">{{ $contact->phone_2 }}</a></dd></div>
                                @endif
                                @if($contact->mobile)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Mobile</dt><dd class="text-sm text-gray-900 col-span-2"><a href="tel:{{ $contact->mobile }}" class="text-indigo-600 hover:text-indigo-800 hover:underline">{{ $contact->mobile }}</a></dd></div>
                                @endif
                                @if($contact->fax)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Fax</dt><dd class="text-sm text-gray-900 col-span-2">{{ $contact->fax }}</dd></div>
                                @endif
                            </dl>
                        </div>
                    </div>

                    <div class="space-y-10">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                                <h3 class="font-semibold text-lg text-gray-800">Address</h3>
                            </div>
                            <dl class="divide-y divide-gray-200">
                                @if($contact->mailing_street)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Mailing</dt><dd class="text-sm text-gray-900 col-span-2 not-italic"><address>{{ $contact->mailing_street }}<br>{{ $contact->mailing_city }}, {{ $contact->mailing_state }} {{ $contact->mailing_zip_code }}<br>{{ $contact->mailing_country }}</address></dd></div>
                                @endif
                                @if($contact->other_street)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Other</dt><dd class="text-sm text-gray-900 col-span-2 not-italic"><address>{{ $contact->other_street }}<br>{{ $contact->other_city }}, {{ $contact->other_state }} {{ $contact->other_zip_code }}<br>{{ $contact->other_country }}</address></dd></div>
                                @endif
                                @if(!$contact->mailing_street && !$contact->other_street)
                                <div class="py-3"><p class="text-sm text-gray-500">No address information provided.</p></div>
                                @endif
                            </dl>
                        </div>
                        
                        @if($contact->assistant_name)
                        <div class="space-y-4">
                             <div class="flex items-center space-x-3">
                                <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m-7.5-2.952a4.5 4.5 0 011.88-3.762A4.5 4.5 0 0118 15.75l-2.952 2.952a4.5 4.5 0 01-6.364-6.364l2.952-2.952A4.5 4.5 0 0115.75 6h-1.5a4.5 4.5 0 00-4.5 4.5v1.5a4.5 4.5 0 004.5 4.5h1.5m-6.045-6.045L7.5 15l4.5 4.5" /></svg>
                                <h3 class="font-semibold text-lg text-gray-800">Assistant</h3>
                            </div>
                             <dl class="divide-y divide-gray-200">
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Name</dt><dd class="text-sm text-gray-900 col-span-2">{{ $contact->assistant_name }}</dd></div>
                                @if($contact->assistant_phone)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Phone</dt><dd class="text-sm text-gray-900 col-span-2"><a href="tel:{{ $contact->assistant_phone }}" class="text-indigo-600 hover:text-indigo-800 hover:underline">{{ $contact->assistant_phone }}</a></dd></div>
                                @endif
                            </dl>
                        </div>
                        @endif
                    </div>

                    <div class="space-y-10">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" /></svg>
                                <h3 class="font-semibold text-lg text-gray-800">Additional Information</h3>
                            </div>
                            <dl class="divide-y divide-gray-200">
                                @if($contact->department)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Department</dt><dd class="text-sm text-gray-900 col-span-2">{{ $contact->department }}</dd></div>
                                @endif
                                @if($contact->lead_source)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Lead Source</dt><dd class="text-sm text-gray-900 col-span-2">{{ $contact->lead_source }}</dd></div>
                                @endif
                                @if($contact->birth_date)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Birth Date</dt><dd class="text-sm text-gray-900 col-span-2">{{ \Carbon\Carbon::parse($contact->birth_date)->format('F j, Y') }}</dd></div>
                                @endif
                                @if($contact->Skype_ID)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Skype ID</dt><dd class="text-sm text-gray-900 col-span-2">{{ $contact->Skype_ID }}</dd></div>
                                @endif
                                @if($contact->twitter)
                                <div class="py-3 grid grid-cols-3 gap-4"><dt class="text-sm font-medium text-gray-500">Twitter</dt><dd class="text-sm text-gray-900 col-span-2"><a href="https://twitter.com/{{ $contact->twitter }}" target="_blank" rel="noopener noreferrer" class="text-indigo-600 hover:text-indigo-800 hover:underline">{{ '@' . $contact->twitter }}</a></dd></div>
                                @endif
                            </dl>
                        </div>
                    </div>
                </div>

                @if($contact->description)
                <div class="p-6 sm:p-8 bg-gray-50/50 border-t border-gray-200">
                    <div class="flex items-center space-x-3">
                         <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                        <h3 class="font-semibold text-lg text-gray-800">Description</h3>
                    </div>
                    <div class="mt-4 text-sm text-gray-700 prose prose-sm max-w-none">
                        {!! nl2br(e($contact->description)) !!}
                    </div>
                </div>
                @endif
                
            </div>
        </div>
    </div>
</x-layout>