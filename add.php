<?php


require_once("Student.php");
if(!file_exists("myfile.json")){
    file_put_contents("myfile.json", json_encode([]));
};
$form = json_decode(file_get_contents("myfile.json"));

$student = new Student($_POST['name'], $_POST['age']);

array_push($form, [
    'prenom' => $student->Prenom,
    'Age' => $student->Age,
]);

$json = json_encode($form);
file_put_contents("myfile.json", $json);

?>