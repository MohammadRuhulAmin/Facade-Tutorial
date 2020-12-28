<?php

namespace App\Providers;

use App\Friend\Friendlist;
use Illuminate\Support\ServiceProvider;

class FriendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('friendlist',function(){
            return new Friendlist("Mohammad Sakib Hasan","Dhaka","01403288711");
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
