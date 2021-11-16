<?php


require_once("Student.php");
require_once("pdo.php");
require_once("StudentRepository.php");

$student = new Student('Nicolas','17');

$page = file_get_contents("page.html");
$page = str_replace('$prenom', $student->Prenom, $page);
$page = str_replace('$age', $student->Age, $page);



echo $page;

$resultats = StudentRepository::listStudent();
foreach($resultats as $resultat) {

    echo 'Prenom : ';
    echo $resultat->Prenom;
    echo " Age : ans  ";
    echo $resultat->Age;
    echo " <br> ";
 
  
}
?>