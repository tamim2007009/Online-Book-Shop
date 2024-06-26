<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    public function redirectTo()
    {

        if (Auth::check()) {
            $role_id = !empty(Auth::user()->role->id) ? Auth::user()->role->id : 3;
            switch ($role_id) {
                case '1':
                    return '/admin-home';
                    break;
                case '2':
                    return '';
                    break;
                case '3':
                    return '/user-home';
                    break;
                default:
                    return '/login';
                    break;
            }
        } else {
            return '/login';
        }
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //    protected $redirectTo = '/admin-home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
