<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $project = new Project;
    $project->owner_id = 1;
    $project->title = 'A Organise worksheet';
    $project->description = 'Click Here and view all the tasks related to the organization of the worksheets.';
    $project->save();
  }
}
