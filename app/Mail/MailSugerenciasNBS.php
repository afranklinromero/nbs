<?php

namespace App\Mail;

use App\Modelos\SugerenciasNBS;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSugerenciasNBS extends Mailable
{
    use Queueable, SerializesModels;

    public $sugerenciasnbs;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( SugerenciasNBS $sugerenciasnbs)
    {
        //
        $this->sugerenciasnbs = $sugerenciasnbs;
        $this->subject = $sugerenciasnbs->subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('sugerenciasnbs.show');
    }
}
