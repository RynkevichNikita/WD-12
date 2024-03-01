<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StatusNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $event;

    /**
     * Create a new message instance.
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->event->status,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        switch ($this->event->status) {
            case 'Completed':
                return new Content(
                    view: 'email.completed',
                );
            case 'Shipped':
                return new Content(
                    view: 'email.shipped',
                );
            case 'Cancelled':
                return new Content(
                    view: 'email.cancelled',
                );
            case 'Disputed':
                return new Content(
                    view: 'email.disputed',
                );
            case 'In Progress':
                return new Content(
                    view: 'email.inProgress',
                );
        }
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
