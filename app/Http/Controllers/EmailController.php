<?php

namespace App\Http\Controllers;

use App\Mail\MultipleGmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMultipleGmails()
    {
        $recipientEmail = 'another_email@example.com'; // The email address to send to

        $emailsToSend = [
            [
                'subject' => 'Your First Gmail Subject ',
                'content' => 'This is the content for the first email.',
            ],
            [
                'subject' => 'Your Second Gmail Subject ',
                'content' => 'Here\'s the content for the second email, with more details.',
            ],
            [
                'subject' => 'Third Gmail from Laravel ',
                'content' => 'And this is the last email content example.',
            ],
        ];

        foreach ($emailsToSend as $email) {
            Mail::to($recipientEmail)->send(new MultipleGmailSender($email['content'], $email['subject']));
        }
        // foreach ($emailsToSend as $email) {
        //     Mail::to($recipientEmail)->queue(new MultipleGmailSender($email['content'], $email['subject']));
        // }

        return "Multiple Gmails sent successfully to " . $recipientEmail . "!";
    }
}