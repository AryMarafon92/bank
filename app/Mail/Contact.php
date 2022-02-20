<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $input_name;
    public $input_email;
    public $input_subject;
    public $input_message;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($input_name, $input_email, $input_subject, $input_message)
    {
        $this->input_name = $input_name;
        $this->input_email = $input_email;
        $this->input_subject = $input_subject;
        $this->input_message = $input_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact')->subject('Novo Email de: ('.$this->input_name.')')->subject($this->input_subject)->from($this->input_email);
    }
}
