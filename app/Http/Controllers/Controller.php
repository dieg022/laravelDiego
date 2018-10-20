<?php

namespace App\Http\Controllers;

use App\Providers\MailerProvider;
use App\Providers\SmtpProvider;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Providers\NotificationService;
use App\User;
use App\Providers\MailerProvider as MailerInterface;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendNotification($id)
    {


        $notificacion=new NotificationService($a);
        $user=new User();

        $user->setName("DIEGO PUYA");
        $user->setEmail("diego.puya91@gmail.com");
        $message="TEXTO PRUEBAS";

        $result=$notificacion->notify($user,$message);

        return response()->json(['id' => $id, 'email' => $user->getEmail(),'message'=>$message,'result'=>$result]);
    }
}
