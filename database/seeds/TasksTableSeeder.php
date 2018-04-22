<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tasks')->insert([
          'title' => 'Update Client Spreadsheet',
          'createdById' => 1,
          'projectId' => 2,
          'deadline' => '2018-08-16',
          'assignee' => 1,
          'description' => 'Narwhal flexitarian synth pop-up affogato church-key roof party man bun slow-carb selvage. Try-hard small batch put a bird on it hexagon. Art party man bun mixtape twee tofu bicycle rights artisan chambray pug.'
        ]);
    }
}
