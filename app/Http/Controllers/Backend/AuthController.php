<?php

namespace App\Http\Controllers\Backend;

use App\Components\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.auth.login');
    }

    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $info = $request->only(['username', 'password']);

        if(\Auth::attempt($info))
        {
            return redirect()->route('admin.dashboard.index');
        }

        $validator = Validator::make([], []);
        $validator->errors()->add('username', 'Username or password invalid');

        return redirect()->route('auth.login')->withInput()->withErrors($validator);
    }
}
