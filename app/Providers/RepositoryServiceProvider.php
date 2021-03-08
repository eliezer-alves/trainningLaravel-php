<?php

namespace App\Providers;

use App\Repositories\Contracts\{
	AbstractRepositoryInterface,
	TeamRepositoryInterface,
};
use App\Repositories\Eloquent\{
	AbstractRepository,
	TeamRepository,
};

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
	/**
	 * Register any Repository Patters.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			AbstractRepositoryInterface::class,
			AbstractRepository::class
		);
		
		$this->app->bind(
			TeamRepositoryInterface::class,
			TeamRepository::class
		);
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
