<?php
include '2048.php';

session_start();
$id = $game->sesi();
$skor = $_POST['skor'];

$game->skor($id, $skor);