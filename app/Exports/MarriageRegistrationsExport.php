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
            $registration->id, // Assuming ID is the primary key
            $registration->applicant_name, // Map to the correct field name
            $registration->registration_type,
            $registration->registration_date,
            $registration->registration_status,
            // Add logic for Actions column (e.g., generate links or buttons)
        ];
    }

    public function headings(): array
    {
        return [
            'No.',
            'Applicant Name',
            'Application Type',
            'Application Date',
            'Status',
            'Actions',
        ];
    }
}