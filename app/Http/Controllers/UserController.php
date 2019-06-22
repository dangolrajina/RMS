<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   public function index(){
   	return view ('welcome');
   }
   public function add(Request $request){
   	if($request->isMethod('post')){
   		$users=$request->all();
		$user=new User;
		$user->email=$users['email'];
		$user->password=$users['password'];
		$user->address=$users['address'];
		$user->city=$users['city'];
		$user->save();
   	}
   	
   return redirect('/')->with(compact('users'));	
   }

   // public function view()
   // {

   // 	$users = User::get();
   // 	return view('table',compact('users'));
   // 	}
}
