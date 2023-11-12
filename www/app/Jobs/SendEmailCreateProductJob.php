<?php

namespace App\Jobs;

use App\Models\Product;
use App\Notifications\ProductCreate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class SendEmailCreateProductJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var Product
     */
    private$_product;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Product $obProduct)
    {
        $this->_product = $obProduct;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Notification::route('mail', 'misha-mora@yandex.ru')->notify(new ProductCreate($this->_product));
    }
}
