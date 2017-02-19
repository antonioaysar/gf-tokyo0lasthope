<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Personaggio;
use Carbon\Carbon;

use DB;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
//     protected $redirectTo = '/home';
    protected $redirectTo = '/mappa';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'email' 				=> 'required|email|max:50|unique:users',
            'password' 				=> 'required|min:6|confirmed',
        	'password_confirmation'	=> 'required|min:6',
        	'nome' 					=> 'required|alpha|unique:personaggio,nome|max:20',       		
        	'cognome'				=> 'required|alpha|max:50',
        	'sesso'					=> 'required|in:m,f',
        	'age'					=> 'required|numeric',
        	'discendenza_id'		=> 'required',
        	'social_class'			=> 'required',
        	'car0'					=> 'required|numeric|max:12|sommachars',
        	'car1'					=> 'required|numeric|max:12',
        	'car2'					=> 'required|numeric|max:12',
        	'car3'					=> 'required|numeric|max:12',
        	'car4'					=> 'required|numeric|max:12',
        	'car5'					=> 'required|numeric|max:12',
        	'terms'					=> 'required'
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
    	
    	$personaggio = new Personaggio;

    	$personaggio->nome = $data['nome'];
    	$personaggio->cognome = $data['cognome'];
    	$personaggio->sesso = $data['sesso'];
//     	$personaggio->birthplace = $data['birthplace'];
//     	$personaggio->birthdate = $data['birthdate'];
//     	$personaggio->id_razza = $data['id_razza'];
    	$personaggio->car0 = $data['car0'];
    	$personaggio->car1 = $data['car1'];
    	$personaggio->car2 = $data['car2'];
    	$personaggio->car3 = $data['car3'];
    	$personaggio->car4 = $data['car4'];
    	$personaggio->car5 = $data['car5'];
		$personaggio->data_iscrizione = Carbon::now();
		$personaggio->salute = 100;
		$personaggio->salute_max = 100;
		$personaggio->soldi = 50;
		$personaggio->esperienza = 0;
		$personaggio->age = $data['age'];
		$personaggio->discendenza_id = $data['discendenza_id'];
		$personaggio->social_class = $data['social_class'];
    	
    	
        $user = User::create([
            'name' => $data['nome'] . ' ' . $data['cognome'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        
        $personaggio->user_id = $user->id;
        
        $personaggio->save();
        
        $user->personaggio_id = $personaggio->id;
        
        $user->save();
        
        //TODO: 
//         DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$data['link']]);

        $emailData = array( 'email' => $user['email'], 'name' => $user['name'], 'sex' => $personaggio['sesso']);
       
        
        Mail::send('emails.activation', $emailData, function($message) use ($emailData){
	        $message->to($emailData['email']);
	        $message->subject('Benvenuto su Tokyo 0 Last Hope');
        });
        
        return $user;
    }
    
    
    public function userActivation($token){
    	
    	$check = DB::table('user_activations')->where('token',$token)->first();
    	
    	if(!is_null($check)){
    		
    		$user = User::find($check->id_user);
    		
    		if ($user->is_activated == 1){
    			return redirect()->to('login')->with('success',"user are already actived.");
    		}
    		
    		$user->update(['is_activated' => 1]);
    		
    		DB::table('user_activations')->where('token',$token)->delete();
    		return redirect()->to('login')->with('success',"user active successfully.");
    	}
    	
    	return redirect()->to('login')->with('Warning',"your token is invalid");
    }
    
}
