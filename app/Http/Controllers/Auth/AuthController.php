<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\registerRequest;
use App\Http\Requests\loginRequest;
use App\User;
use Auth;
use App\Helpers\MyFuncs;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
      protected $redirectPath = '/';
      protected $loginPath = '/auth/register';

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    	
    }

    public function getLogin(){
    	return view('layout.admin.login');
    }

    public function posLogin(loginRequest $request,Request $re){
    	$email=$request->email;
    	$password=$request->password;
    	$remember=$request->remember;
    	Auth::attempt(['email' => $email, 'password' => $password],$remember);
       
    }

    public function postRegister(registerRequest $request){
    	$data=$request->all();
        
    	$this->create($data);
    	return redirect()->route('home');
    }
    public function getLogout(){
    	
    	Auth::logout();
    	return redirect()->route('home');
    }
   
}
