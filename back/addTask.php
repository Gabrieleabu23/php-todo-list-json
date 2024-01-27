<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header('Content-Type: application/json');

$list_todo = file_get_contents("todoList.json");
$data = json_decode($list_todo, true);

$text = $_GET['text'];
$newPost = [
    'name' => $text,
    'fatto' => false,
];
array_push($data,$newPost);

$list_todo = json_encode($data);
file_put_contents("todoList.json", $list_todo);
echo $list_todo;




