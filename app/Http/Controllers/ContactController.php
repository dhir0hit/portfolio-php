<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;

class ContactController extends Controller
{
    /**
     * Display a contact form
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Creating Request to send mail to user using envelope()
     *
     * @param Request $request
     * */
    public function sendEmail(Request $request)
    {
        // TODO: call envelope() here and send email
        // return to_route('contact.index')->with('message','Mail sent youll' recevive blah balh')
    }

    /**
     * Sending Mail to user using Envelope
     *
     * @required Illuminate\Mail\Mailables
     * @param string $userMail
     * @param string $mailBody
     * @param string $userName
     *
     * @return Envelope
     */
    public function envelope(string $userMail, string $mailBody, string $userName='User'): Envelope
    {
        return new Envelope(
            from: new Address($userMail, $userName),
            subject: $mailBody,
        );
    }
}
