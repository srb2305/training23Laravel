<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
  	public function index(){
  		return view('users.index');
  	}

    public function show($id){

    }

  	public function create(){
  		return view('users.add');
  	}

  	public function store(Request $request){
  		$validated = $request->validate([
          'name' => 'required|min:3',
          'email' => 'required|unique:users|max:100',
          'contact' => 'required',
          'password' => 'required|min:6|confirmed'
      ]);

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
