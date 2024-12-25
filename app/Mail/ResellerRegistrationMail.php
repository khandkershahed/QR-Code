<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResellerRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $logoUrl;
    public $logoLink;

    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->logoUrl = asset('images/logo.png');
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */

    public function build()
    {
        return $this->from('support@flixzaglobal.com', 'GO QR')
        ->subject('Reseller account successfully created in GO QR.')
        ->view('vendor.mail.template.reseller_registration', [
            'data' => $this->data,
            'logoUrl' => $this->logoUrl,
        ]);
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Reseller account successfully created in GO QR.',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            // view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
