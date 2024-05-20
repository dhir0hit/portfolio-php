<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a contact form
     *
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

        $u_mail = $request->validate([
            'email' => 'bail|required|email',
            'name' => 'nullable|string',
            'email_subject' => 'nullable|string',
            'email_body' => 'bail|required|string',
        ]);

        /*
         * SEND TO USER
         * */
        Mail::to($u_mail["email"])->send(
            new sendMail($u_mail["email"],
                $u_mail["name"],
                $u_mail["email_subject"],
                $u_mail["email_body"]
            )
        );
        /*
         * SEND TO ME
         * */
        Mail::to("contact@dhir0hit.com")->send(
            new sendMail($u_mail["email"],
                $u_mail["name"],
                $u_mail["email_subject"],
                $u_mail["email_body"]
            )
        );

        return to_route('home')->with('message', "Email sent! you will receive an email with the details.");
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
    /*public function envelope(string $userMail, string $mailBody, string $userName='User'): Envelope
    {
        return new Envelope(
            from: new Address($userMail, $userName),
            subject: $mailBody,
        );
    }*/
}
