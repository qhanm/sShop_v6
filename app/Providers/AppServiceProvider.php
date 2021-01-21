<?php

namespace App\Providers;

use App\Models\Logs\LogError;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\ServiceProvider;

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
        Queue::after(function (JobProcessed $event) {
            LogError::logException('queue', new \Exception('null'), ['event' => $event, $event->job->getRawBody()]);
        });
    }
}
