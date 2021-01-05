<?php

namespace App\Http\Controllers\Backend;

use App\Components\Controller;
use Illuminate\Http\Request;

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
    }
}
