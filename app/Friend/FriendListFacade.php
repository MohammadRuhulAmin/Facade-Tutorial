<?php

namespace App\Friend;

use Illuminate\Support\Facades\Facade;

class FriendListFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'friendlist';
    }
}
