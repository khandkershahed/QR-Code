<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserRegistration extends Notification
{
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
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }
    public function envelope()
    {
        return new Envelope(
            subject: 'Account successfully created in GO QR.',
        );
    }
    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->from('support@flixzaglobal.com', 'GO QR')
            ->subject('Account successfully created in GO QR.')
            ->view('vendor.mail.template.user_registration', [
                'data' => $this->data,
                'logoUrl' => $this->logoUrl,
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            // 'name' => $this->data,
            // 'link' => route('client-database.index'),
            // 'message1' => 'New Client is Registered In Company.',
            // 'message2' => ' Need To Approve.',
        ];
    }
}
