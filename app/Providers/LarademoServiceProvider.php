<?php

namespace App\Providers;
use App\Larademo\Larademo; 
use Illuminate\Support\ServiceProvider;

class LarademoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('larademo',function(){ // 'larademo has to be  small case!'
            return new Larademo();  // Larademo() == is a constructor!!
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
