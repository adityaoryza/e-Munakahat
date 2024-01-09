<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $table = 'consultation';

    protected $primaryKey = 'ConsultationID';

    protected $fillable = [
        'UserID',
        'consultation_place',
        'counselor_gender',
        'counselor_purpose', 
        'counselor_description',
        'counselor_time',
         
    ];

    protected $casts = [
        'counselor_date' => 'date',
    ];

}
