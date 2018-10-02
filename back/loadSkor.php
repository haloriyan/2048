<?php
include '2048.php';

$load = $game->load();

foreach ($load as $row) {
	echo '<li>'.$row['name'].' <div class="skor">'.$row['skor'].'</div>';
}