<?php

namespace App\Providers;

use App\Models\Base\INotification;
use App\Models\Base\IUser;
use App\Models\Base\IUserContact;
use App\Models\Base\IUserContractType;
use App\Models\Base\IUserSetting;
use App\Models\Base\IUserSettingType;
use App\Models\Notification;
use App\Models\User;
use App\Models\UserContact;
use App\Models\UserContractType;
use App\Models\UserSetting;
use App\Models\UserSettingType;
use App\Services\Base\INotificationUserService;
use App\Services\Base\IVerifyUserParamsService;
use App\Services\ModelServices\Base\INotificationModelService;
use App\Services\ModelServices\Base\IUserContactsModelService;
use App\Services\ModelServices\Base\IUserContactTypesModelService;
use App\Services\ModelServices\Base\IUserSettingsModelService;
use App\Services\ModelServices\Base\IUserSettingTypesModelService;
use App\Services\ModelServices\Base\IUsersModelService;
use App\Services\ModelServices\UserContactsModelService;
use App\Services\ModelServices\UserContactTypesModelService;
use App\Services\ModelServices\UserSettingsModelService;
use App\Services\ModelServices\UserSettingTypesModelService;
use App\Services\ModelServices\UsersModelModelService;
use App\Services\NotificationUserService;
use App\Services\VerifyUserParamsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private $bindDI = [
        IUser::class             => User::class,
        IUserContact::class      => UserContact::class,
        IUserContractType::class => UserContractType::class,
        IUserSetting::class      => UserSetting::class,
        IUserSettingType::class  => UserSettingType::class,
        INotification::class     => Notification::class,

        IUserContactsModelService::class     => UserContactsModelService::class,
        IUserContactTypesModelService::class => UserContactTypesModelService::class,
        IUserSettingsModelService::class     => UserSettingsModelService::class,
        IUserSettingTypesModelService::class => UserSettingTypesModelService::class,
        IUsersModelService::class            => UsersModelModelService::class,
        INotificationModelService::class     => NotificationModelService::class,

        INotificationUserService::class => NotificationUserService::class,
        IVerifyUserParamsService::class => VerifyUserParamsService::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->bindDI as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
