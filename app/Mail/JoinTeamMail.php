<?php

namespace App\Mail;

use App\Team;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class JoinTeamMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user,$sender;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Team $user, User $sender)
    {
        $this->user = $user;
        $this->sender = $sender;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.join');
    }
}
