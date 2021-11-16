<?php

require_once('./Student.php');
require_once('./pdo.php');

class StudentRepository
{
    public static function addStudent(Student $student){

        $query = GETPDO()->prepare("INSERT INTO students(Prenom, Age) VALUES(?,?)");
        $query->execute([
            $student->Prenom,
            $student->Age,
        ]);
    }

    public static function listStudent(){

        $list = [];
        $requete = GETPDO()->prepare("SELECT Prenom, Age FROM students");
        $requete->execute();

        $resultats = $requete->fetchAll();

        foreach($resultats as $resultat) {

            $student = new Student($resultat['Prenom'], $resultat['Age']);
            $list [] = $student;
            
            

        }
         return $list;
       
    }

}