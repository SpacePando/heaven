<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index'); //renders the contact page
    }
    
    public function send_mail(Request $request)
    {
        $this->validate($request, [
            'fullname' => ['required', 'string', 'max:255' ], 
            'email' => ['required', 'string', 'email', 'max:255' ],
            'phone_number' => ['string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255']
        ]);
        
        $contact = [
            'fullname' => $request['fullname'], 
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ];
        
        
        Mail::to('receipent@domain.com')->send(new ContactFormMail($contact));
        
        return redirect()->route('contact')->with('status', ' Your Mail has been received');
    }
}

/*
Namespace App\Http\Controllers;
use App\Notifications\ContactFormMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Recipient;
Class ContactController extends Controller
{
 public function show()
 {
  return view('contact.index');
 }
public function mailContactForm(ContactFormRequest $message, Recipient $recipient)
 {      
  $recipient->notify(new ContactFormMessage($message));
  
  return redirect()->back()->with('message', 'Thanks for your message! We will get back to you soon!');
 }
}*/