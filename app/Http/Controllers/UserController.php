<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $user = User::factory()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,

        ]);
        return $user;
    }

    public function show($id)
    {
        return User::query()->findOrFail($id);
    }

    public function update(User $user,Request $request)
    {
     return   $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

    }
}
