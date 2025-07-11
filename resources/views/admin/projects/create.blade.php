<x-layout title="Create New Account">
    <div class="container mx-auto p-6">
        <div class="w-full mx-auto p-8 bg-white dark:bg-gray-800 rounded-lg shadow-xl">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Create New Account</h1>
            <form id="account-form" action="{{ route('accounts.store') }}" method="POST">
                @csrf
                <!-- Page 1: Core Account & Financial Information -->
                <div id="page1" class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Account Name -->
                    <div>
                        <label for="account_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Name *</label>
                        <input type="text" id="account_name" name="account_name" value="{{ old('account_name') }}" required
                            class="bg-gray-50 border {{ $errors->has('account_name') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Stark Industries">
                        @error('account_name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <!-- Account Number -->
                    <div>
                        <label for="account_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
                        <input type="text" id="account_number" name="account_number" value="{{ old('account_number') }}"
                            class="bg-gray-50 border {{ $errors->has('account_number') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="ACC-00123">
                        @error('account_number')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <!-- Owner (owner_id) -->
                    <div>
                        <label for="owner_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Owner *</label>
                        <select id="owner_id" name="owner_id" required
                            class="bg-gray-50 border {{ $errors->has('owner_id') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Choose an owner</option>
                            @foreach ($contacts as $contact)
                                <option value="{{ $contact->first_name }} {{ $contact->last_name }}" {{ old('owner_id', auth()->id()) == $contact->id ? 'selected' : '' }}>
                                    {{ $contact->first_name }} {{ $contact->last_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('owner_id')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    
                    <!-- Parent Account (parent_account_id) -->
                    <div>
                        <label for="parent_account_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parent Account</label>
                        <select id="parent_account_id" name="parent_account_id"
                            class="bg-gray-50 border {{ $errors->has('parent_account_id') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">None</option>
                             @foreach ($accounts as $account)
                                <option value="{{ $account->id }}" {{ old('parent_account_id') == $account->id ? 'selected' : '' }}>
                                    {{ $account->account_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('parent_account_id')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <!-- Website -->
                    <div>
                        <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website</label>
                        <input type="url" id="website" name="website" value="{{ old('website') }}"
                            class="bg-gray-50 border {{ $errors->has('website') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="https://www.example.com">
                        @error('website')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    
                    <!-- Account Site -->
                    <div>
                        <label for="account_site" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Site</label>
                        <input type="text" id="account_site" name="account_site" value="{{ old('account_site') }}"
                            class="bg-gray-50 border {{ $errors->has('account_site') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                             placeholder="e.g., New York Office">
                        @error('account_site')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <!-- Phone & Fax -->
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="bg-gray-50 border {{ $errors->has('phone') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="(123) 456-7890">
                        @error('phone')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="fax" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fax</label>
                        <input type="tel" id="fax" name="fax" value="{{ old('fax') }}" class="bg-gray-50 border {{ $errors->has('fax') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @error('fax')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    
                    <!-- Account Type & Industry -->
                    <div>
                        <label for="account_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                        <select id="account_type" name="account_type" class="bg-gray-50 border {{ $errors->has('account_type') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Choose a type</option>
                            <option value="Prospect" {{ old('account_type') == 'Prospect' ? 'selected' : '' }}>Prospect</option>
                            <option value="Customer" {{ old('account_type') == 'Customer' ? 'selected' : '' }}>Customer</option>
                            <option value="Partner" {{ old('account_type') == 'Partner' ? 'selected' : '' }}>Partner</option>
                            <option value="Reseller" {{ old('account_type') == 'Reseller' ? 'selected' : '' }}>Reseller</option>
                        </select>
                        @error('account_type')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="industry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Industry</label>
                        <select id="industry" name="industry" class="bg-gray-50 border {{ $errors->has('industry') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Choose an industry</option>
                            <option value="Technology" {{ old('industry') == 'Technology' ? 'selected' : '' }}>Technology</option>
                            <option value="Manufacturing" {{ old('industry') == 'Manufacturing' ? 'selected' : '' }}>Manufacturing</option>
                        </select>
                        @error('industry')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <!-- Annual Revenue & Employees -->
                    <div>
                        <label for="annual_revenue" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Annual Revenue</label>
                        <input type="number" id="annual_revenue" name="annual_revenue" value="{{ old('annual_revenue') }}" class="bg-gray-50 border {{ $errors->has('annual_revenue') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="50000000">
                        @error('annual_revenue')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="employees" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employees</label>
                        <input type="number" id="employees" name="employees" value="{{ old('employees') }}" class="bg-gray-50 border {{ $errors->has('employees') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="500">
                        @error('employees')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    
                    <!-- Rating & Ownership -->
                    <div>
                        <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
                        <select id="rating" name="rating" class="bg-gray-50 border {{ $errors->has('rating') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">None</option>
                            <option value="Acquired" {{ old('rating') == 'Acquired' ? 'selected' : '' }}>Acquired</option>
                            <option value="Active" {{ old('rating') == 'Active' ? 'selected' : '' }}>Active</option>
                            <option value="Market Failed" {{ old('rating') == 'Market Failed' ? 'selected' : '' }}>Market Failed</option>
                        </select>
                        @error('rating')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="ownership" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ownership</label>
                        <select id="ownership" name="ownership" class="bg-gray-50 border {{ $errors->has('ownership') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">None</option>
                            <option value="Public" {{ old('ownership') == 'Public' ? 'selected' : '' }}>Public</option>
                            <option value="Private" {{ old('ownership') == 'Private' ? 'selected' : '' }}>Private</option>
                            <option value="Subsidiary" {{ old('ownership') == 'Subsidiary' ? 'selected' : '' }}>Subsidiary</option>
                        </select>
                        @error('ownership')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <!-- Ticker Symbol & SIC Code -->
                    <div>
                        <label for="ticker_symbol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ticker Symbol</label>
                        <input type="text" id="ticker_symbol" name="ticker_symbol" value="{{ old('ticker_symbol') }}" class="bg-gray-50 border {{ $errors->has('ticker_symbol') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="e.g., AAPL">
                        @error('ticker_symbol')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="sic_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SIC Code</label>
                        <input type="text" id="sic_code" name="sic_code" value="{{ old('sic_code') }}" class="bg-gray-50 border {{ $errors->has('sic_code') ? 'border-red-500' : 'border-gray-300' }} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="e.g., 7372">
                        @error('sic_code')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    
                    <!-- Navigation Button for Page 1 -->
                    <div class="md:col-span-2 mt-8 flex justify-end">
                        <button type="button" onclick="showPage2()"
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Next: Address Info
                        </button>
                    </div>
                </div>

                <!-- Page 2: Address and Description Information -->
                <div id="page2" class="grid grid-cols-1 md:grid-cols-2 gap-6 hidden">
                    <!-- Billing Address Section -->
                    <div class="md:col-span-2 mt-2">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Billing Address</h2>
                    </div>
                    <div class="md:col-span-2"><input type="text" id="billing_street" name="billing_street" value="{{ old('billing_street') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Street"></div>
                    <div><input type="text" id="billing_city" name="billing_city" value="{{ old('billing_city') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="City"></div>
                    <div><input type="text" id="billing_state" name="billing_state" value="{{ old('billing_state') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="State / Province"></div>
                    <div><input type="text" id="billing_code" name="billing_code" value="{{ old('billing_code') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Zip / Postal Code"></div>
                    <div><input type="text" id="billing_country" name="billing_country" value="{{ old('billing_country') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Country"></div>

                    <!-- Shipping Address Section -->
                    <div class="md:col-span-2 mt-4 flex justify-between items-center">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Shipping Address</h2>
                        <button type="button" id="copy-address-btn" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Copy Billing Address</button>
                    </div>
                    <div class="md:col-span-2"><input type="text" id="shipping_street" name="shipping_street" value="{{ old('shipping_street') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Street"></div>
                    <div><input type="text" id="shipping_city" name="shipping_city" value="{{ old('shipping_city') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="City"></div>
                    <div><input type="text" id="shipping_state" name="shipping_state" value="{{ old('shipping_state') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="State / Province"></div>
                    <div><input type="text" id="shipping_code" name="shipping_code" value="{{ old('shipping_code') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Zip / Postal Code"></div>
                    <div><input type="text" id="shipping_country" name="shipping_country" value="{{ old('shipping_country') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Country"></div>

                    <!-- Description Section -->
                    <div class="md:col-span-2 mt-4"><h2 class="text-xl font-semibold text-gray-900 dark:text-white">Description</h2></div>
                    <div class="md:col-span-2">
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Add any additional notes about the account here...">{{ old('description') }}</textarea>
                        @error('description')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <!-- Navigation Buttons for Page 2 -->
                    <div class="md:col-span-2 mt-8 flex justify-between">
                        <button type="button" onclick="showPage1()" class="text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Previous</button>
                        <button type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save Account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('copy-address-btn').addEventListener('click', () => {
                document.getElementById('shipping_street').value = document.getElementById('billing_street').value;
                document.getElementById('shipping_city').value = document.getElementById('billing_city').value;
                document.getElementById('shipping_state').value = document.getElementById('billing_state').value;
                document.getElementById('shipping_code').value = document.getElementById('billing_code').value;
                document.getElementById('shipping_country').value = document.getElementById('billing_country').value;
            });
        });

        function showPage1() {
            document.getElementById('page1').classList.remove('hidden');
            document.getElementById('page2').classList.add('hidden');
            window.scrollTo(0, 0);
        }

        function showPage2() {
            document.getElementById('page1').classList.add('hidden');
            document.getElementById('page2').classList.remove('hidden');
            window.scrollTo(0, 0);
        }
    </script>
</x-layout>