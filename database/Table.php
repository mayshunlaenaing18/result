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

	public function deleteStudent($id){
		$sql = "DELETE FROM students WHERE id = $id";
		$statement = $this->db->query($sql);
		return $statement->rowCount();
	}

	public function editStudent($id){
		$sql = "SELECT * FROM students WHERE id = $id";
		$statement = $this->db->query($sql);
		return $statement->fetch();
	}

	public function updateStudent($id, $name, $roll, $year){
		$sql = "UPDATE students SET name =:name, roll_no = :roll, year = :year WHERE id = $id";
		$statement = $this->db->prepare($sql);
		$statement->execute([
			":name" => $name,
			":roll" => $roll,
			":year" => $year
		]);
		return $statement->rowCount();
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

	public function getAllMarks(){
		$sql = "SELECT * FROM students LEFT JOIN marks ON students.roll_no = marks.student_roll";
		$statement = $this->db->query($sql);
		$result = $statement->fetchAll();
		return $result;
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

