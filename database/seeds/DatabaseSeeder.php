<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
          'name' => 'jordanthomp81',
          'email' => 'jordanthomp81@gmail.com',
          'password' => bcrypt('1manbandjat'),
        ]);

        DB::table('tasks')->insert([
          'title' => 'Update Client Spreadsheet',
          'createdById' => 1,
          'projectId' => 2,
          'deadline' => '2018-08-16',
          'assignee' => 1,
          'completed' => 0,
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);

        DB::table('tasks')->insert([
          'title' => 'Tasks Again',
          'createdById' => 1,
          'projectId' => 2,
          'deadline' => null,
          'assignee' => 1,
          'completed' => 0,
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);

        DB::table('projects')->insert([
          'name' => 'App Design',
          'createdById' => 1,
          'deadline' => null,
          'members' => 1,
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);

        DB::table('projects')->insert([
          'name' => 'Website',
          'createdById' => 1,
          'deadline' => '2017-04-16',
          'members' => 1,
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);

        DB::table('projects')->insert([
          'name' => 'Web App',
          'createdById' => 1,
          'deadline' => '2017-04-16',
          'members' => 1,
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);

        DB::table('projects')->insert([
          'name' => 'Plugin',
          'createdById' => 1,
          'deadline' => '2017-04-16',
          'members' => 1,
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);
    }
}
