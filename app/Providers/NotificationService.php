<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;

class NotificationService extends ServiceProvider
{

    protected  $emailProvider;


    public function __construct(MailerProvider $emailProvider)
    {
        $this->emailProvider=$emailProvider;
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    public function notify(User $user,$message)
    {
            return $this->emailProvider->send();
    }
}
