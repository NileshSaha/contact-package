<?php

namespace NileshSaha\Contact\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use NileshSaha\Contact\Http\Requests\ContactFormRequest;
use NileshSaha\Contact\Mail\ContactMailable;
use NileshSaha\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(ContactFormRequest $request)
    {
        try {
            Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
            Contact::create($request->all());
            $request->session()->flash('success', 'Message is sent successfully');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Sorry an error occurred');
        }
        return back();
    }
}
