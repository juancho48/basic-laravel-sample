<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class contactController extends Controller
{

    public function index() 
    {
    	return view('contact');
    }

    /**
     * Store the incoming contact.
     *
     * @param  ContactFormRequest  $request
     * @return Redirect
     */
	public function store(ContactFormRequest $request)
	{
		// Do any action, mail it, or save it to the DB
		/* 
		\Mail::send('emails.contact',
		       array(
		           'name' => $request->get('name'),
		           'email' => $request->get('email'),
		           'phone' => $request->get('phone'),
		           'subject' => $request->get('subject'),
		           'user_message' => $request->get('message')
		       ), function($message)
		{
		       $message->from($request->get('email'));
		       $message->to('your_email@gmail.com', 'Admin')->subject($request->get('subject'));
		});
		*/
	    return back()
	        ->withInput()
	        ->with('status', 'Thanks for contacting us!');

	}

}
