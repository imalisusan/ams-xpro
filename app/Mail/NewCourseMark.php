<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewCourseMark extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $course;


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
        return $this
        ->subject('New Course Mark Added')
        ->markdown('emails.coursemark')
        ->with([
            'name' => $this->user->name,
            'link' => route('courses.show', $this->course->id),
        ]);
    }
}
