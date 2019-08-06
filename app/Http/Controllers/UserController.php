<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsers;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(5);
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(StoreUsers $request) {
        $request->validated();
        $input = $request->all();
        User::create(array_merge($input, [
            'password' => Hash::make($input['password']),
        ]));
        return redirect()->route('users.index')->with(['success' => 'User created']);
    }

    public function show($id) {
        $user = User::find($id);
        return view('users.show')->with(['user' => $user]);
    }

    public function edit($id) {
        $user = User::find($id);
        return view('users.edit')->with(['user' => $user]);
    }

    public function update(StoreUsers $request, $id) {
        $request->validated();
        $input = $request->all();
        $user = User::find($id);
        $user->fill($input);
        $user->save();
        return redirect()->route('users.index')->with('success', 'User updated');
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted');
    }

    public function editPassword($id) {
        $user = User::find($id);
        return view('users.edit-password')->with(['user' => $user]);
    }
    public function updatePassword(Request $request, $id) {
        $request->validate([
            'password' => 'required|confirmed',
        ]);
        $user =User::find($id);
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect()->route('users.edit-password', ['id' => $user->id])->with(['success' => 'Password successfully changed']);
    }
}
