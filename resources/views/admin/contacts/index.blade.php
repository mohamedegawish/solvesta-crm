<x-layout title="Contacts">
  <div class="flex justify-end p-0">
            <a href="contacts/create" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <span class="text-white">New Contact</span>
            </a>
        </div>

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
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    2023-10-26
                </td>
                <td class="px-6 py-4">
                    Neil Sims
                </td>
                <td class="px-6 py-4">
                    Flowbite Inc.
                </td>
                <td class="px-6 py-4">
                    neil.sims@flowbite.com
                </td>
                <td class="px-6 py-4">
                    (222) 555-0118
                </td>
                <td class="px-6 py-4">
                    Admin User
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    2023-10-25
                </td>
                <td class="px-6 py-4">
                    Bonnie Green
                </td>
                <td class="px-6 py-4">
                    Acme Corp
                </td>
                <td class="px-6 py-4">
                    bonnie@acmecorp.com
                </td>
                <td class="px-6 py-4">
                    (303) 555-0100
                </td>
                <td class="px-6 py-4">
                    Sales Rep
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    2023-10-24
                </td>
                <td class="px-6 py-4">
                    Michael Gough
                </td>
                <td class="px-6 py-4">
                    Stark Industries
                </td>
                <td class="px-6 py-4">
                    michael.gough@stark.io
                </td>
                <td class="px-6 py-4">
                    (480) 555-0103
                </td>
                <td class="px-6 py-4">
                    Admin User
                </td>
            </tr>
        </tbody>
    </table>
</div>

</x-layout>