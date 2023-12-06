<?php

namespace Src\Entity\User\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when('\Src\Entity\User\Application\Find\UserFindAllUseCase')
            ->needs('\Src\Entity\User\Domain\Contracts\RepositoryContract')
            ->give('\Src\Entity\User\Infrastructure\Repositories\Eloquent\UserRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
