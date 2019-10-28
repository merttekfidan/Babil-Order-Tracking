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
                 [ 'method_name' => 'Kapıda nakit', 'code'=>'nakit' ],
                 [ 'method_name' => 'Kapıda Kredikartı', 'code'=>'kart' ],
                 [ 'method_name' => 'Havale', 'code'=>'havale' ],
                 [ 'method_name' => 'Kurye', 'code'=>'kurye' ],
                 [ 'method_name' => 'Ücretsiz', 'code'=>'ucretsiz' ]
               ];
        foreach ($payment_methods as $payment_method) {
            PaymentMethod::create($payment_method);
        }
    }
}
