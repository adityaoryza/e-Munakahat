<!-- resources/views/marriageRegistration/create.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">

    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">

        <!-- Marriage Registration Form -->
        <form action="{{ route('marriageRegistrations.store') }}" method="post">
            @csrf

            <!-- Husband Information -->
            <div class="mb-4">
                <label for="husbandFirstName" class="block text-sm font-medium text-gray-600">Husband's First
                    Name</label>
                <input type="text" id="husbandFirstName" name="husband_first_name"
                    class="mt-1 p-2 w-full border rounded-md">

                @error('husband_first_name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Wife Information -->
            <div class="mb-4">
                <label for="wifeFirstName" class="block text-sm font-medium text-gray-600">Wife's First Name</label>
                <input type="text" id="wifeFirstName" name="wife_first_name" class="mt-1 p-2 w-full border rounded-md">

                @error('wife_first_name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Marriage Details -->
            <div class="mb-4">
                <label for="marriageDate" class="block text-sm font-medium text-gray-600">Date of Marriage</label>
                <input type="date" id="marriageDate" name="marriage_date" class="mt-1 p-2 w-full border rounded-md">

                @error('marriage_date')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Marriage Category -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Marriage Category</label>
                <select name="marriage_category" class="mt-1 p-2 w-full border rounded-md">

                    <!-- Your existing options -->
                    <option value="permitted">Permitted Marriage</option>
                    <option value="voluntary">Voluntary Marriage</option>

                </select>

                @error('marriage_category')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Document Upload -->
            <div class="mb-4">
                <label for="documentUpload" class="block text-sm font-medium text-gray-600">Upload Documents</label>
                <input type="file" id="documentUpload" name="document_upload" class="mt-1">

                @error('document_upload')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Payment Information -->
            <div class="mb-4">
                <label for="paymentMethod" class="block text-sm font-medium text-gray-600">Payment Method</label>
                <select name="payment_method" class="mt-1 p-2 w-full border rounded-md">

                    <!-- Your existing options -->
                    <option value="credit_card">Credit Card</option>
                    <option value="bank_transfer">Bank Transfer</option>

                </select>

                @error('payment_method')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>

        </form>

    </div>

</body>

</html>