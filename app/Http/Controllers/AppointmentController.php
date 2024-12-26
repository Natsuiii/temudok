<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\UnavailableTime;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::where('doctor_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
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
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

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

        $appointmentsDone = Appointment::where('patient_id', Auth::user()->id)->where('status_id', 1)->orderBy('created_at', 'desc')->with('doctor')->get();

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
        return view('home.success');
    }
}
