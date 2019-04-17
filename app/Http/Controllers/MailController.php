<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Mail\PendingMail;

use Symfony\Component\HttpFoundation\Request;
 
class MailController extends Controller
{	

	public function index(){

		return view('mails.form');
	}

    public function send(Request $request)
    {

     	$parameters = $request->all();

     	// dd($parameters);

     	$MailId		=	$parameters['MailId'];
      	$name 		=	$parameters['Username'];	

        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = $name/*'ReceiverUserName'*/;
 
        //Mail::to("rohan.sable@tantra-gyan.com")->send(new DemoEmail($objDemo));
        Mail::to($MailId)->send(new DemoEmail($objDemo));

        return view('mails.Success');
    }
}