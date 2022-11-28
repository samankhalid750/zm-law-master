<?php
namespace App\Providers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use App\Helper\ZMHelper;
class ZMServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('zm',function(){
            return new ZMHelper();
        });
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}