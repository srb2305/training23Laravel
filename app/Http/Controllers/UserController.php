<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
  	public function index(){
  		return view('users.index');
  	}

  	public function create(){
  		return view('users.add');
  	}

  	public function store(Request $request){
  		//dd($request); // die and dump
  		$insert['name'] = $request['name'];
  		$insert['email'] = $request['email'];
  		$insert['contact'] = $request['contact'];
  		$insert['password'] = bcrypt($request['password']);
  		$output = DB::table('users')->insert($insert);
  		if($output){
  			return redirect()->back()->with('success','Inserted Successfully');
  		}else{
  			return redirect()->back()->with('error','Inserted Successfully');
  		}
  	}
}
