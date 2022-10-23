<?php
header('Content-type:text/html;charset=utf-8');
include('../includes/pdo.php');

$db->exec('SET NAMES UTF8');
$artiste = file('artiste.csv');
$album = file('album.csv');
$genre = file('genre.csv');

foreach ($artiste as $value) {
    $artiste = explode(';', $value);
    $db->exec("INSERT INTO artiste (id,nom)
    VALUES ($artiste[0],'$artiste[1]')");
}

echo "<br>";
foreach ($album as $value) {
    $album = explode(';', $value);
    $db->exec("INSERT INTO album (id, nom, genre, artiste, date)
    VALUES ($album[0],'$album[1]',$album[2],$album[3],'$album[4]')");
}

echo "<br>";
foreach ($genre as $value) {
    $genre = explode(';', $value);
    $db->exec("INSERT INTO genre (id,nom)
    VALUES ($genre[0],'$genre[1]')");
}
