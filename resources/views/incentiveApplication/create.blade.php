<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Incentive Application / Apply Incentive') }}
        </h2>
    </x-slot>

    <div class="pt-5 pb-5 pl-10 pr-10"> 
    <div class="grow h-50 mx-auto bg-white p-8 rounded shadow-md flex-col">
        <!-- Incentive Application Form -->
        <form action="{{ route('incentiveApplication.store') }}" method="POST">
            @csrf
    
            <div class="mb-4" >
            <h3 style="text-align:center;">Husband's Information</h3>
            </div>

            <!-- Husband Name-->
            <div class="mb-4">
                <label for="husbandName" class="block text-sm font-medium text-gray-600">Husband Name</label>
                <input type="text" id="husbandName" name="husbandName" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Husband IC-->
            <div class="mb-4">
                <label for="husbandIC" class="block text-sm font-medium text-gray-600">Husband IC Number</label>
                <input type="text" id="husbandIC" name="husbandIC" class="mt-1 p-2 w-full border rounded-md">
            </div>
            
            <!-- Company Name of Husband Workplace-->
            <div class="mb-4">
                <label for="workplace" class="block text-sm font-medium text-gray-600">Workplace Name (Company Name)</label>
                <input type="text" id="workplace" name="workplace" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Husband Job Position -->
            <div class="mb-4">
                <label for="jobPosition" class="block text-sm font-medium text-gray-600">Job Position</label>
                <input type="text" id="jobPosition" name="jobPosition" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Date of Application 
            *<div class="mb-4">
                <label for="applyDate" class="block text-sm font-medium text-gray-600">Date of Application [Choose Today's Date]</label>
                <input type="date" id="applyDate" name="apply_date" class="mt-1 p-2 w-full border rounded-md">
                @error('apply_date')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div> -->

            <!-- Bank Category -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Bank</label>
                <select name="bankCategory" id="bankCategory" class="mt-1 p-2 w-full border rounded-md">
                    <!-- Your existing options -->
                    <option value="chooseBank">choose bank</option>
                    <option value="maybank">Maybank</option>
                    <option value="bankIslam">Bank Islam</option>
                    <option value="cimb">CIMB</option>
                    <option value="rhb">RHB</option>
                    <option value="bankRakyat">Bank Rakyat</option>
                    <option value="bsn">BSN</option>
                    <option value="ocbc">OCBC</option>
                </select>
            </div>

            <!-- Husband Account Number -->
            <div class="mb-4">
                <label for="accountNumber" class="block text-sm font-medium text-gray-600">Account Number (Numbers only)</label>
                <input type="text" id="accountNumber" name="accountNumber" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Document Upload -->
            <div class="mb-1">
                <label for="bankStatement" class="block text-sm font-medium text-gray-600">Upload Documents (PDF format ONLY) 
                    <li>Bank Statement</li>
                </label>
                <input type="file" id="bankStatement" name="bankStatement" class="mt-1">
            </div>
            <div class="mb-9">
                <label for="payslip" class="block text-sm font-medium text-gray-600"> 
                    <li>Payslip</li>
                </label>
                <input type="file" id="payslip" name="payslip" class="mt-1">
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-center space-x-4">
                <a href="{{ route('incentiveApplication.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Back</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit Application</button>

                <!--<button type="button" onclick="validateAndSubmitForm()" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>-->
            </div>
        </form> <!-- Close the form element -->

            <!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <script>
                function validateAndSubmitForm() {
                    // Add validation rules here as needed
                    const requiredFields = [
                        "husbandName",
                        "husbandIC",
                        "workplace",
                        "jobPosition",
                        "bankCategory",
                        "accountNumber",
                        "bankStatement",
                        "payslip"
                    ];

                    // Check if any required field is empty
                    for (const field of requiredFields) {
                        const value = document.getElementById(field).value;
                        if (value.trim() === "") {
                            Swal.fire({
                                title: 'Validation Error',
                                text: `Please fill in all required fields.`,
                                icon: 'error'
                            });
                            return;
                        }
                    }

                    // Show success message after form submission
                    Swal.fire({
                        title: 'Form Submitted!',
                        text: 'Your form has been successfully submitted.',
                        icon: 'success',
                        showCancelButton: true,
                        confirmButtonText: 'Go to Incentive Page',
                        cancelButtonText: 'Stay on Page'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Use Laravel route function to generate the URL
                            const indexUrl = "{{ route('incentiveApplication.index') }}";
                            window.location.href = indexUrl;
                        }
                    });
                }-->
            </script>    
        </div>

    </div>
    
</x-app-layout>
