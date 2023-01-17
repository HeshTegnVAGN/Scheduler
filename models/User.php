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


}