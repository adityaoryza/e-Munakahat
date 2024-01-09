<x-app-layout>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Marriage Registration</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/marriageRegistrations/{{ $registration->id }}">
                                @method('PATCH')
                                @csrf

                                <h2 class="text-xl font-bold mb-4">Marriage Registration Form</h2>

                                <div class="grid grid-cols-2 gap-4">
                                    <div class="mb-4">
                                        <h3 class="text-lg font-medium mb-4 text-red-700">Applicant 1 Information</h3>

                                        <div class="mb-4">
                                            <label for="applicant1_name"
                                                class="block text-gray-700 font-bold mb-2">Applicant Name *</label>
                                            <input type="text" id="applicant1_name" name="applicant1_name"
                                                value="{{ $registration->applicant1_name }}"
                                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            @error('applicant1_name') <span
                                                class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>

                                    </div>

                                    <div class="mb-4">
                                        <h3 class="text-lg font-medium mb-4 text-red-700">Applicant 2 Information</h3>

                                        <div class="mb-4">
                                            <label for="applicant2_name"
                                                class="block text-gray-700 font-bold mb-2">Applicant Name *</label>
                                            <input type="text" id="applicant2_name" name="applicant2_name"
                                                value="{{ $registration->applicant2_name }}"
                                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            @error('applicant2_name') <span
                                                class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>

                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="registration_type" class="block text-gray-700 font-bold mb-2">Type of
                                        Marriage *</label>
                                    <select id="registration_type" name="registration_type"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="permitted"
                                            {{ $registration->registration_type == 'permitted' ? 'selected' : '' }}>
                                            Permitted Marriage</option>
                                        <option value="voluntary"
                                            {{ $registration->registration_type == 'voluntary' ? 'selected' : '' }}>
                                            Voluntary Marriage</option>
                                    </select>
                                </div>
                                <div class="col-span-1 text-right">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update
                                        Registration</button>
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
        </div>
    </div>
    </div>

</x-app-layout>