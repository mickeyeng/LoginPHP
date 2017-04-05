<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);




$conn = mysqli_connect('localhost', 'root', 'root', 'login');
//$conn = pg_connect("host='localhost' port='5432' dbname='login' user='postgres' password='mickey' "); // db sever, username, password, db name

if (!$conn) {
	die("Connection failed ".mysqli_connect_error()); // remove when publishing

}
