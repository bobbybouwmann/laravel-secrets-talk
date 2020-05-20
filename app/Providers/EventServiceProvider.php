<?php

namespace App\Providers;

use App\Listeners\AddFinishedToOutput;
use App\Listeners\AddLogoToOutput;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Fired after registration had been processed in the database
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        // Fired whenever a successful login was performed
        \Illuminate\Auth\Events\Login::class => [],

        // Fired whenever a query is executed against the database
        \Illuminate\Database\Events\QueryExecuted:: class => [],

        // Fired whenever a key has been put in the cache
        \Illuminate\Cache\Events\KeyWritten::class => [],

        // Fired whenever a key has been removed from the cache
        \Illuminate\Cache\Events\KeyForgotten::class => [],

        // Fired whenever a the key is found in the cache while retrieving the cached value
        \Illuminate\Cache\Events\CacheHit::class => [],

        // Fired whenever an email is allowed to be send and waiting to be dispatched
        \Illuminate\Mail\Events\MessageSending::class => [],

        // Fired whenever an email has been send through any of the mailers
        \Illuminate\Mail\Events\MessageSent::class => [],

        // Fired whenever the framework is booting on the command line
        \Illuminate\Console\Events\ArtisanStarting::class => [],

        // Fired whenever the scheduler fires one of the due tasks
        \Illuminate\Console\Events\ScheduledTaskStarting::class => [],

        // Fired whenever one of the due tasks of scheduler is finished
        \Illuminate\Console\Events\ScheduledTaskFinished::class => [],

        // Fired whenever a command is executed through on the command line
        \Illuminate\Console\Events\CommandStarting::class => [
            AddLogoToOutput::class,
        ],

        // Fired whenever a command has finished
        \Illuminate\Console\Events\CommandFinished::class => [
            AddFinishedToOutput::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
