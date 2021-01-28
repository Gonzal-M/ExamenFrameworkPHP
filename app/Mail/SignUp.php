<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User as User;

class SignUp extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(array $user)
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
        return $this
            ->from('ExamenPHP')
            ->subject('Vous avez maintenant un compte !')
            ->view('email.signUp');
    }
    
}
