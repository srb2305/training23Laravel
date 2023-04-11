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
        $data = Contact::get();
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
            return redirect('contact')->with('error','Inserted Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
