<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Plantilla;

class Correo extends Mailable
{
    use Queueable, SerializesModels;

    public $p;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Plantilla $plantilla)
    {
        $this->p=$plantilla;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.'.$this->p->id)
                    ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                    ->subject($this->p->asunto);
    }
}
