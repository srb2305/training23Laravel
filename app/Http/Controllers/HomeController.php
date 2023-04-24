<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sendMail(){
        
        $data['username'] = 'saurbah';
        $toMailId = 'srb.com2112@gmail.com';
        $subject = "Invoice Pending of Last Month";

        Mail::send('mail.test',
            $data,
            function ($message) use ($toMailId, $subject) {
                $message->to($toMailId);
                $message->from(
                    env('MAIL_FROM_ADDRESS'),
                    env('MAIL_FROM_NAME')
                );
                $message->subject($subject);
            }
        );

        dd('mail send successfully');
    }
}
