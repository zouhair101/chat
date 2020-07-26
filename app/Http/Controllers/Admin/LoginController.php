<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
       // $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
         if (Auth::guard('admin')->check()) {
           return redirect()->route('admin.home');
         }else{
           return view('admin.auth.login');
         }
        
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
