<x-layout title="Contacts">
   
  <div class="flex justify-end p-0">
            <a href="contacts/create" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 w-full sm:w-auto">
                <span class="text-white">New Contact</span>
            </a>
        </div>
 @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4 flex items-center justify-between" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
            <button type="button" onclick="this.parentElement.style.display='none'" class="ml-4 text-green-700 hover:text-green-900 focus:outline-none">&times;</button>
        </div>
    @endif
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-[#2563eb]">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Registered Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Contact Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Account Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Contact Owner
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact )
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    {{ $contact['created_at']->format('d M Y') }}
                </td>
                <td class="px-6 py-4">
                    {{ $contact['first_name'] }} {{ $contact['last_name'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $contact['company'] }}
            </td>
                <td class="px-6 py-4">
                {{ $contact['email'] }}
            </td>
                <td class="px-6 py-4">
                {{ $contact['phone'] }}
                </td>
                <td class="px-6 py-4">
                    Admin User
                </td>
                <td class="px-6 py-4 flex flex-col sm:flex-row gap-2">
                    <a type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center block w-full sm:w-auto">
                        <span class="text-white">View</span>
                    </a>
                    <a type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center block w-full sm:w-auto">
                        <span class="text-white">Delete</span>
                    </a>
                </td>
            </tr>
            @endforeach
           
          
        </tbody>
    </table>
</div>

</x-layout>