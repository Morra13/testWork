<?php

namespace App\Notifications;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ProductCreate extends Notification
{
    use Queueable;

    /**
     * @var Product
     */
    private$_product;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Product $obProduct)
    {
        $this->_product = $obProduct;
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
                    ->line('Вы создали продукт:')
                    ->line('Имя : ' . $this->_product->name)
                    ->line('Артикул : ' . $this->_product->article)
                    ->line('Статус : ' . $this->_product->status)
                    ->line('Аттрибуты : ')
                    ->line($this->_product->data)
                    ->action('На сайте', url('https://smf.com.ge/'))
                    ->line('Спасибо, что используете наш сайт!:)');
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
