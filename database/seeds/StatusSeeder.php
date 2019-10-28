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
               [ 'status' => 'Sipariş Alındı', 'code'=>'siparis' ],
               [ 'status' => 'Kargoya Verildi', 'code'=>'kargo' ],
               [ 'status' => 'Sipariş İptal', 'code'=>'iptal' ],
               [ 'status' => 'Hazırlanıyor', 'code'=>'hazirlaniyor' ],
               [ 'status' => 'İade', 'code'=>'iade' ]
             ];
        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
