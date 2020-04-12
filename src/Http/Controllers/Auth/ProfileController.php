<?php

namespace Aminetiyal\LaravelTemplate\Http\Controllers\Auth;
//namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        return view('template::lte.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id()
        ])->validate();

        auth()->user()->update($request->only('name','email'));

        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|min:8',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $validator->after(function ($validator) use ($request) {
            if (!$this->isUserPassword($request->input('old_password'))) {
                $validator->errors()->add('old_password', 'Your current password does not matches with the password you provided.');
            }
        });

        $validator->validate();

        auth()->user()->password = $request->input('password');

        auth()->user()->update();

        return redirect()->back();
    }

    private function isUserPassword($password)
    {
        return (Hash::check($password , auth()->user()->password));
    }

}
