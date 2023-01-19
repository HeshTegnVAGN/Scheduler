<?php

use models\DB;

class Comment extends DB
{

    public int $task_id;
    public int $user_id;
    public string $text;

    public function __construct()
    {
        parent::__construct();
    }

    public static function add($text, $author, $task)
    {
        $com = new self();
        $com->conn->query("INSERT into comments(task_id, user_id, text) values ('$task','$author', '$text')");
        $com->text = $text;
        $com->task_id = $task;
        $com->user_id = $author;
        return $com;
    }
}