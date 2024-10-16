<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendWorkbook extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Excel Workbook',
            from: new Address('islambassiem@gmail.com', 'Islam Bassiem'),
            replyTo: [new Address('islambassiem@gmail.com', 'Islam Bassiem')  ]
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath('1.xlsx'),
            Attachment::fromPath('2.xlsx'),
            Attachment::fromPath('3.xlsx'),
            Attachment::fromPath('4.xlsx'),
            Attachment::fromPath('5.xlsx'),
            Attachment::fromPath('6.xlsx'),
            Attachment::fromPath('7.xlsx'),
            Attachment::fromPath('8.pdf'),
        ];
    }
}
