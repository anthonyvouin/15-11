<?php



require_once("pdo.php");
require_once("Student.php");
require_once("StudentRepository.php");



$student = new Student($_POST['name'], $_POST['age']);
var_dump($_POST);

StudentRepository::addStudent($student);
