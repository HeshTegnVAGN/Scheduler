<?php

namespace models;

use DateTime;

class Task extends DB
{

	public const NEW = 1;
	public const WORK = 2;
	public const ENDED = 3;

	public int $id;
	public string $title;
	public string $text;
	public User $responsibile;
	public int $status;
	public int $time;
	public DateTime $created_at;
	public DateTime $updated_at;

	public int $priority;

	public function __construct()
	{
		parent::__construct();
	}

	public function add($title, $responsible, $text = '', $priority=5)
	{
			$this->title= $title;
			$this->responsibile= new User($responsible);
			$this->text= $text;
			$this->priority= $priority;
			$this->status= self::NEW;
			$this->conn->query("INSERT INTO tasks (`responsible`, `title`, `text`, `status`, `priority`, `time`) values('$responsible', '$title','$text', ".self::NEW.", '$priority', 0)");
	}

	public function save()
	{
		$this->conn->query("update");
	}


	public function __destruct()
	{
		parent::__destruct();
	}


}