<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Applications</h3>
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ url('/') }}/marriageRegistrations/create"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Add New Data
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-200">
                <div class="px-4 py-5 sm:p-6">
                    @if (session('pesan'))
                    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-4" role="alert">
                        <p class="font-bold">Sukses:</p>
                        <p class="text-sm">{{ session('pesan') }}</p>
                    </div>
                    @endif
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <tr>
                                    <th class="px-6 py-3">No.</th>
                                    <th class="px-6 py-3">Applicant ID</th>
                                    <th class="px-6 py-3">Application Type</th>
                                    <th class="px-6 py-3">Application Date</th>
                                    <th class="px-6 py-3">Status</th>
                                    <th class="px-6 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($marriageRegistrations as $registration)
                                <tr>
                                    <td class="px-6 py-4">
                                        <a href="/marriageRegistrations/{{ $registration->RegistrationID }}/edit">
                                            {{ $registration->RegistrationID }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-3">{{ $registration->UserID }}</td>
                                    <td class="px-6 py-3">{{ $registration->RegistrationType }}</td>
                                    <td class="px-6 py-3">{{ $registration->MarriageDate }}</td>
                                    <td class="px-6 py-3">{{ $registration->RegistrationStatus }}</td>
                                    <td class="px-6 py-3 flex justify-end space-x-4">
                                        <a href="/marriageRegistrations/{{ $registration->RegistrationID }}/edit"
                                            class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-md">Edit</a>
                                        <a href="/marriageRegistrations/{{ $registration->RegistrationID }}"
                                            class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-md">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>