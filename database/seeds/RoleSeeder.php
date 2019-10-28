<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        $roles = [
             [ 'role' => 'admin' ],
             [ 'role' => 'personel' ],
             [ 'role' => 'bayi' ]
           ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
