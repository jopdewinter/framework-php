<?php

function getBirthday($id) 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE birthday_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}

function getAllBirthdays() 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function editBirthday() 
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
    $year = isset($_POST['year']) ? $_POST['month'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($name) == 0 || strlen($day) == 0 || strlen($month) == 0 || strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "UPDATE birthdays SET birthday_name = :name, birthday_day = :day, birthday_month = :month, birthday_year = :year WHERE birthday_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':day' => $day,
		':month' => $month,
        ':year' => $year,
		':id' => $id));
	$db = null;
	
	return true;
}

function deleteBirthday($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM birthdays WHERE birthday_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}