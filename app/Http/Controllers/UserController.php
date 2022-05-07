<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Display all users
    public function index() {
        return User::all();
    }

    // Display specific user
    public function show($id) {
        return User::find($id);
    }

    //Save New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|min:6'
        ]);
        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);    
    }

    // Updates User Data
    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->update($request->all());
    }

    // Deletes User Data
    public function destroy($id) {
        return User::destroy($id);
    }
}
