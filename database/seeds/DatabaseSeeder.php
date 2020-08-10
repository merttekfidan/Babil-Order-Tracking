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
        $this->call(OrderSeeder::class);
        $this->call(CommercialSeeder::class);
        $this->call(UserSeeder::class);
    }
}
