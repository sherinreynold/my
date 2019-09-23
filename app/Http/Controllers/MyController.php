<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyController extends Controller {
	
	
	 public function __construct()
    {
        $this->middleware('auth');
    }

	
	public function home(){
		
		
		// $pdts = DB::table('tblproducts')->get();
		 //var_dump($pdts);
		 //$pdts='sd';
		 return view('welcome');
	}
	
   public function index() {
      echo 'index';
   }
   public function create() {
      echo 'create';
   }
   public function store(Request $request) {
      echo 'store';
   }
   public function show($id) {
      echo 'show';
   }
   public function edit($id) {
      echo 'edit';
   }
   public function update(Request $request, $id) {
      echo 'update';
   }
   public function destroy($id) {
      echo 'destroy';
   }
}