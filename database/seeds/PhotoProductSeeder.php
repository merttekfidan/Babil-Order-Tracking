<?php

use Illuminate\Database\Seeder;

class PhotoProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\PhotoProduct', 5)->create();
    }
}
