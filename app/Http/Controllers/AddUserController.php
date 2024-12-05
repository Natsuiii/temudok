<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AddUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('role')->where('id', '!=', Auth::user()->id)->get();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'role' => 'required|exists:roles,id',
        ]);

        // dd($request->role);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role,
            'profile_photo_path' => null,
        ]);

        return redirect()->route('user.create')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required|exists:roles,id',
        ]);

        $user->update([
            'name' => $request->name,
            'role_id' => $request->role,
        ]);

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function bulkDestroy(Request $request)
    {
        try {
            // Validasi ID yang dipilih
            $request->validate([
                'ids' => 'required|min:1',
                'ids.*' => 'exists:users,id',
            ], [
                'ids.required' => 'You must select at least one user to delete.',
                'ids.min' => 'Please ensure you select at least one user.',
                'ids.*.exists' => 'The selected user does not exist.',
            ]);
            
            $ids = explode(',', $request->ids);

            // Hapus banyak user berdasarkan ID
            User::destroy($ids);

            // Kirim pesan sukses
            return back()->with('success', 'Users deleted successfully.');
        } catch (ValidationException $e) {
            // Tangkap error validasi dan kirim pesan error
            return back()->withErrors($e->validator)->withInput();
        }
    }

    public function destroy(User $user)
    {
        try {
            // Hapus user
            $user->delete();

            // Kirim pesan sukses
            return back()->with('success', 'User deleted successfully.');
        } catch (ValidationException $e) {
            // Tangkap error validasi dan kirim pesan error
            return back()->withErrors($e->validator)->withInput();
        }
    }
}
