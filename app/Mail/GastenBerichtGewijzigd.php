<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\GastenBericht;

class GastenBerichtGewijzigd extends Mailable
{
    use Queueable, SerializesModels;
    
    public $gastenBericht;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(GastenBericht $gastenBericht)
    {
        $this->gastenBericht = $gastenBericht;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.GastenBerichtMarkDown');
    }
}
