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
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);

        DB::table('projects')->insert([
          'name' => 'Website',
          'deadline' => '2017-04-16',
          'members' => 1,
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);

        DB::table('projects')->insert([
          'name' => 'Web App',
          'deadline' => '2017-04-16',
          'members' => 1,
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);

        DB::table('projects')->insert([
          'name' => 'Plugin',
          'deadline' => '2017-04-16',
          'members' => 1,
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);
    }
}
