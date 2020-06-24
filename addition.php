<?php
$user="a3001195_stha";
$pw="Toiohomai1234";
$db="a3001195_kiran";
$connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));
$result = $connection->query("select * from pages") or die($connection->error());

?>