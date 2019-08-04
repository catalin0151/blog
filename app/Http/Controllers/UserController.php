<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\View\View;
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
        $validated = $request->validated();
        $input = $request->all();
        User::create($input);
        return redirect()->route('users.index')->with(['success' => 'User created']);
    }

    public function show($id) {
        $user = User::find($id);
        return view('users.show')->with(['user' => $user]);
    }

    public function edit() {
        return view('users.edit');
    }

    public function update(StoreUsers $request, $id) {
        $validated = $request->validated();
        $input = $request->all();
        $user = User::find($id);
        $user->fill($input);
        return redirect()->route('users.index')->with('success', 'User updated');
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted');
    }
}