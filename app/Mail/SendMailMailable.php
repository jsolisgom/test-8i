<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\User;
use App\Models\Course;

class SendMailMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Compra de curso';
    protected $user;
    protected $course;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Course $course)
    {
        $this->user = $user;
        $this->course = $course;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        $course = $this->course;
        return $this->view('emails.buycourse', compact('user', 'course'));
    }
}
