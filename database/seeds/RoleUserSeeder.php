<?php

use Illuminate\Database\Seeder;
use App\RoleUser;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->delete();
        $users = [
        [
          'role_id'=>1,
          'user_id'=>1
        ],
        [
          'role_id'=>2,
          'user_id'=>2
        ]
         ];
        foreach ($users as $user) {
            RoleUser::create($user);
        }
    }
}
