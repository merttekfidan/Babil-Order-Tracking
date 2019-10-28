<?php

use Illuminate\Database\Seeder;

class CommercialCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\CommercialCompany', 30)->create();
    }
}
