<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FacadeTestProvider extends ServiceProvider
{
//    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        \Debugbar::info('xb');//有别名后相当于直接出在根命名空间下；无\同下错
//        echo 'test when this boot is called.'; //有这行就出不来debugbar？
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('facadetest',function(){
            return new \App\mine\FacadeTest(); //此处最前面的\不能省略，否则变成\App\Providers\App\FacadeTest;htmlspecialchars
        }); 
    }
}
