<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id', 'id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(AppointmentStatus::class, 'status_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'payment_id', 'id');
    }

    public function meeting()
    {
        return $this->hasOne(Meeting::class, 'appointment_id', 'id');
    }
}
