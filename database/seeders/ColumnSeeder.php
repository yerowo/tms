<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Column;

class ColumnSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$columns = [
			['name' => 'Start'],
			['name' => 'In Progress'],
			['name' => 'Completed'],
			['name' => 'On Hold'],
			['name' => 'canceled'],
		];

		foreach ($columns as $key => $value) {
			$column = new Column;
			$column->project_id = 1;
			$column->name = $value['name'];
			$column->position = $key;
			$column->save();
		}
	}
}
