<?php

namespace App\Listeners;

use App\Events\CreateNewProduct;
use App\Mail\CreateNewProductMail;
use Illuminate\Support\Facades\Mail;

class SendCreateNewProductEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CreateNewProduct $event): void
    {
        Mail::to($event->user->email)->send(new CreateNewProductMail($event->user));
    }
}
