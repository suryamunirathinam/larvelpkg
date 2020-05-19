<?php

namespace Suryamunirathinam\Communication\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $message;
    public $name;
    public function __construct($message,$name)
    {
        $this->message = $message;
        $this->name = $name;

    }

    /**
     * Build the message.
     *
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('communication::send.email')->with(['message'=>$this->message,'name'=>$this->name]);
    }
}
