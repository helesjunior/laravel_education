<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserCreated extends Notification
{
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
        $appName = config('app.name');
        return (new MailMessage)
                    ->subject("Sua conta no $appName foi criada")
                    ->greeting("Olá {$notifiable->name}, seja bem-vindo ao $appName")
                    ->line("Seu login na aplicação é o {$notifiable->cpf} ou {$notifiable->email}!")
                    ->action('Clique aqui para efinir sua senha',route('password.reset',$this->token))
                    ->line("Obrigado por utilizar o $appName!")
                    ->salutation('Sistema Conta');
    }


}
