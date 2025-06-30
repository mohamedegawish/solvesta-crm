<x-layout title="New Contact">

    <div class="w-full mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
        <form id="contact-form" action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <!-- Page 1: Personal and Contact Information -->
            <div id="page1" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Contact Owner -->
                <div class="md:col-span-2">
                    <label for="contact_owner_id"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Owner</label>
                    <select id="contact_owner_id" name="contact_owner_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a user</option>
                        <option value="user1">Admin User</option>
                        <option value="user2">Sales Rep A</option>
                        <option value="user3">Support Staff B</option>
                    </select>
                </div>

                <!-- First Name -->
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                    <input type="text" id="first_name" name="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="John">
                </div>

                <!-- Last Name -->
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                    <input type="text" id="last_name" name="last_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Doe">
                </div>

                <!-- Account Name (company_id) -->
                <div>
                    <label for="company_id"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Name</label>
                    <input type="text" id="company_id" name="company_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="e.g., Acme Corporation">
                </div>

                <!-- Email -->
                <div>
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@company.com">
                </div>

                <!-- Secondary Email (email-2) -->
                <div>
                    <label for="email-2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Secondary Email</label>
                    <input type="email" id="email-2" name="email-2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="personal@email.com">
                </div>

                <!-- Email Opt-Out (not in model, keep as is) -->
                <div class="flex items-center pt-6">
                    <input id="email-opt-out" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="email-opt-out" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email Opt-Out</label>
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                    <input type="tel" id="phone" name="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="(123) 456-7890">
                </div>

                <!-- Other Phone (phone-2) -->
                <div>
                    <label for="phone-2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Phone</label>
                    <input type="tel" id="phone-2" name="phone-2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Mobile -->
                <div>
                    <label for="mobile"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile</label>
                    <input type="tel" id="mobile" name="mobile"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Fax -->
                <div>
                    <label for="fax" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fax</label>
                    <input type="tel" id="fax" name="fax"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Assistant Name (assistant_name) -->
                <div>
                    <label for="assistant_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assistant</label>
                    <input type="text" id="assistant_name" name="assistant_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Assistant Phone -->
                <div>
                    <label for="assistant_phone"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assistant Phone</label>
                    <input type="tel" id="assistant_phone" name="assistant_phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Skype ID (Skype_ID) -->
                <div>
                    <label for="Skype_ID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skype ID</label>
                    <input type="text" id="Skype_ID" name="Skype_ID"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Twitter -->
                <div>
                    <label for="twitter"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Twitter</label>
                    <input type="text" id="twitter" name="twitter"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="@username">
                </div>

                <!-- Reports To (not in model, remove) -->
                <!-- Lead Source -->
                <div>
                    <label for="lead_source" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lead Source</label>
                    <select id="lead_source" name="lead_source"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a source</option>
                        <option value="advertisement">Advertisement</option>
                        <option value="referral">Referral</option>
                        <option value="website">Website</option>
                        <option value="cold-call">Cold Call</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Department -->
                <div>
                    <label for="department"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                    <input type="text" id="department" name="department"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="e.g., Sales, Marketing">
                </div>

                <!-- Job Title (job_title) -->
                <div>
                    <label for="job_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job Title</label>
                    <input type="text" id="job_title" name="job_title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Date of Birth (birth_date) -->
                <div>
                    <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
                    <input type="date" id="birth_date" name="birth_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Navigation Button for Page 1 -->
                <div class="md:col-span-2 mt-8 flex justify-end">
                    <button type="button" onclick="showPage2()"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                        Next Page
                    </button>
                </div>
            </div>

            <!-- Page 2: Address and Description Information -->
            <div id="page2" class="grid grid-cols-1 md:grid-cols-2 gap-6 hidden">
                <!-- Address Information Section -->
                <div class="md:col-span-2 mt-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">🏠 Address Information</h2>
                </div>

                <!-- Mailing Street -->
                <div class="md:col-span-2">
                    <label for="mailing_street"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mailing Street</label>
                    <input type="text" id="mailing_street" name="mailing_street"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- Mailing City -->
                <div>
                    <label for="mailing_city"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mailing City</label>
                    <input type="text" id="mailing_city" name="mailing_city"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- Mailing State -->
                <div>
                    <label for="mailing_state"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mailing State</label>
                    <input type="text" id="mailing_state" name="mailing_state"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- Mailing Zip Code -->
                <div>
                    <label for="mailing_zip_code"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mailing Zip Code</label>
                    <input type="text" id="mailing_zip_code" name="mailing_zip_code"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- Mailing Country -->
                <div>
                    <label for="mailing_country"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mailing Country</label>
                    <input type="text" id="mailing_country" name="mailing_country"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Copy Address Button (copy_mailing_to_other_address) -->
                <div class="md:col-span-2">
                    <button type="button" id="copy-address-btn"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Copy Mailing to Other Address
                    </button>
                </div>

                <!-- Other Street -->
                <div class="md:col-span-2">
                    <label for="other_street" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Street</label>
                    <input type="text" id="other_street" name="other_street"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- Other City -->
                <div>
                    <label for="other_city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other City</label>
                    <input type="text" id="other_city" name="other_city"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- Other State -->
                <div>
                    <label for="other_state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other State</label>
                    <input type="text" id="other_state" name="other_state"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- Other Zip Code -->
                <div>
                    <label for="other_zip_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Zip Code</label>
                    <input type="text" id="other_zip_code" name="other_zip_code"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- Other Country -->
                <div>
                    <label for="other_country"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Country</label>
                    <input type="text" id="other_country" name="other_country"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <!-- Description Section -->
                <div class="md:col-span-2 mt-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">📝 Description Information</h2>
                </div>
                <div class="md:col-span-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" name="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Add any additional notes here..."></textarea>
                </div>

                <!-- Navigation Buttons for Page 2 -->
                <div class="md:col-span-2 mt-8 flex justify-between">
                    <button type="button" onclick="showPage1()"
                        class="text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-500 dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                        Previous Page
                    </button>
                    <button type="submit"
                        class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">
                        Save Contact
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Copy address functionality
            document.getElementById('copy-address-btn').addEventListener('click', () => {
                document.getElementById('other_street').value = document.getElementById('mailing_street').value;
                document.getElementById('other_city').value = document.getElementById('mailing_city').value;
                document.getElementById('other_state').value = document.getElementById('mailing_state').value;
                document.getElementById('other_zip_code').value = document.getElementById('mailing_zip_code').value;
                document.getElementById('other_country').value = document.getElementById('mailing_country').value;
            });
        });

        function showPage1() {
            document.getElementById('page1').classList.remove('hidden');
            document.getElementById('page2').classList.add('hidden');
        }

        function showPage2() {
            document.getElementById('page1').classList.add('hidden');
            document.getElementById('page2').classList.remove('hidden');
        }
    </script>

</x-layout>