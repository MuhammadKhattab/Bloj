<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Muhammad',
          'email' => 'mssk@mssk.com',
          'password' => bcrypt('secret')
      ]);

      DB::table('users')->insert([
          'name' => 'Zligtosaur',
          'email' => 'msskz@msskz.com',
          'password' => bcrypt('secret')
      ]);
    }
}
