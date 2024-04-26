<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordForgetEntrepriseNotification extends Notification
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
            ->subject('Réinitialisation de votre mot de passe')
            ->line('Bonjour ' . $this->entreprise )
            ->line('Vous recevez cet e-mail car vous avez demandé la réinitialisation de votre mot de passe sur notre plateforme.')
            ->line('Veuillez cliquer sur le lien ci-dessous pour réinitialiser votre mot de passe.')
            ->action('Réinitialisation mot de passe', url('/validate-mail/' . $this->email . '/' . $this->code))
            ->line('Cordialement,')
            ->line('L\'équipe de LocatHabitat');
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
