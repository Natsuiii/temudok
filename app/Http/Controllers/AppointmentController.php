<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Meeting;
use App\Models\UnavailableTime;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Jubaer\Zoom\Facades\Zoom;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::where('doctor_id', Auth::user()->id)->orderBy('created_at', 'desc')->with('meeting')->get();
        return view('appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $doctors = User::where('role_id', 2)->get();
        return view('home.appointments', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('masuk');
        $request->validate([
            'userName' => 'required',
            'userAge' => 'required',
            'description' => 'required',
            'consultationDuration' => 'required',
            'appointment_date' => 'required',
            'doctor_id' => 'required',
            'email' => 'required|email',
        ]);

        // Parse format input
        $date = DateTime::createFromFormat('d F Y / H:i', $request->appointment_date);

        // Konversi ke format datetime SQL
        $sqlDatetime = $date->format('Y-m-d H:i:s');

        $appointment = Appointment::create([
            'doctor_id' => $request->doctor_id,
            'patient_id' => Auth::user()->id,
            'status_id' => 4, // Unpaid
            'name' => $request->userName,
            'email_to_contact' => $request->email,
            'age' => $request->userAge,
            'reason' => $request->description,
            'consultation_duration' => $request->consultationDuration,
            'appointment_date' => $sqlDatetime,
            'snap_token' => null,
            'amount' => $request->consultationDuration * 500
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.isProduction');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = config('midtrans.is3ds');

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $request->consultationDuration * 500,
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $appointment->snap_token = $snapToken;
        $appointment->save();

        

        return redirect()->route('history')->with('success', 'Appointment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment) {
        return view('home.pay', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        switch ($request->input('action')) {
            case 'accepted':
                $appointment->status_id = 1; // Accept
                break;
            case 'rejected':
                $appointment->status_id = 2; // Reject
                break;
            default:
                $appointment->status_id = 3; // Pending
                break;
        }

        $appointment->save();

        return redirect()->route('appointment.index')->with('success', 'Appointment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function getUnavailableTimes($doctorId)
    {
        $unavailableTime = UnavailableTime::where('doctor_id', $doctorId)->get();
        return response()->json($unavailableTime);
    }

    public function history()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $appointmentsOngoing = Appointment::where('patient_id', Auth::user()->id)->where('status_id', 3)->orderBy('created_at', 'desc')->with('doctor')->get();

        $appointmentsDone = Appointment::where('patient_id', Auth::user()->id)->where('status_id', 1)->orWhere('status_id', 2)->orderBy('created_at', 'desc')->with('doctor')->get();

        $appointmentUnpaid = Appointment::where('patient_id', Auth::user()->id)->where('status_id', 4)->orderBy('created_at', 'desc')->with('doctor')->get();



        return view('home.history', [
            'appointmentsOngoing' => $appointmentsOngoing,
            'appointmentsDone' => $appointmentsDone,
            'appointmentsUnpaid' => $appointmentUnpaid
        ]);
    }

    public function success(Appointment $appointment)
    {
        $appointment->status_id = 3;
        $appointment->save();

        $this->createMeeting($appointment->doctor->name, $appointment->reason, $appointment->appointment_date, $appointment->id);

        return view('home.success');
    }

    public function createMeeting($doctor_name, $reason, $start_time, $appointment_id)
    {
        $meetings = Zoom::createMeeting([
            "agenda" => 'Meeting with' . $doctor_name,
            "topic" => 'Regarding ' . $reason,
            "type" => 2, // 1 => instant, 2 => scheduled, 3 => recurring with no fixed time, 8 => recurring with fixed time
            "timezone" => 'Asia/Jakarta', // set your timezone
            "password" => 'temudok',
            "pre_schedule" => true, 
            "start_time" => $start_time, // set your start time
        ]);

        Meeting::create([
            'meeting_id' => $meetings['data']['id'],
            'appointment_id' => $appointment_id,
            'start_url' => $meetings['data']['start_url'],
            'join_url' => $meetings['data']['join_url'],
        ]);
    }
}
