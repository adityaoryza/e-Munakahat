<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Incentive Application / View Application') }}
        </h2>
    </x-slot>
    
    <div class="container mx-auto p-4">
        <div class="flex-grow mx-auto bg-white p-8 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-4">Incentive Applications</h2>

            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">IncentiveID</th>
                        <th class="border border-gray-300 px-4 py-2">Apply Date</th>
                        <th class="border border-gray-300 px-4 py-2">ApplicantID</th>
                        <th class="border border-gray-300 px-4 py-2">Job Position</th>
                        <th class="border border-gray-300 px-4 py-2">Bank Account</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">I1</td>
                            <td class="border border-gray-300 px-4 py-2">2/1/2024</td>
                            <td class="border border-gray-300 px-4 py-2">A2</td>
                            <td class="border border-gray-300 px-4 py-2">Clerk</td>
                            <td class="border border-gray-300 px-4 py-2">092345678906</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">I2</td>
                            <td class="border border-gray-300 px-4 py-2">5/1/2024</td>
                            <td class="border border-gray-300 px-4 py-2">A8</td>
                            <td class="border border-gray-300 px-4 py-2">Supervisor</td>
                            <td class="border border-gray-300 px-4 py-2">043456789073</td>
                        </tr>
                </tbody>
            </table>
            <div class="flex items-center justify-center space-x-4 pt-10">
                <a href="{{ route('incentiveApplication.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Back</a>
            </div>
        </div>
            
    </div>
</x-app-layout>
