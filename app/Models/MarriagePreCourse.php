<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriagePreparationCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'duration', 'date_course', 'time_course', 'venue_course'
    ];

    // Accessor for the 'date_course' attribute
    public function getDateCourseAttribute($value)
    {
        // Manipulate the value before returning it
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    // Mutator for the 'date_course' attribute
    public function setDateCourseAttribute($value)
    {
        // Manipulate the value before setting it
        $this->attributes['date_course'] = \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    // Method to update payment status of an applicant
    public function updatePaymentStatus(Applicant $applicant, $status)
    {
        // Implement logic to update payment status for the specified applicant
        $this->applicants()->updateExistingPivot($applicant->id, ['payment_status' => $status]);
    }


   // Method to get a list of approved applicants
   public function getApprovedApplicants()
   {
       return $this->applicants()->wherePivot('payment_status', 'approved')->get();
   }

   // Method to mark an applicant's attendance for a specific session
   public function markAttendance(Applicants $applicants, $session)
   {
       // Implement logic to mark attendance for the specified applicant and session
       $this->applicants()->updateExistingPivot($applicants->id, ['attended_session' => $session]);
   }

   // Method to approve certification based on attendance
   public function approveCertification($applicants)
   {
       // Implement logic to approve certification based on attendance
       foreach ($applicants as $applicant) {
           $this->applicants()->updateExistingPivot($applicant->id, ['certification_status' => 'approved']);
       }
   }

   // Method to get a list of applicants with completed courses and certifications
   public function getApplicantsWithCertifications()
   {
       return $this->applicants()->wherePivot('certification_status', 'approved')->get();
   }
}
    
    