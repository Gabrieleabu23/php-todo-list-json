<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header('Content-Type: application/json');

$list_todo = file_get_contents("todoList.json");
$data = json_decode($list_todo, true);

$IndiceFront = $_GET['index'];
array_splice($data,$IndiceFront,1);

$list_todo = json_encode($data);
file_put_contents("todoList.json", $list_todo);
echo $list_todo;




