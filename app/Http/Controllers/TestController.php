<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller {
	
	   public function __construct() {
      $this->middleware('s');
   }

	
   public function index() {
      echo "<br>ABC Controller.";
   }
}
