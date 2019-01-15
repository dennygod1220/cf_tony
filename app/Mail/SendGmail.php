<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendGmail extends Mailable
{
    use Queueable, SerializesModels;

    public $par;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($par)
    {
        //
        $this->par = $par;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Tony哥活動網站訊息")->view('sendgmail')->with([
            'par' => $this->par,
        ]);
    }
}
