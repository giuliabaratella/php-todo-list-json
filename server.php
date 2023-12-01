<?php
// prendo i dati dal file 
$filecontent = file_get_contents("data/data.json");
// var_dump($filecontent);

// li trasformo in un array php 
$list = json_decode($filecontent, true);
// var_dump($list);

if (isset($_POST["newTask"])) {
    $newTask = [
        "text" => $_POST["newTask"],
        "done" => false
    ];
    $list[] = $newTask;
    file_put_contents('data/data.json', json_encode($list));
}



header('Content-Type: application/json');
echo json_encode($list);



?>