<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$datas = [
			'name' => 'admin',
			'email' => 'admin@admin.com',
			'password' => bcrypt('password')
		];

		if (User::where('email', '=', $datas['email'])->count()) {
			$usuario = User::where('email', '=', $datas['email'])->first();
			$usuario->update($datas);
		} else {
			User::create($datas);
		}
	}
}
