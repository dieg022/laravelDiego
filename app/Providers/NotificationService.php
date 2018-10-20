<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;

class NotificationService extends ServiceProvider
{
    private $emailProvider;

    public function __construct(MailerProvider $IeProvider) {
        $this->emailProvider = $IeProvider;
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
        $this->emailProvider->send();
    }
}
