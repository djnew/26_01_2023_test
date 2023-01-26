<?php

namespace App\Listeners;

use App\Events\ChangeUserSettingEvent;
use App\Services\Base\INotificationUserService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotificationUserChangeSettingsListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(
        private readonly INotificationUserService $service
    )
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ChangeUserSettingEvent $event
     * @return void
     */
    public function handle(ChangeUserSettingEvent $event)
    {
        /**
         * Вызываем сервис нотификации
         */
        //
    }
}
