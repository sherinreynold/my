<?php

namespace App\Http\Controllers;

use Redirect;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input as input;

use Validator;

class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index() {
      return view('admin.users.view');
   }
   
   public function add(Request $request) {
     
	 return $request->all();
	 $rules = array(
		'name'    => 'required|name', 
		'email' => 'required|email' 
	);
	
	$validator = Validator::make(Input::all(), $rules);
	 
	 	if ($validator->fails()) {
		return Redirect::to('/add_admin_user')
			->withErrors($validator) // send back all errors to the login form
			->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
	} 
	 
   }
}
