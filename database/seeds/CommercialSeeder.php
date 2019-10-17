<?php

use Illuminate\Database\Seeder;

class CommercialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Commercial', 30)->create();
    }
}
