<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            ['role' => 'Root User', 'permission' => 'root']
        );
        DB::table('roles')->insert([
            ['role' => 'Admin', 'permission' => 'admin']
        ]);
        DB::table('roles')->insert([
            ['role' => 'Editor', 'permission' => 'editor']
        ]);
        DB::table('roles')->insert([
            ['role' => 'Modifier', 'permission' => 'modifier']
        ]);
        DB::table('roles')->insert([
            ['role' => 'Author', 'permission' => 'euthor']
        ]);
        DB::table('roles')->insert([
            ['role' => 'User', 'permission' => 'user']
        ]);
    }
}
