<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function login(){
    	
    	return view('pages.login');
    }
     public function register(){
    	return view('pages.register');
    }
    public function save(Request $request){

    	$request->validate([
    		'name'=>'required',
    		'email'=>'required|email|unique:users',
    		'password'=>'required|min:8|max:15|unique:users'
    	 ]);
    	$user =new User;
    	$user->name=$request->input('name');
    	$user->email= $request->input('email');
    	$user->password= Hash::make($request->input('password'));
    	$save=$user->save();
    	if($save){
    		return back()->with('success','Registered succesfully!');
    	}
    	else{
    		return back()->with('fail','Failed to register!');
    	}
    }
    	public function dashboard(Request $request){
  

           // return $request->input();
    		$request->validate([
              'name'=>'required',
              'password'=>'required',
    		]);

    		$userinfo=User::where('name','=',$request->name)->first();
    		
    		if(!$userinfo) {
    			return back()->with('fail','Wrong username or password');
    			
    		}
    			else{
    		    if(Hash::check($request->password,$userinfo->password)){
    		    	$request->session()->put('LoggedUser',$userinfo->id);
    		    	
    		    	if($request->name=='admin4'){
    		    	return redirect('Dashboarddetails/dashboardview');
    		    }
    		    else{
    		    	return redirect('Dashboarddetails/usersdashboards');
    		    }

    		    }
    		    	else{
    		    		return back()->with('fail','Wrong username or password');
    		    	} 
    		
    				
    		} 
  
    		
    		
    		
    		// else{
    		// 	return back()->with('fail','Wrong username or password');
    		// }
    		    
   
	    	
    	
    }

   public function dashboardview(){
   	$data=['Loggeduserinfo'=>User::where('id','=',session('LoggedUser'))->first()];
    return view('Dashboarddetails.dashboardview',$data);
    
    		
   }
   public function usersdashboards(){

   		$data=['Loggeduserinfo'=>User::where('id','=',session('LoggedUser'))->first()];
    return view('Dashboarddetails.usersdashboards',$data);

   }
}
