<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Group;
use App\Models\Owner;

class ReceiptMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $owner;
    public $info;
    public $emails;
    public $body;
    public $group;

    public function __construct(Owner $owner,Group $group)
    {
        $this->owner=$owner;
        $this->group=$group;

        //info
        $this->info=setting('info');

        //owner code email
        $emails=setting('emails');
        $this->emails=$emails;

        //body
        $this->body=str_replace(['{owner_name}'],[$owner['name']],$emails['receipt']['body']);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.receipt',[
            'body'=>$this->body,
            'emails'=>$this->emails,
            'info'=>$this->info
        ])
        ->subject($this->emails['receipt']['subject'])
        // ->attach($this->group['receipt_pdf'])
        ->from($this->info['email'],'noreply');
    }
}
