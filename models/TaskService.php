<?php

namespace models;

use DateTimeZone;

class TaskService extends DB
{
	public array $tasks;

	public function __construct()
	{
		parent::__construct();
	}

	public function get($resp): array
	{
		$res = $this->conn->query("SELECT * from tasks where status = 1 and responsible = '$resp' order by priority desc");
		$tasks = [];
		while($row = $res->fetch_assoc())
		{
			$task = new Task();
			$task->text = $row['text'];
			$task->id = $row['id'];
			$task->title = $row['title'];
			$task->responsibile = new User($row['responsible']);
			$task->status = $row['status'];
			$task->time = $row['time'];
			$task->created_at = new \DateTime($row['created_at'], new DateTimeZone('Europe/Moscow'));
			$task->updated_at = new \DateTime($row['updated_at'], new DateTimeZone('Europe/Moscow'));
			$task->priority = $row['priority'];
			$diff = (new \DateTime('now', new DateTimeZone('Europe/Moscow')))->diff($task->created_at);


			$tasks[] = $task;

		}
		return $tasks;
	}
}