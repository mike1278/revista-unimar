<?php

namespace App\Providers;

use Illuminate\Support\Facades\blade;
use Illuminate\Support\ServiceProvider;

class BladeMethodProvider extends ServiceProvider
{
    /**
     * @return void */
    public function register(){
        //
    }

    /**
     * @return void */
    public function boot(){
        Blade::if('Admin',function(){
            return auth()->user()->is_admin;
        });
    }
}
