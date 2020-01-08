<?php

namespace App\Listeners;

use App\Events\HomeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewHomeEventListener
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
     * @param  HomeEvent  $event
     * @return void
     */
    public function handle(HomeEvent $event)
    {
        info("Entrou no home 2 - NewHomeListener");
        info($event->text);
    }
}
