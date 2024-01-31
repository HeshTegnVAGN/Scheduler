<?php

namespace models;

use DateTime;
use DateTimeZone;

class Task extends DB
{
    public TaskModel $task;

	public function __construct()
	{
		parent::__construct();
        $this->task = new TaskModel();
	}

	public function add($title, $responsible, $text = '', $priority=5, $deadline = null)
	{
			$uid = $_SESSION['user'];
			$this->task->title= $title;
			$this->task->responsibile= $responsible;
			$this->task->text= $text;
			$this->task->priority= $priority;
			$this->task->status= TaskModel::NEW;
        			$this->conn->query("INSERT INTO tasks (`responsible`,`created_by`, `title`, `text`, `status`, `priority`, `time`, `deadline`) values('$responsible','$uid', '$title','$text', ".TaskModel::NEW.", '$priority', NULL, ".(($deadline != null and $deadline != '0000-00-00 00:00:00') ? "'".$deadline."'" : "NULL").")");
            $this->task->id = $this->conn->insert_id;
            return $this;
	}


    public function addSubtask($title)
    {
        $id = $this->task->id;
        $this->conn->query("INSERT into subtasks(`task_id`, `title`, `status`) VALUES ('$id', '$title', 0)");
    }


    public function getSubTasks()
    {
        $id = $this->task->id;
        $res= $this->conn->query("SELECT * from subtasks where task_id = '$id'");
        if($res->num_rows > 0)
        {
            while ($row = $res->fetch_assoc())
            {
                $this->task->subtasks[] = $row;
            }
        }
        return $this;

    }


    public function deleteSubTasks()
    {
        $id = $this->task->id;
        $res= $this->conn->query("delete from subtasks where task_id = '$id'");

    }
	public function save()
	{

        $this->conn->query("UPDATE `tasks` SET `responsible`='{$this->task->responsibile}',`created_by` = '{$this->task->created_by}', `title`='{$this->task->title}',`text`='{$this->task->text}',`status`='{$this->task->status}',`priority`='{$this->task->priority}' WHERE id = '{$this->task->id}'");
	}

    public function get($id): Task
		{

        $res = $this->conn->query("SELECT * FROM tasks where id = '$id'");
        $row = $res->fetch_assoc();
        $this->task->text = $row['text'] ?: '';
        $this->task->id = $row['id'];
        $this->task->title = $row['title'];
        $this->task->created_by = $row['created_by'];
        $this->task->responsibile = $row['responsible'];
        $this->task->status = $row['status'];
        $this->task->time = new \DateTime($row['time'], new DateTimeZone('Europe/Moscow'));
        $this->task->created_at = new \DateTime($row['created_at'], new DateTimeZone('Europe/Moscow'));
        $this->task->updated_at = new \DateTime($row['updated_at'], new DateTimeZone('Europe/Moscow'));
        $this->task->finished_at = new \DateTime($row['finished_at'], new DateTimeZone('Europe/Moscow'));
        $this->task->deadline = new \DateTime($row['deadline'], new DateTimeZone('Europe/Moscow'));
        if($row['created_by'] != $row['responsible'])
        {
            $this->task->created_by = $row['created_by'];
            $res1 = $this->conn->query("SELECT `name`, `email` from users_sched where id = '{$row['created_by']}'");
            if($res1->num_rows)
            {
                $user = $res1->fetch_object();
                $this->task->author = $user->name; //." (".$user->email.")"
            }
        }
        $this->task->priority = $row['priority'];
        $this->getSubTasks();
				return $this;


    }

	public function getComments(): Task
	{
		$res = $this->conn->query("SELECT * FROM `comments` join users_sched on user_id=users_sched.id WHERE task_id = '{$this->task->id}'");
		$comm = [];
		if($res->num_rows > 0)
		{
			while ($row = $res->fetch_assoc())
			{
				$arr = [];
				$arr['text'] = $row['text'];
				$arr['created_at'] = new \DateTime($row['created_at'], new DateTimeZone('Europe/Moscow'));
				$arr['user_name'] = $row['name'];
				$comm[] = $arr;
			}
		}
		$this->task->comments = $comm;
		return $this;

	}

	public function isFrozen()
	{
		$res = $this->conn->query("SELECT * from freezes where task_id = '{$this->task->id}' and date_to is NULL");
//		dd($this->conn);
		if($res->num_rows > 0)
		{
			$this->task->frozen = true;
			return true;
		}
		$this->task->frozen = false;
		return false;

	}



	public function __destruct()
	{
		parent::__destruct();
	}


}