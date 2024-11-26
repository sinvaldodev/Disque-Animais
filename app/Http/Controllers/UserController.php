<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public readonly User $user;
    public function __construct()
    {
        $this->user = new User();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->all();
        return view('user/users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);


        if ($created) {
            return redirect()->route('home')->with('message', 'Successfully created');
        }

        return redirect()->back()->with('message', 'Error updating user');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user/user_show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user/user_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->user->where('id', $id)->update($request->except(['_token', '_method']));
        if ($updated) {
            return redirect()->route('home')->with('message', 'Successfully updated');
        }

        return redirect()->back()->with('message', 'Error updating user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = $this->user->where('id', $id)->delete();
        if ($deleted) {
            return redirect()->route('home')->with('message', 'Successfully deleted');
        }

        return redirect()->back()->with('message', 'Error deleting user');
    }
}
