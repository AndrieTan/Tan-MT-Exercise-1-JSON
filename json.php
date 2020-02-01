<?php
include 'config.php';
include 'class.Games.php';
header('Content-Type: application/json');
$games = new Games();
$list=$games->get_Games();
echo "{\"Games\":";
echo json_encode($list);
echo "}";
?>
