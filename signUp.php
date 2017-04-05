<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

session_start();
include "dbsql.php";
include "index.php";

$first = $_POST['first'];
$last = $_POST['last'];
$username = $_POST['username'];
$password = $_POST['password'];


    $sql = "INSERT INTO users (first, last, username, password) values ('$first', '$last', '$username', '$password')";
	$result = $conn->query($sql);
	

header('Location: index.php');  // take back to index
