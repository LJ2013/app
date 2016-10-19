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
//        \Debugbar::info('xb');//�б������൱��ֱ�ӳ��ڸ������ռ��£���\ͬ�´�
//        echo 'test when this boot is called.'; //�����оͳ�����debugbar��
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('facadetest',function(){
            return new \App\mine\FacadeTest(); //�˴���ǰ���\����ʡ�ԣ�������\App\Providers\App\FacadeTest;htmlspecialchars
        }); 
    }
}
