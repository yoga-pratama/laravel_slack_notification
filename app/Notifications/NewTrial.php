<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;


class NewTrial extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    public function toSlack($notifiable)
    {
       /*  return (new SlackMessage)->content($notifiable->name . " created a new trial")
        ->attachment(function ($attachment) use ($notifiable) {
            $attachment->title($notifiable->domain, $notifiable->url)
                       ->fields([
                            'Plan'    => $notifiable->plan,
                            'Country' => $notifiable->country
                        ]);
        }); */

        return (new SlackMessage)->content('This is slack laravel example');
    }      

    
}
