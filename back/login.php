<?php
include '2048.php';

$id = rand(1, 9999);
$name = $_POST['name'];

$game->login($id, $name, 0, time());