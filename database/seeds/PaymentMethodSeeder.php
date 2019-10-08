<?php

use Illuminate\Database\Seeder;
use App\PaymentMethod as PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->delete();
        $payment_methods = [
                 [ 'method_name' => 'Kapıda nakit' ],
                 [ 'method_name' => 'Kapıda Kredikartı' ],
                 [ 'method_name' => 'Havale' ],
                 [ 'method_name' => 'Kurye' ],
                 [ 'method_name' => 'Ücretsiz' ]
               ];
        foreach ($payment_methods as $payment_method) {
            PaymentMethod::create($payment_method);
        }
    }
}
