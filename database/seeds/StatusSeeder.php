<?php

use Illuminate\Database\Seeder;
use App\Status as Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->delete();
        $statuses = [
               [ 'status' => 'Sipariş Alındı' ],
               [ 'status' => 'Kargoya Verildi' ],
               [ 'status' => 'Sipariş İptal' ],
               [ 'status' => 'Hazırlanıyor' ],
               [ 'status' => 'İade' ]
             ];
        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
