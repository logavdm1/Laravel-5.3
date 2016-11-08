<?php

namespace App\Http\Controllers;

use App\UserLogin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  
    public function show(Request $request)
    {
    
    
    $username=$request->input('uname');
    $password=$request->input('pass');

    $products = DB::table('user_login')->where('username', $username)->first();

    if($products!=null){

  	return view('login-success',array('uname'=>$products->username,'pass'=>$products->password));

    	//echo $products->username;
  	}
  	else
  	{
  	return view('login-failed',compact('products'));
  	}

	
	
    }
}