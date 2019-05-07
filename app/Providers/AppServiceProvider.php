<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Resources\Json\Resource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      //To prevent the length text error to happen in the body when doing the migration, call the namespace and type the line below in the boot method, use Illuminate\Support\Facades\Schema;
      Schema::defaultStringLength(191);
      
      // To eliminate the data object from rendering time
      Resource::withoutWrapping();
    }
}
