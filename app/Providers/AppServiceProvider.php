<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Braintree\Configuration;

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
        // TOTEST
        // Braintree stuff
        //    $gateway = new \Braintree\Gateway([
        //     'environment' => '',
        //     'merchantId' => '',
        //     'publicKey' => '',
        //     'privateKey' => ''
        //    ]);
        \Braintree\Configuration::environment(env('BRAINTREE_ENV'));
        \Braintree\Configuration::environment(env('BRAINTREE_ENV'));
        \Braintree\Configuration::merchantId(env('BRAINTREE_MERCHANT_ID'));
        \Braintree\Configuration::publicKey(env('BRAINTREE_PUBLIC_KEY'));
        \Braintree\Configuration::privateKey(env('BRAINTREE_PRIVATE_KEY'));
    }
}
