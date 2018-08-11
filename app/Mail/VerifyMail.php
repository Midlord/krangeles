<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
    * Build the message.
    *
    * @return $this
    */
    public function build()
    {
        return $this->subject('Korean Restaurant Locator Online Account Verification')->view('emails.verifyUser',['user' => $this->user]);
    }
}
