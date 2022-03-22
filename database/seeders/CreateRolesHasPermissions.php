<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class CreateRolesHasPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = DB::table('role_has_permissions')
        ->create([
            'permission_id' => '1',
            'role_id' => '1'
        ]);

        $permissions = DB::table('role_has_permissions')
        ->create([
            'permission_id' => '2',
            'role_id' => '1'
        ]);

        $permissions = DB::table('role_has_permissions')
        ->create([
            'permission_id' => '3',
            'role_id' => '1'
        ]);

        $permissions = DB::table('role_has_permissions')
        ->create([
            'permission_id' => '4',
            'role_id' => '1'
        ]);

        $permissions = DB::table('role_has_permissions')
        ->create([
            'permission_id' => '5',
            'role_id' => '1'
        ]);

        $permissions = DB::table('role_has_permissions')
        ->create([
            'permission_id' => '6',
            'role_id' => '1'
        ]);

        $permissions = DB::table('role_has_permissions')
        ->create([
            'permission_id' => '7',
            'role_id' => '1'
        ]);

        $permissions = DB::table('role_has_permissions')
        ->create([
            'permission_id' => '8',
            'role_id' => '1'
        ]);
    }
}
