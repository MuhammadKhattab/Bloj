<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tags')->insert([
          'name' => 'Nature'
      ]);

      DB::table('tags')->insert([
          'name' => 'Sports'
      ]);

      DB::table('tags')->insert([
          'name' => 'Literature'
      ]);

      DB::table('tags')->insert([
          'name' => 'Photography'
      ]);

      DB::table('tags')->insert([
          'name' => 'Humor'
      ]);

      DB::table('tags')->insert([
          'name' => 'Joy'
      ]);

      DB::table('tags')->insert([
          'name' => 'Space'
      ]);

      DB::table('tags')->insert([
          'name' => 'Science'
      ]);

    }
}
