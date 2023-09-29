<?php

namespace App\Providers;

use App\Jobs\BlogCreated;
use App\Jobs\BlogDeleted;
use App\Jobs\BlogUpdated;
use App\Jobs\TestJob;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\App;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // App::bindMethod(TestJob::class . '@handle', function($job){
        //     $job->handle();
        // }); 
        App::bindMethod(BlogCreated::class . '@handle', function($blog){
            $blog->handle();
        });
        App::bindMethod(BlogUpdated::class . '@handle', function($blog){
            $blog->handle();
        });
        App::bindMethod(BlogDeleted::class . '@handle', function($blog){
            $blog->handle();
        });
    }
}
