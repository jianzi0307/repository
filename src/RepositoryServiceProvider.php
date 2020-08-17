<?php

namespace Jianzi\Repository;

use Illuminate\Support\ServiceProvider;
use Jianzi\Repository\Commands\RepositoryMakeCommand;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * 注册后启动服务
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([RepositoryMakeCommand::class]);
        }
    }
}
