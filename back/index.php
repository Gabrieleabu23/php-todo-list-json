<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
$list_todo = [
    [
        'name' => 'Fare la spesa',
        'fatto' => true,
    ],
    [
        'name' => "Fare l'esercizio",
        'fatto' => false,
    ],
    [
        'name' => 'Studiare',
        'fatto' => true,
    ],
    [
        'name' => 'Dormire',
        'fatto' => false,
    ],
];
header('Content-Type: application/json');

echo json_encode($list_todo);



