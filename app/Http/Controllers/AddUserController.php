<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AddUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('role')->where('id', '!=', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('user.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        $categories = Category::all();
        return view('user.create', [
            'roles' => $roles,
            'categories' => $categories
        ]);
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
            'category' => 'exists:categories,id',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $profilePhotoPath = null;
        if ($request->hasFile('profile')) {
            $profilePhotoPath = $request->file('profile')->store('profile_image', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role,
            'profile_photo_path' => $profilePhotoPath,
            'specialization_id' => $request->category
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
        $categories = Category::all();
        return view('user.edit', compact('user', 'roles', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required|exists:roles,id',
            'category' => 'exists:categories,id',
        ]);

        if($request->category != 2){
            $user->specialization_id = null;
        }

        $user->update([
            'name' => $request->name,
            'role_id' => $request->role,
            'specialization_id' => $request->category
        ]);

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function bulkDestroy(Request $request)
    {
        try {
            $request->validate([
                'ids' => 'required|min:1',
                'ids.*' => 'exists:users,id',
            ], [
                'ids.required' => 'You must select at least one user to delete.',
                'ids.min' => 'Please ensure you select at least one user.',
                'ids.*.exists' => 'The selected user does not exist.',
            ]);
            
            $ids = explode(',', $request->ids);

            User::destroy($ids);

            foreach ($ids as $id) {
                $user = User::find($id);
                if ($user->profile_photo_path) {
                    Storage::disk('public')->delete($user->profile_photo_path);
                }
            }

            return back()->with('success', 'Users deleted successfully.');
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }
    }

    public function destroy(User $user, Request $request)
    {
        try {
            $user->delete();

            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }

            return back()->with('success', 'User deleted successfully.');
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }
    }
}
