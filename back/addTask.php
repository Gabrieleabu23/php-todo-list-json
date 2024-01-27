<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header('Content-Type: application/json');

$list_todo = file_get_contents("todoList.json");
$data = json_decode($list_todo, true);
$text = $_GET['text'];

$done = false;

if (isset($_GET['fatto']) &&(int)$_GET['fatto'] == 1) {
    $done = true;
}
$newPost = [
    'name' => $text,
    'fatto' => $done,
];
array_push($data,$newPost);

$list_todo = json_encode($data);
file_put_contents("todoList.json", $list_todo);
echo $list_todo;




