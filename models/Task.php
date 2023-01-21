<?php

namespace models;

use DateTime;
use DateTimeZone;

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
	public DateTime $time;
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
            $this->id = $this->conn->insert_id;
	}


	public function save()
	{

        $this->conn->query("UPDATE `tasks` SET `responsible`='{$this->responsibile->id}',`title`='$this->title',`text`='$this->text',`status`='$this->status',`priority`='$this->priority' WHERE id = '$this->id'");
	}

    public function get($id)
    {

        $res = $this->conn->query("SELECT * FROM tasks where id = '$id'");
        $row = $res->fetch_assoc();
        $this->text = $row['text'] ?: '';
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->responsibile = new User($row['responsible']);
        $this->status = $row['status'];
        $this->time = new \DateTime($row['time'], new DateTimeZone('Europe/Moscow'));
        $this->created_at = new \DateTime($row['created_at'], new DateTimeZone('Europe/Moscow'));
        $this->updated_at = new \DateTime($row['updated_at'], new DateTimeZone('Europe/Moscow'));

        $this->priority = $row['priority'];


    }


	public function __destruct()
	{
		parent::__destruct();
	}


}