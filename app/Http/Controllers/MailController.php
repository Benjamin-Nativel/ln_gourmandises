<?php

namespace App\Http\Controllers;

use App\Mail\Mailer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller


{

	public function contact(){
		return view('contacts');
	}

    public function sendMessageGoogle (Request $request) {

		#1. Validation de la requête
		$this->validate($request, [ 'message' => 'bail|required' ,
		'email' => 'bail|required|email' ,
		'name' => 'bail|required' ,
		'subject' => 'bail|required'
	]);
        


		#3. Envoi du mail
		Mail::to("benjaminhenri.nativel31@gmail.com")
						->queue(new Mailer($request->all()));

		return back()->with('Message_envoyé','ok');
	}
}
