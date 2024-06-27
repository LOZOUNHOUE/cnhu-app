<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactDetails;

    public function __construct($contactDetails)
    {
        $this->contactDetails = $contactDetails;
    }

    public function build()
    {
        return $this->view('emails.contact')
                    ->with('contactDetails', $this->contactDetails);
    }
}
