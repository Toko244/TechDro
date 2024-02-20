<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Request;
use Spatie\Activitylog\Models\Activity;

class LogSuccessfulLogout
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
        if (auth()->check()) {
            $user = auth()->user();

            $browser = $this->getUserBrowser();

            activity()
                ->performedOn($user)
                ->causedBy($user)
                ->tap(function (Activity $activity) use ($browser) {
                    $activity->properties = [
                        'ip_address' => Request::ip(),
                        'browser' => $browser,
                    ];
                })
                ->log('logout');
        }
    }

    /**
     * Get the user's browser information from the request.
     *
     * @return string
     */
    protected function getUserBrowser()
    {
        return Request::header('User-Agent');
    }
}
