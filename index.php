<?php

require_once("Student.php");

$student = new Student('Nicolas', '19');

$page = file_get_contents("page.html");
$page = str_replace('$prenom', $student->Prenom, $page);
$page = str_replace('$age', $student->Age, $page);



echo $page;


?>