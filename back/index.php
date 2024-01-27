<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header('Content-Type: application/json');

$list_todo = file_get_contents("todoList.json");
$data = json_decode($list_todo, true);

echo json_encode($data);




