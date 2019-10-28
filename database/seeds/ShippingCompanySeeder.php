<?php

use Illuminate\Database\Seeder;
use App\ShippingCompany as ShippingCompany;

class ShippingCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipping_companies')->delete();
        $shipping_companies = [
               [ 'shipping_company' => 'Aras', 'code'=>'aras' ],
               [ 'shipping_company' => 'Sürat', 'code'=>'surat' ]
             ];
        foreach ($shipping_companies as $shipping_company) {
            ShippingCompany::create($shipping_company);
        }
    }
}
