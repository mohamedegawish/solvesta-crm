<x-simple-layout title="Sign In to Solvesta CRM">

    {{-- 
      This is the login page, designed to be a companion to the sign-up page.
      - It uses the same professional, responsive two-panel layout for consistency.
      - The left panel reinforces branding, while the right panel focuses on the login form.
      - The form includes essential UX features like "Remember me" and "Forgot password?".
    --}}

    <div class="min-h-screen bg-gray-900 md:flex">

        <!-- Left Panel (Branding) - Consistent with Sign-up Page -->
        <div class="relative hidden w-1/2 overflow-hidden items-center justify-around bg-gradient-to-tr from-blue-800 to-gray-900 md:flex">
            <div>
                <h1 class="font-sans text-4xl font-bold text-white">Welcome Back</h1>
                <p class="mt-2 text-blue-200">Manage your customers and drive growth.</p>
                <a href="#" class="mt-8 inline-block rounded-lg bg-white px-5 py-3 font-semibold text-blue-700 transition duration-300 ease-in-out hover:bg-blue-100">Learn More</a>
            </div>
            <div class="absolute -bottom-32 -left-40 h-80 w-80 rounded-full border-4 border-t-8 border-opacity-30 border-blue-400"></div>
            <div class="absolute -bottom-40 -left-20 h-80 w-80 rounded-full border-4 border-t-8 border-opacity-30 border-blue-400"></div>
            <div class="absolute -top-40 -right-0 h-80 w-80 rounded-full border-4 border-t-8 border-opacity-30 border-blue-400"></div>
            <div class="absolute -top-20 -right-20 h-80 w-80 rounded-full border-4 border-t-8 border-opacity-30 border-blue-400"></div>
        </div>

        <!-- Right Panel (Login Form) -->
        <div class="flex w-full items-center justify-center bg-gray-900 py-12 px-4 sm:px-6 lg:px-8 md:w-1/2">
            <div class="w-full max-w-md space-y-8">
                <div>
                    <h2 class="text-center text-3xl font-extrabold text-white">Sign In To Your Account</h2>
                    <p class="mt-2 text-center text-sm text-gray-400">
                        Or <a href="/signup" class="font-medium text-blue-500 hover:text-blue-400">create a new account</a>
                    </p>
                </div>
                
                <form class="mt-8 space-y-6" action="/login" method="POST">
                    @csrf
                    
                    <div class="space-y-6 rounded-md shadow-sm">
                        <!-- Email Address -->
                        <div>
                            <label for="email-address" class="sr-only">Email address</label>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" /><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <input id="email-address" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 bg-gray-800 py-3 pl-10 text-gray-200 ring-1 ring-inset ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm" placeholder="Email Address">
                            </div>
                            @error('email')
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
                                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 bg-gray-800 py-3 pl-10 text-gray-200 ring-1 ring-inset ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm" placeholder="Password">
                            </div>
                             @error('password')
                                 <div class="text-red-600 text-sm mt-1">{{ $message }}</div>

                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-800 text-blue-600 focus:ring-blue-600">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-300">Remember me</label>
                        </div>

                        <div class="text-sm">
                            <a href="/forgot-password" class="font-medium text-blue-500 hover:text-blue-400">Forgot your password?</a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="group relative flex w-full justify-center rounded-md bg-blue-600 py-3 px-4 text-sm font-semibold text-white transition duration-300 ease-in-out hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-simple-layout>