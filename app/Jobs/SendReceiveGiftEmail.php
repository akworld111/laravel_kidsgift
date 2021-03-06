<?php

namespace App\Jobs;

use App\KFMail;
use App\User;
use App\Child;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReceiveGiftEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $from_user;
    protected $to_user;
    protected $child;
    protected $amount;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($from_user, $to_user, $child, $amount)
    {
        $this->from_user = $from_user;
        $this->to_user = $to_user;
        $this->child = $child;
        $this->amount = $amount;        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(KFMail $mail)
    {
        $fromUser = "";
        if (isset($this->from_user->first_name) && $this->from_user->first_name != '') {
            $fromUser = $this->from_user->first_name;
        }
        else {
            $fromUser = $this->from_user->email;
        }

        $toUser = "";
        if (isset($this->to_user->first_name) && $this->to_user->first_name != '') {
            $toUser = $this->to_user->first_name;
        }
        else {
            $toUser = $this->to_user->email;
        }

        $toEmail = $this->to_user->email;

        $subject = "Gift was sent to your child";
        $data = [
            'title' => 'Hi ' . $toUser,
            'body' => 'Your child ' . $this->child->first_name . ' was received the gift($'. $this->amount .') from ' . $fromUser . '.'
        ];

        $content = view('emails.receivegift', $data)->render();
        
        $mail->sendTemplatedMail($toEmail, $subject, $content);
    }
}
