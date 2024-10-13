<?php

namespace App\Providers;

use App\Models\Admin\MarqueeInfo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer(['layouts_main.inner_main_top', 'index'], function ($view) {
            // 傳遞固定區塊的資料到視圖
            $MarqueeInfo = MarqueeInfo::where('used', 1)->first();
            $view->with('marqueeText', $MarqueeInfo->marquee_text);
        });
    }
}
