<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\BookingNotificationMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmailNotification($userEmail)
    {
        $name = 'John Doe';
        $doctor = 'Dr. Smith';
        $time = '10:00 AM';
        $date = '2023-05-15';

        Mail::to($userEmail)->send(new BookingNotificationMail($name, $doctor, $time, $date));

        return response()->json(['status' => 'Email sent']);
    }
}
