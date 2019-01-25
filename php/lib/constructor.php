<?php
namespace ScottWells\OOP;
//namespace Deepdivedylan\DataDesign;
require_once (dirname(__DIR__) . "/Classes/Author.php");
//require_once ("../Classes/Author.php");


$someAuthor = new Author(
	"61239d23-030e-4193-8ee8-c26ee51bf112",
	"https://www.author.picture.com",
	"nananananananananananananananana",
	"email05@email.com",
	"nanananananananananananananananananananananananananananananananananananananananananananananananaa",
	"Seymour Butts"
);

echo($someAuthor);
