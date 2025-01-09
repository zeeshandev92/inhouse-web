<?php

namespace App\Providers;

use App\Interfaces\{
    CategoryRepositoryInterface,
    DriverRepositoryInterface
};
use App\Interfaces\OfficeRepositoryInterface;
use App\Repositories\{
    CategoryRepository,
    DriverRepository
};
use App\Repositories\OfficeRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(DriverRepositoryInterface::class, DriverRepository::class);
        $this->app->bind(OfficeRepositoryInterface::class, OfficeRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
