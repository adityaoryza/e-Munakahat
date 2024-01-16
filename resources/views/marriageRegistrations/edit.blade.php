<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h2 class="text-xl font-bold mb-4">Edit Marriage Registration</h2>

                <form method="PATCH" action="/marriageRegistrations/{{ $marriageRegistration->RegistrationID }}">
                    @csrf
                    @method('PATCH')

                    <div class="mb-4">
                        <label for="RegistrationType" class="block text-gray-700 font-bold mb-2">Registration Type
                            *</label>
                        <select id="RegistrationType" name="RegistrationType"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="permitted" @if ($marriageRegistration->RegistrationType == 'permitted')
                                selected @endif>Permitted Marriage</option>
                            <option value="voluntary" @if ($marriageRegistration->RegistrationType == 'voluntary')
                                selected @endif>Voluntary Marriage</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="MarriageDate" class="block text-gray-700 font-bold mb-2">Marriage Date *</label>
                        <input type="date" id="MarriageDate" name="MarriageDate"
                            value="{{ $marriageRegistration->MarriageDate }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="RegistrationStatus" class="block text-gray-700 font-bold mb-2">RegistrationStatus
                            *</label>
                        <select id="RegistrationStatus" name="RegistrationStatus"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="pending" @if ($marriageRegistration->status == 'pending')
                                selected @endif>Pending</option>
                            <option value="proceed" @if ($marriageRegistration->status == 'proceed')
                                selected @endif>Proceed</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-1 text-right">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update
                            </button>
                        </div>
                        <div class="col-span-1">
                            <button type="button"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                onclick="window.location.href='/marriageRegistrations'">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-app-layout>