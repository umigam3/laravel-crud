<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Repository\ProcedureRepositoryInterface;
use App\Infrastructure\Repository\ProcedureRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProcedureRepositoryInterface::class, ProcedureRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
