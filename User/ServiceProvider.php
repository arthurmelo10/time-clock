<?php

namespace User;

use Illuminate\Contracts\Support\DeferrableProvider;
use \Illuminate\Support\ServiceProvider as BaseServiceProvider;
use User\Repository\Contracts\UserRepositoryInterface;
use User\Repository\UserRepository;

class ServiceProvider extends BaseServiceProvider implements DeferrableProvider
{
    public function provides(): array
    {
        return [
            UserRepositoryInterface::class,
        ];
    }

    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
