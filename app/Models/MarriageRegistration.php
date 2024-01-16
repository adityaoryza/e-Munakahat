<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageRegistration extends Model
{
    use HasFactory;

    protected $table = 'marriage_registrations';

    protected $primaryKey = 'RegistrationID';

    protected $fillable = [
        'UserID',
        'RegistrationType',
        'RegistrationStatus',
        'MarriageDate', // Replaced RegistrationDate
        'PartnerFirstName',
        'PartnerLastName',
        'PartnerGender',
        'PartnerPhoneNum',
    ];

    protected $casts = [
        'MarriageDate' => 'date', // Cast MarriageDate as a date
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }
}