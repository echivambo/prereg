<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Auth;

class AuthController extends Controller
{/*
*/
    use AuthenticatesUsers, ThrottlesLogins;
    protected $redirectTo = '/admin';
    protected $guard = 'admin';
    public function showLoginForm()
    {
        if(Auth::guard('admin')->check()){
            return redirect('/admin');
        }
        return view('admin.login');
    }

    public function  logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
