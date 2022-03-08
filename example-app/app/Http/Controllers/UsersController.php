<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UsersController extends Controller
{

    public function index()
    {
        return view('users.index', ['users' => User::all()]);
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(StoreUserRequest $request)
    {

        $input = $request->only(['name', 'email', 'password']);

        $user = User::create($input);

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }


    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }


    public function update(Request $request, User $user)
    {
        $user->update($request->only(['name', 'email']));

        return redirect()->route('users.show', $user);
    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
