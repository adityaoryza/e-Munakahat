<?php

// app/Models/IncentiveApplication.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncentiveApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'IncentiveID',
        'applicantID',
        'marriageID',
        'incentive_status',
        'incentive_apply_date',
        'groom_job_position',
        'groom_payslip',
        'groom_bank_statement',
        'groom_acc_number',
    ];

    // Add relationships or additional methods as needed
}
