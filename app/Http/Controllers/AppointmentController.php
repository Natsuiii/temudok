<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\UnavailableTime;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
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
            case 'accept':
                $appointment->status_id = 1; // Accept
                break;
            case 'cancel':
                $appointment->status_id = 2; // Reject
                break;
            case 'reschedule':
                $appointment->status_id = 3; // Reschedule
                break;
            default:
                $appointment->status_id = 4; // Pending
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
}
