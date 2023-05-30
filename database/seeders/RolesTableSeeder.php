<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
          'name' => 'Admin',
          'slug' => 'admin',
        ]);


         DB::table('roles')->insert([
          'name' => 'Landlord',
          'slug' => 'landlord',
        ]);

        DB::table('roles')->insert([
          'name' => 'Renter',
          'slug' => 'renter',
        ]);
    }
}
