<?php

namespace models;

use DateTime;

class SubTaskModel extends DB
{
    public const NEW = 0;
    public const FINISHED = 1;

    public string $title;

    public int $task_id;
    public int $id;



    public function __construct()
    {
        parent::__construct();
    }

    public function add($title, $task_id)
    {
        $this->conn->query("INSERT into subtasks(`task_id`, `title`, `status`) VALUES ('$task_id', '$title', 0)");
        return $this->conn->insert_id;

    }

    public function delete($id)
    {
        $this->conn->query("DELETE from subtasks where id = '$id'");
    }

    public function change($id)
    {
        $this->conn->query("UPDATE subtasks set status = 1 where id= '$id'");
    }
}