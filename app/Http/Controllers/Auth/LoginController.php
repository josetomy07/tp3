<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use PhpParser\Node\Stmt\Break_;
use Spatie\Permission\Models\Role;

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
        $input = $request->all();
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(['email'=>$input["email"], 'password'=>$input["password"]]))
        {

            switch(auth()->user()->roles_id){

                case 1:
                    return redirect()->route('home.lider');
                break;  
                case 2:
                    return redirect()->route('home.auxiliar');
                break;
                case 3:
                    return redirect()->route('home.colaborador');
                break;
                default:
                    return redirect()->route("login")->with("error",'email o password incorrecto');
            }
           
        }
    }
}
