<?php

use Illuminate\Database\Seeder;
use App\PaymentPlatfomr;

class PaymentPlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([

            'name' => 'PayPal',
            'image' => 'assets/img/metodos-pago/paypal.jpg',
        ]);

        PaymentPlatform::create([

            'name' => 'Stripe',
            'image' => 'assets/img/metodos-pago/stripe.jpg',
        ]);
    }
}
