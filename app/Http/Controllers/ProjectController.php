<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\User;
use App\Models\Task;

class ProjectController extends Controller
{
	public function index()
	{
		$projects = Project::get();

		return view('projects', ['projects' => $projects]);
	}

	public function store(Request $request)
	{
		$project = new Project;
		$project->title = $request->title;
		$project->description = $request->description;
		$project->owner_id = Auth::id();
		$project->save();

		return redirect()->route('users.home');
	}

	public function show($id)
	{
		$project = Project::find($id);

		return view('projects.project', ['project' => $project]);
	}

	public function update($id, Request $request)
	{
		$project = Project::find($id);
		$project->title = $request->title;
		$project->description = $request->description;
		$project->save();

		return redirect()->route('projects.show', $id);
	}

	public function destroy($id)
	{
		Project::destroy($id);

		return redirect()->route('projects.index');
	}

	public function board($id)
	{
		$users = User::get();

		$project = Project::with([
			'columns.tasks.tag',
			'columns.tasks.category',
		])->find($id);

		$categories = Project::find($id)->categories;

		return view('project.board', [
			'project' => $project,
			'columns' => $project->columns,
			'users' => $users,
			'categories' => $categories,
		]);
	}

	public function saveTasksOrder(Request $request)
	{
		DB::beginTransaction();
		try {
			$datas = json_decode($request->json, true);

			foreach ($datas as $id_task => $task) {
				$task = Task::find($id_task);
				$task->column_id = $task['column'];
				$task->position = $task['position'];
				$task->save();
			}
		} catch (Throwable $erro) {
			DB::rollBack();
			echo "Error while saving task order: {$erro}";
			die;
		}
		DB::commit();

		echo 'Order successfully updated!';
	}
}
