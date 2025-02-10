<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::simplepaginate(2);
        // return $users;

        // foreach ($users as $user) {
        //     echo $user->name . '<br>';
        // }

        return view("welcome", compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

        // $user = new User;

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->age = $request->age;
        // $user->city = $request->city;

        // $user->save();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'age' => $request->age,
            'city' => $request->city,
        ]);

        return redirect()->route('user.index')
                         ->with('status', 'User added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $users = User::find($user);
        // return $users;

        return view("viewuser", compact('users'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users  = User::find($id);
        return view("update", compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'name' => 'required|alpha',
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     'age' => 'required|numeric',
        //     'city' => 'required|alpha',
        //     ]);

        $users = User::find($id);

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->age = $request->age;
        $users->city = $request->city;
        $users->save();
        return redirect()->route('user.index')
                         ->with('status', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $users = User::find($id);
        // $users->delete();

        User::destroy($id);

        return redirect()->route('user.index')
                         ->with('status', 'User deleted successfully.');

    }
}
