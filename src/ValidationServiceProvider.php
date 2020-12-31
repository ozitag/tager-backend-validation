<?php

namespace OZiTAG\Tager\Backend\Validation;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class ValidationServiceProvider extends RouteServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\Validator::resolver(function ($translator, $data, $rules, $messages, $customAttributes) {
            return new Validator($translator, $data, $rules, $messages, $customAttributes);
        });

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tager-validation');
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'tager-validation');
        $this->mergeConfigFrom(__DIR__ . '/../config/codes.php', 'tager-validation-codes');

        parent::boot();
    }
}
