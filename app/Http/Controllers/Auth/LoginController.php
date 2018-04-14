<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    protected $redirectTo = '/home';

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
        $this->validateLogin($request);
        
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        $data = $request->all();
        $pesquisa = DB::table('users')->where('email', $data['email'])->count();
        if ($pesquisa == 0) {
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors('Email Não Está Cadastrado ou Está Incorreto');
        }
        else {
            $senha = $pesquisa['password'];
            if ($senha != $data['password']) {
                return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors('Senha Está Incorreto para o Email '.$data['email']);
            }
        }
    }


}
