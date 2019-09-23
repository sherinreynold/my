<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserReg extends Controller
{
    public function add(Request $request){
		
		$name=$request->name;
		echo $name;
	}
}
