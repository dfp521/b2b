<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;

    protected $redirectTo = '/dyyseo/index';
    protected $username;

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
        $this->username = config('admin.global.username');
    }

    public function showLoginForm()
    {
        return view('admin.user.login');
    }

    public function logout()
    {
        $this->guard()->logout();
        return redirect('/nosay/login');
    }

    protected function guard()
    {
        return auth()->guard('admin');
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
//            'captcha' => 'required|captcha'
        ]);
    }
}
