<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\AuthenticateUser;
use Illuminate\Http\Request;
use App\User;
use Response;
use Hash;
class AuthController extends Controller {

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

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}
         public function sociallogin(AuthenticateUser $authenticateUser, Request $request, $provider = null) {
       return $authenticateUser->execute($request->all(), $this, $provider);
    }
	
	public function userHasLoggedIn($user) {
    \Session::flash('message', 'Welcome, ' . $user->username);
    return redirect('/');
	}
        
         public function verifyRegEmail(Request $request){
            if ($request->ajax()){
                $msg=User::where('email','=',$request->email)->get();
                
                if($msg->isEmpty()){
                return Response::json(array('valid' => 'true', 'message' => 'Email Id Not in DB','available' => 'tru'));
 
                }
               else{
                return Response::json(array('valid' => 'false', 'message' => 'Email Alredy Registered','available' => 'false'));
 
                }
  
            }
            
        }
        
        
           public function verifyEmail(Request $request){
            if ($request->ajax()){
                $msg=User::where('email','=',$request->email)->get();
                
                if($msg->isEmpty()){
                return Response::json(array('valid' => 'false', 'message' => 'Email Id Not Registered','available' => 'false'));
 
                }
               else{
                return Response::json(array('valid' => 'true', 'message' => 'Email Id Found','available' => 'true'));
 
                }
  
            }
            
        }
        
         public function validateUser(Request $request){
            if ($request->ajax()){
                $msg=User::where('email','=',$request->email)->get();
              //  $password = Hash::make('secret');
                
                
                if($msg->isEmpty()){
                return Response::json(array('valid' => 'false', 'message' => 'Email Id not found','available' => 'false'));
 
                }
               else{
                    if (Hash::check($request->password, $msg[0]->password))
                   {
                       
                        return Response::json(array('valid' => 'true', 'message' => 'User Validated','available' => 'true'));
 
                   }else{
                        return Response::json(array('valid' => 'false', 'message' => 'Email Id and Password not Matches','available' => 'false'));
                   }
                }
                
               
  
            }
            
        }
        

}
