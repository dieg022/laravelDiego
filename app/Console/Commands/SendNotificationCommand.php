<?php

namespace App\Console\Commands;

use App\Providers\SesProvider;
use Illuminate\Console\Command;

use App\Providers\NotificationService;
use App\User;

class SendNotificationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SendNotificationCommand {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $userId = $this->argument('id');

        $notificacion=new NotificationService(new \App\Providers\SesProvider($this));

        $user=new User();

        $user->setName("DIEGO PUYA");
        $user->setEmail("diego.puya91@gmail.com");
        $message="TEXTO PRUEBAS";

        $result=$notificacion->notify($user,$message);

        echo "User id:$userId email:".$user->getEmail()." message:".$message." result:".$result;


    }

}
