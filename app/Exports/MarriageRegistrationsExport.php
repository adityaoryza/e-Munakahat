<?php
namespace App\Exports;

use App\Models\MarriageRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MarriageRegistrationsExport implements FromCollection, WithMapping, WithHeadings
{
/**
* @return \Illuminate\Support\Collection
*/
public function collection()
{
return MarriageRegistration::all(); // Retrieve all marriage registrations
}

public function map($registration): array
{
return [
$registration->RegistrationID, // Access columns based on your model
$registration->RegistrationType,
$registration->RegistrationStatus,
$registration->RegistrationDate,
// ... Add other relevant fields as needed
];
}

public function headings(): array
{
return [
'Registration ID',
'Registration Type',
'Registration Status',
'Registration Date',
// ... Add headers for other included fields
];
}
}