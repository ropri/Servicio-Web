<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('projects')->truncate();
 
		$projects = array(
			['name' => 'Project 1', 'slug' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],	
			['name' => 'Project 2', 'slug' => 'project-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Project 3', 'slug' => 'project-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],	
		); 
		// Uncomment the below to run the seeder
		DB::table('projects')->insert($projects);

		//arreglo tasks 'joojojojo'
		// Uncomment the below to wipe the table clean before populating
		// DB::table('tasks')->truncate();
 
		$tasks = array(
			['name' => 'Task 1', 'slug' => 'task-1', 'project_id' => 1, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Task 2', 'slug' => 'task-2', 'project_id' => 1, 'description' => 'My second task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Task 3', 'slug' => 'task-3', 'project_id' => 1, 'description' => 'My third task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Task 4', 'slug' => 'task-4', 'project_id' => 2, 'description' => 'My fourth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Task 5', 'slug' => 'task-5', 'project_id' => 2, 'description' => 'My fifth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		); 
		// Uncomment the below to run the seeder
		DB::table('tasks')->insert($tasks);



		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Project::create([

			]);
		}
	}

}