<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contact;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact; // Variable for the contact data

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->from('registration@welittlefarmers.com')
                    ->subject('New Contact Form Submission')
                    ->view('emails.contact');
    }
}
