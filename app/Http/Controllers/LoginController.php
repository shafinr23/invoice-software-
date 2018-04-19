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


	
		public function reg(Request $request){

			if ($request->hasFile('image')) {
			// 	echo  $photo = $request->file('image')->getClientOriginalName()."<br/>";
	
			// 	echo $photoex = $request->file('image')->getClientOriginalExtension()."<br/>";
		
			// 	echo $photoex = $request->file('image')->getRealPath()."<br/>";
		
			// 	echo $photoex = $request->file('image')->getSize()."<br/>";
		
			//  echo $photomine = $request->file('image')->getMimeType()."<br/>";
	
				
			$photo = $request->file('image')->getClientOriginalName();
			$destination = base_path() . '/public/uploads/users';
			$destination_path ='/uploads/users/'.$photo ;
	
			$request->file('image')->move($destination, $photo);
	
	
	
			  $email=$request->input('usermail');
			//echo "your email is : ".$email.'<br/>';
		$password=$request->input('pass');
			//echo "your pass is : ".$password;
			$username=$request->input('username');

		DB::insert('insert into login(username,password,img_url,email)values(?,?,?,?)',[$username,$password,$destination_path,$email]);
		$request->session()->flash('reg_s','login secceseer');
		return redirect('/reg-se');
			
		
				
		
			}else{
				echo 'slect data';
			}
	
	
		
	
			
		}
		public function index(){
			$user_list = DB::select('select * from login');
			
			return view ('users/user-list');
		}
		
			
	
}
