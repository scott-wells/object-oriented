<?php
namespace ScottWells\OOP;
require_once (dirname(__DIR__) . "/Classes/Author.php");

$serverName = "bootcamp-coders.cnm.edu";
$database = "swells19";
$username = "swells19";
$password = "j3pWhjmKDT`<^++B";
$sql = "mysql:host=$serverName;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// new MySQL connection using PDO, $my_Db_Connection is an object
try {
	$my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
	echo "Connected successfully";
} catch(\PDOException $error) {
	echo "Connection error: " . $error->getMessage();
}






















//$someAuthor = new Author(
//	"61239d23-030e-4193-8ee8-c26ee51bf112",
//	"nananananananananananananananana",
//	"https://www.mypicture.com",
//	"email05@email.com",
//	"nanananananananananananananananananananananananananananananananananananananananananananananananaa",
//	"Seymour Butts"
//);
//
//echo($someAuthor);

