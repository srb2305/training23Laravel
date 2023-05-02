<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

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
          'password' => 'required|min:6|confirmed',
          'image' => 'mimes:jpg,bmp,png'
      ]);
      $fileName = '';
      try {

        if($request->hasFile('image')){
          $file = $request->file('image');

          //$fileName = $file->getClientOriginalName();
          $ext = $file->getClientOriginalExtension(); // jpg, png, pdf
          $fileName = time().'.'.$ext; // 434343434.pdf
         // $tempPath = $file->getRealPath();

          $destinationPath = 'userImage';
          $file->move($destinationPath,$fileName);
        }


        $insert['name'] = $request['name'];
    		$insert['email'] = $request['email'];
        $insert['image'] = $fileName;
    		$insert['contact'] = $request['contact'];
    		$insert['password'] = bcrypt($request['password']);
    		$output = DB::table('users')->insert($insert);
      } catch (Exception $e) {
         echo('errror exception'); 
         dd($e);
      }  
  		if($output){
  			return redirect()->back()->with('success','Inserted Successfully');
  		}else{
  			return redirect()->back()->with('error','Inserted Successfully');
  		}
  	}



    // API for get user list
    public function apiUserList(Request $request){
      $response['status'] = false;
      $response['message'] = "Something went wrong";

      $data = DB::table('users')
        ->select('id','name','email','created_at')
        ->orderBy('id','DESC')
        ->get()
        ->toArray();

        
      if($data){
        $response['status'] = true;
        $response['message'] = "Success";
        $response['data'] = $data;
      }
      return response()->json($response);
    }

    public function apiUserAdd(Request $request){
      $response['status'] = false;
      $response['message'] = "Something went wrong";
      
      $message = [
        'name.required' => 'apne name enter nhi kia h',
        'name.min' => 'enter more then 3 char',
        'email.unique' => 'apki mail id phle se registed hai',
      ];
      $validator = Validator::make($request->all(), [
          'name' => 'required|min:3',
          'email' => 'required|unique:users|max:100',
          'contact' => 'required',
          'password' => 'required|min:6',
          'image' => 'mimes:jpg,bmp,png'     
      ],$message);
      if ($validator->fails()) {
        $response['errors'] = $validator->messages()->getMessages();
        return response()->json($response);
        exit;
      }


      $fileName = '';
      if($request->hasFile('image')){
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $fileName = time().'.'.$ext; // 434343434.pdf
        $destinationPath = 'userImage';
        $file->move($destinationPath,$fileName);
      }

      $insert['name'] = $request['name'];
      $insert['email'] = $request['email'];
      $insert['contact'] = $request['contact'];
      $insert['image'] = $fileName;
      $insert['password'] = bcrypt($request['password']);
      $output = DB::table('users')->insert($insert);
      if($output){
        $response['status'] = true;
        $response['message'] = "Insert Success";
      }
      return response()->json($response);

    }
}
