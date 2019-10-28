<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitySeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(StatusSeeder::class);
        //$this->call(OrderSeeder::class);
        $this->call(CommercialCompanySeeder::class);
        $this->call(CommercialSeeder::class);
        $this->call(ShippingCompanySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PhotoProductSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderProductSeeder::class);
    }
}
