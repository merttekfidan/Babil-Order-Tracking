<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = [
          [
            'name' => 'Merdjan',
            'surname' => 'Tekfidan',
            'nickname' => 'mertcaner',
            'phone_number' => '5364161577',
            'email' => 'merttekfidan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('112233+-+-'), // password
            'remember_token' => Str::random(10),
            'last_online' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Merdjan2',
              'surname' => 'Tekfidan',
              'nickname' => 'mertcaner2',
              'phone_number' => '5364161577',
              'email' => 'merttekfidan2@gmail.com',
              'email_verified_at' => now(),
              'password' => bcrypt('112233+-+-'), // password
              'remember_token' => Str::random(10),
              'last_online' => date('Y-m-d H:i:s'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]
           ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
