<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use function PHPUnit\Framework\at;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $email =  $request->email;
        $password =  $request->password;
        $data = ['email' => $email, 'password' => $password];

        $user=  User::where('email' , $email)->first();

        if ($user){
            $attempt = auth()->attempt($data);
                if (!$attempt) return ['error' => ['password' => 'Password Incorrect !!']];
        }
        else{
            return ['error' => ['email' => 'User Introuvable !!']];
        }
    }

    public function logout(Request $request)
    {
       return auth()->logout();
    }
}
