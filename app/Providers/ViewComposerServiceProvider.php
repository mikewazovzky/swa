<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Menu;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
	
	private function composeNavigation()
	{
		//dd($menu->data);
		//$menu = ['main' => 'MAIN', 'news' => 'NEWS'];
		
		view()->composer('layouts.app', function($view)
		{
			$menu = new Menu;
			$view->with('menu', $menu->data);
		});
	}
	
	
}
