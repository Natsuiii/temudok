<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\UnavailableTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UnavailableTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UnavailableTime::where('doctor_id', Auth::user()->id)->with('doctor')->orderBy('created_at', 'desc')->get();

        // foreach ($users as $time) {
        //     $time->unavailable_time = Carbon::parse($time->date_time)->format('d F Y');
        // }

        return view('doctorSchedule.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctorSchedule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'unavailable_time' => 'required|date',
        ], [
            'unavailable_time.date' => 'The unavailable time must be a valid date.',
        ]);

        $dateString = $request->unavailable_time;
        
        $dateTime = Carbon::createFromFormat('d F Y', $dateString);
        
        UnavailableTime::create([
            'doctor_id' => Auth::user()->id,
            'unavailable_time' => $dateTime
        ]);

        return redirect()->route('schedule.create')->with('success', 'Schedule created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(UnavailableTime $unavailableTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnavailableTime $unavailableTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnavailableTime $unavailableTime)
    {
        //
    }

    public function bulkDestroy(Request $request)
    {
        try {
            // Validasi ID yang dipilih
            $request->validate([
                'ids' => 'required|min:1',
                'ids.*' => 'exists:unavailable_times,id',
            ], [
                'ids.required' => 'You must select at least one schedule to delete.',
                'ids.min' => 'Please ensure you select at least one schedule.',
                'ids.*.exists' => 'The selected schedule does not exist.',
            ]);
            
            $ids = explode(',', $request->ids);

            // Hapus semua jadwal yang dipilih
            UnavailableTime::destroy($ids);

            // Kirim pesan sukses
            return back()->with('success', 'Schedules deleted successfully.');
        } catch (ValidationException $e) {
            // Tangkap error validasi dan kirim pesan error
            return back()->withErrors($e->validator)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnavailableTime $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedule.index')->with('success', 'Schedule deleted successfully.');
    }
}
