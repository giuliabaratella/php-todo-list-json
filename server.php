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

if (isset($_POST["removeTask"])) {
    $taskToDelete = $_POST["removeTask"];
    array_splice($list, $taskToDelete, 1);
    file_put_contents('data/data.json', json_encode($list));
}

if (isset($_POST["modTask"])) {
    $taskToMod = $_POST["modTask"];
    if ($list[$taskToMod]['done']) {
        $list[$taskToMod]['done'] = false;
    } else {
        $list[$taskToMod]['done'] = true;
    }
    file_put_contents('data/data.json', json_encode($list));
}



header('Content-Type: application/json');
echo json_encode($list);



?>