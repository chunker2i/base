<?php namespace Chunker2i\Base\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	public function register():void {
		//
	}

	public function boot():void {
		$this->publishes([
			__DIR__ . '/../../resources/scss/config/_colors.scss' => resource_path('scss/config/_colors.scss'),
		]);
	}
}
