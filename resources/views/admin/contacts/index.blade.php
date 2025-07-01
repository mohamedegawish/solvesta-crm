<x-layout title="Contacts">
    <div class="container mx-auto px-6 py-8">
        <div class="flex justify-end mb-8">
            <a href="contacts/create" class="inline-flex items-center px-6 py-3 bg-blue-700 font-medium rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200 ease-in-out shadow-sm custom-btn-text">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
    </svg>
    Add New Contact
</a>
        </div>

        @if (session('success'))
        <div class="bg-green-50 border-l-4 border-green-600 text-green-800 p-4 rounded-lg mb-8 flex items-center justify-between shadow-sm" role="alert">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <span>{{ session('success') }}</span>
            </div>
            <button type="button" onclick="this.parentElement.style.display='none'" class="text-green-800 hover:text-green-900 focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        @endif

        <div class="bg-white shadow-xl rounded-lg overflow-hidden border border-gray-100">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-700">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">Registered Date</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">Contact Name</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">Account Name</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">Phone</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">Contact Owner</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($contacts as $contact)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $contact['created_at']->format('d M Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $contact['first_name'] }} {{ $contact['last_name'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $contact['company'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                <a href="mailto:{{ $contact['email'] }}" class="text-blue-600 hover:text-blue-800">{{ $contact['email'] }}</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                <a href="tel:{{ $contact['phone'] }}" class="text-blue-600 hover:text-blue-800">{{ $contact['phone'] }}</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Admin User</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-3">
                                    <!-- View Button -->
                                    <a href="/contacts/{{ $contact['id'] }}" 
                                       class="text-blue-600 hover:text-blue-900 p-2 rounded-full hover:bg-blue-100 transition-all duration-200"
                                       title="View"
                                       data-tooltip-target="tooltip-view">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    
                                    <!-- Edit Button -->
                                    <a href="/contacts/{{ $contact['id'] }}/edit" 
                                       class="text-green-600 hover:text-green-900 p-2 rounded-full hover:bg-green-100 transition-all duration-200"
                                       title="Edit"
                                       data-tooltip-target="tooltip-edit">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    
                                    <!-- Delete Button -->
                                    <form action="/contacts/{{ $contact['id'] }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="text-red-600 hover:text-red-900 p-2 rounded-full hover:bg-red-100 transition-all duration-200"
                                                title="Delete"
                                                data-tooltip-target="tooltip-delete"
                                                onclick="return confirm('Are you sure you want to delete this contact?')">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-between">
                <div class="text-sm text-gray-700">
                    Showing {{ $contacts->firstItem() }} to {{ $contacts->lastItem() }} of {{ $contacts->total() }} results
                </div>
                <div class="flex-1 flex justify-between sm:justify-end">
                    @if ($contacts->onFirstPage())
                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-300 bg-white cursor-not-allowed">
                            Previous
                        </span>
                    @else
                        <a href="{{ $contacts->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Previous
                        </a>
                    @endif

                    @if ($contacts->hasMorePages())
                        <a href="{{ $contacts->nextPageUrl() }}" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Next
                        </a>
                    @else
                        <span class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-300 bg-white cursor-not-allowed">
                            Next
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Tooltip elements -->
    <div id="tooltip-view" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300">
        View details
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <div id="tooltip-edit" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300">
        Edit contact
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <div id="tooltip-delete" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300">
        Delete contact
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <script>
        // Initialize tooltips
        document.querySelectorAll('[data-tooltip-target]').forEach(el => {
            el.addEventListener('mouseenter', function() {
                const tooltipId = this.getAttribute('data-tooltip-target');
                const tooltip = document.getElementById(tooltipId);
                tooltip.classList.remove('invisible', 'opacity-0');
                tooltip.classList.add('visible', 'opacity-100');
                
                // Position tooltip
                const rect = this.getBoundingClientRect();
                tooltip.style.top = `${rect.top - 40}px`;
                tooltip.style.left = `${rect.left + rect.width/2 - tooltip.offsetWidth/2}px`;
            });
            
            el.addEventListener('mouseleave', function() {
                const tooltipId = this.getAttribute('data-tooltip-target');
                const tooltip = document.getElementById(tooltipId);
                tooltip.classList.add('invisible', 'opacity-0');
                tooltip.classList.remove('visible', 'opacity-100');
            });
        });
    </script>
</x-layout>