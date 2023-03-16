<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function index()
	{
		$projects = Project::orderBy('title')->get();
		$users = User::orderBy('name')->get();

		return view('index', [
			'projects' => $projects,
			'users' => $users
		]);
	}

	public function store(Request $request): void
	{
		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->save();
	}
}
