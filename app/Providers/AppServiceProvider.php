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
        //     'environment' => 'sandbox',
        //     'merchantId' => 'wz43wy6rkg4jm49v',
        //     'publicKey' => 'vhms7wg2wy7m8m4f',
        //     'privateKey' => '66cc12638a4d5123fc40ade8e61303cb'
        //    ]);
        \Braintree\Configuration::environment(env('BRAINTREE_ENV'));
        \Braintree\Configuration::environment(env('BRAINTREE_ENV'));
        \Braintree\Configuration::merchantId(env('BRAINTREE_MERCHANT_ID'));
        \Braintree\Configuration::publicKey(env('BRAINTREE_PUBLIC_KEY'));
        \Braintree\Configuration::privateKey(env('BRAINTREE_PRIVATE_KEY'));
    }
}
