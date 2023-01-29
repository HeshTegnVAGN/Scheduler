<?php

namespace models;

class User extends DB
{
	public $name;
	public $id;
	public $status;

	public function __construct($id)
	{
        parent::__construct();
        $res = $this->conn->query("SELECT * from users where id = '$id'");
        $row = $res->fetch_assoc();
        $this->name = $row['name'];
        $this->id = $row['id'];
        $this->status = $row['status'];
	}

    public function getAccesssedUsers()
    {
        $res = $this->conn->query("SELECT user_admissions.id as aid, users.id as uid, `user_to`, `adding`, `edit`, `comment`, `name`, `email` FROM `user_admissions` join users on user_to = users.id where user_from = '$this->id'");
        $arr = [];
        while ($row = $res->fetch_assoc())
        {
            $arr[] = $row;
        }
        return $arr;
    }

}