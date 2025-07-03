<x-simple-layout title="Sign Up for Solvesta CRM">

  

    <div class="min-h-screen bg-gray-900 md:flex">

        <div class="relative hidden w-1/2 overflow-hidden items-center justify-around bg-gradient-to-tr from-blue-800 to-gray-900 md:flex">
            <div>
                <h1 class="font-sans text-4xl font-bold text-white">Solvesta CRM</h1>
                <p class="mt-2 text-blue-200">Start building stronger customer relationships today.</p>
                <a href="#" class="mt-8 inline-block rounded-lg bg-white px-5 py-3 font-semibold text-blue-700 transition duration-300 ease-in-out hover:bg-blue-100">Learn More</a>
            </div>
            <div class="absolute -bottom-32 -left-40 h-80 w-80 rounded-full border-4 border-t-8 border-opacity-30 border-blue-400"></div>
            <div class="absolute -bottom-40 -left-20 h-80 w-80 rounded-full border-4 border-t-8 border-opacity-30 border-blue-400"></div>
            <div class="absolute -top-40 -right-0 h-80 w-80 rounded-full border-4 border-t-8 border-opacity-30 border-blue-400"></div>
            <div class="absolute -top-20 -right-20 h-80 w-80 rounded-full border-4 border-t-8 border-opacity-30 border-blue-400"></div>
        </div>

        <div class="flex w-full items-center justify-center bg-gray-900 py-12 px-4 sm:px-6 lg:px-8 md:w-1/2">
            <div class="w-full max-w-md space-y-8">
                <div>
                    <h2 class="text-center text-3xl font-extrabold text-white">Create Your Account</h2>
                    <p class="mt-2 text-center text-sm text-gray-400">
                        Or <a href="/login" class="font-medium text-blue-500 hover:text-blue-400">sign in to your existing account</a>
                    </p>
                </div>
                
                <form class="mt-8 space-y-6" action="/signup" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- First Name -->
                        <div>
                            <label for="first-name" class="sr-only">First Name</label>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input id="first-name" name="first_name" type="text" required class="block w-full rounded-md border-0 bg-gray-800 py-3 pl-10 text-gray-200 ring-1 ring-inset ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm" placeholder="First Name">
                            </div>
                             @error('first_name')
                                 <div class="text-red-600 text-sm mt-1">{{ $message }}</div>

                            @enderror
                        </div>
                        
                        <!-- Last Name -->
                        <div>
                            <label for="last-name" class="sr-only">Last Name</label>
                             <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                   <!-- Intentionally empty to align with the first name input -->
                                </div>
                                <input id="last-name" name="last_name" type="text" required class="block w-full rounded-md border-0 bg-gray-800 py-3 pl-10 text-gray-200 ring-1 ring-inset ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm" placeholder="Last Name">
                            </div>
                        </div>
                         @error('last_name')
                                 <div class="text-red-600 text-sm mt-1">{{ $message }}</div>

                            @enderror
                    </div>

                    <!-- Company Name -->
                    <div>
                        <label for="company" class="sr-only">Company Name</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18h16.5M2.25 9h16.5m-16.5 6h16.5m-1.632 4.5l-2.13-2.13m0 0l-2.13 2.13M18.75 4.5l-2.13 2.13m0 0l-2.13-2.13" />
                                </svg>
                            </div>
                            <input id="company" name="company" type="text" required class="block w-full rounded-md border-0 bg-gray-800 py-3 pl-10 text-gray-200 ring-1 ring-inset ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm" placeholder="Company Name">
                        </div>
                         @error('company')
                                 <div class="text-red-600 text-sm mt-1">{{ $message }}</div>

                            @enderror
                    </div>
                    
                    <!-- Email Address -->
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" /><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <input id="email-address" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 bg-gray-800 py-3 pl-10 text-gray-200 ring-1 ring-inset ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm" placeholder="Work Email Address">
                        </div>
                         @error('email')
                                 <div class="text-red-600 text-sm mt-1">{{ $message }}</div>

                            @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="email-address" class="sr-only">Phone</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
  <path d="M2.003 5.884A2 2 0 014 4h2.586a1 1 0 01.707.293l1.414 1.414a1 1 0 01.293.707v2.586a1 1 0 01-.293.707l-1 1a12.08 12.08 0 005.657 5.657l1-1a1 1 0 01.707-.293h2.586a1 1 0 01.707.293l1.414 1.414a1 1 0 01.293.707V16a2 2 0 01-2 2c-8.837 0-16-7.163-16-16a2 2 0 012-2h.003z"/>
</svg>

                            </div>
                            <input id="text" name="phone" type="phone" autocomplete="phone" required class="block w-full rounded-md border-0 bg-gray-800 py-3 pl-10 text-gray-200 ring-1 ring-inset ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm" placeholder="Your Phone Number">
                        </div>
                         @error('phone')
                                 <div class="text-red-600 text-sm mt-1">{{ $message }}</div>

                            @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="password" name="password" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 bg-gray-800 py-3 pl-10 text-gray-200 ring-1 ring-inset ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm" placeholder="Password">
                        </div>
                         @error('password')
                                 <div class="text-red-600 text-sm mt-1">{{ $message }}</div>

                            @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password-confirmation" class="sr-only">Confirm Password</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="password-confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 bg-gray-800 py-3 pl-10 text-gray-200 ring-1 ring-inset ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm" placeholder="Confirm Password">
                        </div>
                         @error('password_confirmation')
                                 <div class="text-red-600 text-sm mt-1">{{ $message }}</div>

                            @enderror
                    </div>
                    
                    <div class="flex items-center">
                        <input id="terms-and-privacy" name="terms-and-privacy" type="checkbox" required class="h-4 w-4 rounded border-gray-600 bg-gray-800 text-blue-600 focus:ring-blue-600">
                        <label for="terms-and-privacy" class="ml-2 block text-sm text-gray-400">
                            I agree to the <a href="#" class="font-medium text-blue-500 hover:text-blue-400">Terms</a> and <a href="#" class="font-medium text-blue-500 hover:text-blue-400">Privacy Policy</a>.
                        </label>
                    </div>

                    <div>
                        <button type="submit" class="group relative flex w-full justify-center rounded-md bg-blue-600 py-3 px-4 text-sm font-semibold text-white transition duration-300 ease-in-out hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                            Create Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-simple-layout>