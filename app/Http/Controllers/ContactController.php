<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contact::paginate(4);
        return view('contact.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert['name'] = $request['name'];
        $insert['email'] = $request['email'];
        $insert['contact'] = $request['contact'];
        $insert['message'] = $request['message'];
        $insert['created_at'] = Carbon::now();
        
        //$output = DB::table('contacts')->insert($insert);
        $output = Contact::insert($insert);
        if($output){
            return redirect('contact')->with('success','Inserted Successfully');
        }else{
            return redirect('contact')->with('error','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       // $data = Contact::where('id',$id)->first();
       $data = Contact::find($id);
       return view('contact.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Contact::find($id);
       return view('contact.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request['id'];
        $update['name'] = $request['name'];
        $update['email'] = $request['email'];
        $update['contact'] = $request['contact'];
        $update['message'] = $request['message'];
        $update['updated_at'] = Carbon::now();
        
        $output = Contact::where('id',$id)->update($update);
        if($output){
            return redirect('contact')->with('success','Update Successfully');
        }else{
            return redirect('contact')->with('error','something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::where('id',$id)->delete();
        return redirect()->back();  
    }
}
