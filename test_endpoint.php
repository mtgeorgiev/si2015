<?php

$response = [
    'a' => 5,
    'b' => 'pet',
    'data' => $_POST,
    'message' => 'Мерси',
];

echo json_encode($response);