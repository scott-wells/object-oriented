<?php
namespace ScottWells\ObjectOriented;

require_once("autoload.php");
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");


$someAuthor = new Author(
	"07d8eb07-6229-455c-b0c3-1f8b40b174a9",
	"https://www.author.picture.com",
	"nananananananananananananananana",
	"email05@email.com",
	"nanananananananananananananananananananananananananananananananananananananananananananananananaa",
	"Seymour Butts"
);

echo "__toString($someAuthor)";