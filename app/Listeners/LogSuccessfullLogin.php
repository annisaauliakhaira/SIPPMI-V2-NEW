<?php

namespace App\Listeners;

use App\Models\UserLogin;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

class LogSuccessfullLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if(!session()->has('loginas')){
            $lastLogin  = new UserLogin();
            $lastLogin->user_id = optional($event->user)->id;
            $lastLogin->login_at =  Carbon::now();
            $lastLogin->login_ip = $this->request->ip();
            $lastLogin->save();
            session()->forget('loginas');
        }
    }
}
