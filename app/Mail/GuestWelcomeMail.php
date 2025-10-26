<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Guest;

class GuestWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $guest;
    public $plainPassword;

    public function __construct(Guest $guest, $plainPassword)
    {
        $this->guest = $guest;
        $this->plainPassword = $plainPassword;
    }
    public function build()
    {
        return $this->subject('Bienvenue sur le Wifi GuestAccess - Sagemcom')
                    ->markdown('emails.guest.welcome');
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Guest Welcome Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.guest.welcome',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
