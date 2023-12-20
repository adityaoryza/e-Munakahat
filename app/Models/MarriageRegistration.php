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
        'RegistrationDate', 
    ];

    protected $casts = [
        'RegistrationDate' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }
}