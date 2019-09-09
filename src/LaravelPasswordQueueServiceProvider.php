<?php

namespace Brunomluiz\LaravelPasswordQueue;

use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelPasswordQueueServiceProvider
 * @package Brunomluiz\LaravelPasswordQueue
 */
class LaravelPasswordQueueServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function boot()
    {
        $this->app->register('Brunomluiz\LaravelPasswordQueue\Providers\PasswordResetServiceProvider');
    }

    /**
     *
     */
    public function register()
    {
    }
}