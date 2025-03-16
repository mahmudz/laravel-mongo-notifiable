<?php

namespace Mahmudz\LaravelMongoNotifiable;

use Illuminate\Notifications\RoutesNotifications;

trait Notifiable
{
    use HasDatabaseNotifications, RoutesNotifications;
}
