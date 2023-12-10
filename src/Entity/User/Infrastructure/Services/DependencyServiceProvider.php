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
        $this->app->when(\Src\Entity\User\Application\Find\UserFindAllUseCase::class)
            ->needs(\Src\Entity\User\Domain\Contracts\RepositoryContract::class)
            ->give(\Src\Entity\User\Infrastructure\Repositories\Eloquent\UserRepository::class);

        $this->app->when(\Src\Entity\User\Application\Find\UserFindByIdUseCase::class)
            ->needs(\Src\Entity\User\Domain\Contracts\RepositoryContract::class)
            ->give(\Src\Entity\User\Infrastructure\Repositories\Eloquent\UserRepository::class);
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
