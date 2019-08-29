<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Notification;
use App\Notifications\RecieveNoti;
use App\User;

class NotificationCtrl extends Controller
{
    public function sendNotification()
    {

        $user = User::first();
  
        // foreach ($user->notifications as $notification) {
        //     var_dump($notification->data);
        // }
        // die();
        // $user->unreadNotifications->markAsRead();
        
        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is my first notification from ItSolutionStuff.com',
            'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',
            'actionText' => 'View My Site',
            'actionURL' => url('/'),
            'order_id' => 101
        ];

        Notification::send($user, new RecieveNoti($details));

        dd('done');
    }
}
