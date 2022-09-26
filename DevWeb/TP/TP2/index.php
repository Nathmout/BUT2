<?php
$db = new PDO(
    'mysql:host=localhost;port=3306;dbname=R301',
    'phpmyadmin',
    'password'
);

$db->exec('SET NAMES UTF8');

$artiste = file('artiste.csv');
$album = file('album.csv');
$genre = file('genre.csv');

foreach ($artiste as $key => $value) {
    $artiste = explode(';', $value);
    echo "key: " . $artiste[0] . "<br>";
    echo "artiste: " . $artiste[1] . "<br>";
    $db->exec("INSERT INTO artiste (id,nom) VALUES ($artiste[0],'$artiste[1]')");
}

echo "<br>";
foreach ($album as $key => $value) {
    $album = explode(';', $value);
    echo "key: " . $album[0] . "<br>";
    echo "nom: " . $album[1] . "<br>";
    echo "genre: " . $album[2] . "<br>";
    echo "artiste: " . $album[3] . "<br>";
    echo "date: " . $album[4] . "<br>";
    $db->exec("INSERT INTO album (id,nom, genre, artiste, date) VALUES ($album[0], $album[1], $album[2], $album[3], $album[4])");
}

echo "<br>";

foreach ($genre as $key => $value) {
    $genre = explode(';', $value);
    echo "key: " . $genre[0] . "<br>";
    echo "genre: " . $genre[1] . "<br>";
    $db->exec("INSERT INTO genre (id,nom) VALUES ($genre[0],$genre[1])");
}