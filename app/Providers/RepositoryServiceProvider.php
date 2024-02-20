<?php

namespace App\Providers;

use App\Repositories\BannerRepository;
use App\Repositories\ComponentableRepository;
use App\Repositories\ComponentPostRepository;
use App\Repositories\ComponentRepository;
use App\Repositories\Interfaces\BannerRepositoryInterface;
use App\Repositories\Interfaces\ComponentableRepositoryInterface;
use App\Repositories\Interfaces\ComponentInterfaceRepository;
use App\Repositories\Interfaces\ComponentPostRepositoryInterface;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Interfaces\SectionRepositoryInterface;
use App\Repositories\Interfaces\SlugRepositoryInterface;
use App\Repositories\PostRepository;
use App\Repositories\SectionRepository;
use App\Repositories\SlugRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(ComponentInterfaceRepository::class, ComponentRepository::class);
        $this->app->bind(SlugRepositoryInterface::class, SlugRepository::class);
        $this->app->bind(ComponentPostRepositoryInterface::class, ComponentPostRepository::class);
        $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
        $this->app->bind(ComponentableRepositoryInterface::class, ComponentableRepository::class);
        $this->app->bind(ComponentPostRepositoryInterface::class, ComponentPostRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
