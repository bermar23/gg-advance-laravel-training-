<?php

namespace App\Providers\Modules;

use App\Modules\Impl\TestModuleDefaultImpl;
use App\Modules\TestModule;
use Illuminate\Support\ServiceProvider;

class TestModuleProvider extends ServiceProvider
{

    protected $defer = true;//load only once needed

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TestModule::class, TestModuleDefaultImpl::class);
    }
}
