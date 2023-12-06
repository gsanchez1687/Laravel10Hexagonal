<?php 

namespace Src\Entity\User\Infrastructure\Services;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
final class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Src\Entity\User\Infrastructure\Controllers';
    public function boot(): void
    {
        parent::boot();
    }

    public function map(): void
    {
       $this->mapApiRoutes();
    }

    public function mapApiRoutes(): void
    {
        Route::prefix('api/user')
            ->namespace($this->namespace)
            ->group(base_path('src/entity/User/Infrastructure/Routes/api.php'));
    }

}