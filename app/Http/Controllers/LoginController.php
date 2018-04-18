<?php namespace shafin_invoice\Http\Controllers;

use shafin_invoice\Http\Requests;
use shafin_invoice\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller {

	public function Login(Request $request){
		
			
			$username=$request->input('username');
			//echo "your email is : ".$email.'<br/>';
			$password=$request->input('pass');
			//echo "your pass is : ".$password;

			$login = DB::select('select * from login where password=?',[$password]);
				$username_get;
				$imagurl_get;
			foreach($login as $user){
				$username_get=$user->username;
				$imagurl_get=$user->img_url;
			}
			$count = count($login);
			if($count==1)
			{
				$request->session()->put('logedin',$username_get);
				$request->session()->put('imagurl_get',$imagurl_get);
				return redirect('/login-dashboard');
				echo " done ";
			}else{
				$request->session()->flash('invalide','data dose not match site');
				return redirect('/login-form');
			}
	exit();
			DB::insert('insert into login(username,password)values(?,?)',[$username,$password]);
			//echo "this is done ";
			// $request->session()->flash('mes','listed in our site');
			// return redirect()->action('RegController@index');
			echo "done";
	}

}
