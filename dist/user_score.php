<?php

require('inc/config.php');

$prepare = $pdo->prepare('INSERT INTO scores (ID, name, score) VALUES (NULL, :name, :score)');

$prepare->bindValue(':name', $_POST['name']);
$prepare->bindValue(':score', $_POST['score']);

$exec = $prepare->execute();

// $change = array('name' => $_POST['name'], 'score' => $_POST['score']);
// echo json_encode($change);
