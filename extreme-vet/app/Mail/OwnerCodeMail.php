<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Owner;
use App\Models\Setting;
class OwnerCodeMail extends Mailable
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

    public function __construct(Owner $owner)
    {
        $this->owner=$owner;

        //info
        $this->info=setting('info');
        
        //owner code email
        $emails=setting('emails');
        $this->emails=$emails;

        //body
        $this->body=str_replace(['{owner_code}','{owner_name}'],[$owner['code'],$owner['name']],$emails['owner_code']['body']);
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.owner_code',[
                        'body'=>$this->body,
                        'emails'=>$this->emails,
                        'info'=>$this->info
                    ])
                    ->subject($this->emails['owner_code']['subject'])
                    ->from($this->info['email'],'noreply');
    }
}
