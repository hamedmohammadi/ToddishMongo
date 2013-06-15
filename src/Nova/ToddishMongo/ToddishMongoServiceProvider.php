<?php namespace Nova\ToddishMongo;

use Illuminate\Support\ServiceProvider;

class ToddishMongoServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('nova/toddish-mongo');
        \Auth::extend('nova', function(){
            return new Guard(
                new VerifyUserProvider(
                    new BcryptHasher,
                    \Config::get('auth.model')
                ),
                \App::make('session')
            );
        });
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}