<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class QueryNotification extends Notification
{
  use Queueable;

  public $query;
  public $email;

  /**
  * Create a new notification instance.
  *
  * @return void
  */
  public function __construct(string $email, string $query)
  {
    $this->email = $email;
    $this->query = $query;
  }

  /**
  * Get the notification's delivery channels.
  *
  * @param  mixed  $notifiable
  * @return array
  */
  public function via($notifiable)
  {
    return ['mail'];
  }

  /**
  * Get the mail representation of the notification.
  *
  * @param  mixed  $notifiable
  * @return \Illuminate\Notifications\Messages\MailMessage
  */
  public function toMail($notifiable)
  {
    return (new MailMessage)
    ->subject('You have new Query')
    ->line('You have new query from ' . $this->email)
    ->line($this->query);
  }

  /**
  * Get the array representation of the notification.
  *
  * @param  mixed  $notifiable
  * @return array
  */
  public function toArray($notifiable)
  {
    return [
      //
    ];
  }
}
