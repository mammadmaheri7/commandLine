<?php

namespace App\Listeners;

use Illuminate\Filesystem\Cache;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CacheUserInfo
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
        $user = $event -> user;
        $ip = $_SERVER['REMOTE_ADDR'];
        $agent = $_SERVER['HTTP_USER_AGENT'];
        $user_info = [
            'user'  => $user -> name,
            'ip'    => $ip,
            'agent' => $agent
        ];
        \Illuminate\Support\Facades\Cache::store('file') -> put('user_info',$user_info,60);
    }
}
