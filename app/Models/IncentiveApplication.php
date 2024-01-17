<?php

// app/Models/IncentiveApplication.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncentiveApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'husbandName',
        'husbandIC',
        'workplace',
        'jobPosition',
        'bankCategory',
        'accountNumber',
        'bankStatement',
        'payslip',
    ];

    // Add relationships or additional methods as needed
}
