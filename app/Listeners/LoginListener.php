<?php

namespace App\Listeners;

use App\Mail\NovoAcesso;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Mail;
class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        info('Logou');
        info($event->user->email);
        info($event->user->name);


        $quando = now()->addMinutes(1);

        //User, users[], email
        Mail::to($event->user)
        //->send(new NovoAcesso($event->user));
        ->queue(new NovoAcesso($event->user));
        //->later($quando, new NovoAcesso($event->user));

        Mail::to($event->user)
        //->send(new NovoAcesso($event->user));
        ->queue(new NovoAcesso($event->user));
        //->later($quando, new NovoAcesso($event->user));

        Mail::to($event->user)
        //->send(new NovoAcesso($event->user));
        ->queue(new NovoAcesso($event->user));
        //->later($quando, new NovoAcesso($event->user));

        Mail::to($event->user)
        //->send(new NovoAcesso($event->user));
        ->queue(new NovoAcesso($event->user));
        //->later($quando, new NovoAcesso($event->user));
    }
}
