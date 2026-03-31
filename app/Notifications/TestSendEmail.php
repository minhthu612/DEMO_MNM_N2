<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TestSendEmail extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private $data;
public function __construct($data)
{
$this->data = $data;
}

public function via($notifiable)
{
    return ['mail'];
}
    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function toMail($notifiable)
{
return (new MailMessage)
->subject("Đặt hàng thành công")
->view("email_template.don_hang_thanh_cong",["data"=>$this->data]);
}
    /**
     * Get the mail representation of the notification.
     */

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
