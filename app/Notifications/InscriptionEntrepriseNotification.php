<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InscriptionEntrepriseNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

     public $code;
     public $email;
     public $entreprise;
    public function __construct($code, $email, $entreprise)
    {
        //
        $this->code=$code;
        $this->email= $email;
        $this->entreprise= $entreprise;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Activation de votre compte')
            ->line('Bienvenue sur notre plateforme !')
            ->line('Bonjour ' . $this->entreprise )
            ->line('Nous sommes ravis de vous accueillir sur notre plateforme. Pour activer votre compte, veuillez utiliser le code ci-dessous :')
            ->line(  $this->code )
            ->line('Ce code d\'activation est confidentiel. Ne le partagez avec personne.')
            ->line('Merci de rejoindre notre communauté !')
            ->line('L\'équipe de LocatHabitat')
            ->action('Activer mon compte', url('/validate-account' . '/' . $this->email));
    }
    

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
