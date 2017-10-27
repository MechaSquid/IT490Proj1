<?php
session_start();
$un = $_POST['username'];
$pw = $_POST['password'];

$dsn = 'mysql:dbname=cdg9;host=sql2.njit.edu';
$username = 'cdg9';
$password = 'x9kbkWsY';
try {
	$conn = new PDO($dsn, $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo 'failed ' . $e->getMessage();
} 
$sql = "SELECT `isAdmin` FROM `users` WHERE `username`='$un' AND `password`='$pw'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetch()['isAdmin'];

$_SESSION['logged_in'] = $result;
header('Location: .');