<?php 
include "index.php";
ini_set('display_errors', 'On');
error_reporting(E_ALL);
session_start();

include "dbsql.php";
include "index.php";

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM USERS WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);


if (!$row = $result->fetch_assoc()) {
	echo "Your username or password is incorrect";
} else {
	$_SESSION['id'] = $row['id']; // session will save the users login details for each page 
}	

//header('Location: index.php');  // take back to index
