<?php

namespace models;

class User extends DB
{
	public $name;
	public $id;
	public $email;
	public $status;
	public array $admissions;

	public function __construct($id)
	{
        parent::__construct();
        $res = $this->conn->query("SELECT * from users where id = '$id'");
        $row = $res->fetch_assoc();
        $this->name = $row['name'];
        $this->id = $row['id'];
        $this->status = $row['status'];
        $this->email = $row['email'];
				$this->admissions = $this->getAdmissions();
	}

	public function getAdmissions()
	{
		$res = $this->conn->query("SELECT `comment`, `edit`, `adding`, users.id as uid, name, email FROM `user_admissions` join users on user_from = users.id where user_to = '$this->id'");
		$adm = [];
		while($row = $res->fetch_assoc())
		{
			$adm[] = $row;
		}
		return $adm;
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