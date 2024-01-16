<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">

                <form method="POST" action="/marriageRegistrations"">
                    @csrf
                    <h2 class=" text-xl font-bold mb-4">Marriage Registration Form</h2>
                    <div class="mb-4">
                        <input type="hidden" name="UserID" value="{{ Auth::id() }}">
                    </div>

                    <div class="mb-4">
                        <label for="RegistrationType" class="block text-gray-700 font-bold mb-2">Type of Marriage
                            *</label>
                        <select id="RegistrationType" name="RegistrationType"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="permitted">Permitted Marriage</option>
                            <option value="voluntary">Voluntary Marriage</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="MarriageDate" class="block text-gray-700 font-bold mb-2">Marriage Date *</label>
                        <input type="date" id="MarriageDate" name="MarriageDate"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-medium mb-4 text-red-700">Partner </h3>

                        <div class="mb-4">
                            <label for="PartnerFirstName" class="block text-gray-700 font-bold mb-2">First Name
                                *</label>
                            <input type="text" id="PartnerFirstName" name="PartnerFirstName"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="PartnerLastName" class="block text-gray-700 font-bold mb-2">Last Name
                                *</label>
                            <input type="text" id="PartnerLastName" name="PartnerLastName"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="PartnerGender" class="block text-gray-700 font-bold mb-2">Gender *</label>
                            <select id="PartnerGender" name="PartnerGender"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="PartnerPhoneNum" class="block text-gray-700 font-bold mb-2">Phone Number
                                *</label>
                            <input type="tel" id="PartnerPhoneNum" name="PartnerPhoneNum"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>


                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-1 text-right">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit
                                Application</button>
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