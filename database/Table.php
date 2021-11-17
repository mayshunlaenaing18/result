<?php

namespace Database;
use PDOException;

class Table{
	private $db;

	public function __construct(MySQL $db){
		$this->db = $db->connect();
	}

	public function getAllStudents(){
		$sql = "SELECT * FROM students";
		$statement = $this->db->query($sql);
		return $statement->fetchAll();
	}

	public function getByRoll($year, $roll){
		$sql = "SELECT * FROM students WHERE year = :year AND roll_no = :roll";
		$statement = $this->db->prepare($sql);
		$statement->execute([
			':year' => $year,
			':roll' => $roll
		]);
		$row = $statement->fetch();
		return $row?? false;
	}

	public function studentMarks($roll){
		$sql = "SELECT * FROM marks WHERE student_roll = :roll";
		$statement = $this->db->prepare($sql);
		$statement->execute([
			":roll" => $roll
		]);
		$row = $statement->fetch();
		return $row;
	}

	public function insertMsg($name, $email, $msg){
		$sql = "INSERT INTO messages (name, email, msg) VALUES (:name, :email, :msg)";
		$statement = $this->db->prepare($sql);
		$statement->execute([
			':name' => $name,
			':email' => $email,
			':msg' => $msg 
		]);
		return $this->db->lastInsertID();
	}
}

