<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
          'name' => 'App Design',
          'deadline' => '2017-04-16',
          'members' => 1,
          'description' => str_random(8)
        ]);
    }
}
