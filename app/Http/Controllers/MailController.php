<?php

namespace App\Http\Controllers;

use App\Mail\Mailer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMessageGoogle (Request $request) {

		#1. Validation de la requête
		$this->validate($request, [ 'message' => 'bail|required' ]);
        $this->validate($request,['name']);
        $this->validate($request, ['email']);
        $this->validate($request, ['sujet']);


		#3. Envoi du mail
		Mail::to("benjaminhenri.nativel31@gmail.com")
						->queue(new Mailer($request->all()));

		return back()->withText("Message envoyé");
	}
}
