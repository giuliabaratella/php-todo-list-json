<?php
// prendo i dati dal file 
$filecontent = file_get_contents("data/data.json");
// var_dump($filecontent);

// li trasformo in un array php 
$list = json_decode($filecontent, true);
// var_dump($list);




header('Content-Type: application/json');
echo json_encode($list);



?>