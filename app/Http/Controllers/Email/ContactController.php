<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use Mail;
use Validator, Input, Redirect; 

class ContactController extends Controller
{
    public function email(Request $request)
    {
    	$rules = array(
		);

    	$validator = Validator::make($request->all(), $rules);

		if ($validator->passes())
		{
			$status = true;
			$input_name = $request->input_name;
			$input_email = $request->input_email;
			$input_subject = $request->input_subject;
			$input_message = $request->input_message;
			
		    
			Mail::to('')->send(new \App\Mail\Contact($input_name, $input_email, $input_subject, $input_message));

			return redirect('/home')->with('success', 'Email enviado');
		}

		$status = false;
		return redirect('/home')->with('error', 'Dados incorretos, confira os dados preenchidos e reenvie seu email de contato.');
    }
}
