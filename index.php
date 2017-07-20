<?php
include_once 'music_db.sql';

$pdo = new PDO('mysql:host=localhost;dbname=firstdb', 'admin1', 'simplon');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stunt = $pdo->prepare('SELECT * FROM group;');
$id='';
$name='';
$start='';
$end='';
$origin='';
$stunt->bindParam('id', $id, PDO::PARAM_INT);
$stunt->bindParam('name', $name, PDO::PARAM_INT)
?>

