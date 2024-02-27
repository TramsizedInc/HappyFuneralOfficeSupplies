<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->cannot('view', User::class)) {
            abort(403);
        }
        $users = User::all();
        return view('users.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->cannot('create', User::class)) {
            abort(403);
        }
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::user()->cannot('create', User::class)) {
            abort(403);
        }

        $user = User::create($request->all());
        $user->updated_at = now();
        $user->created_at = now();
        $user->password = Hash::make($request->password);
        $user->update();

        return redirect()->route("users.index")->with("success", "Users created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        if (Auth::user()->cannot('update', User::class)) {
            abort(403);
        }
        return view('users.edit', ['user' => $user]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if(Auth::user()->cannot('update',User::class)){
            abort(403);
        }
        $user->update($request->all());
        $user->updated_at = now();
        $user->update();
        return redirect()->route("users.index")->with("success", "Users created successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
