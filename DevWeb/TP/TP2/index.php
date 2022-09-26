<?php
header('Content-type:text/html;charset=utf-8');
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
    $db->exec("INSERT INTO artiste (id,nom) 
    VALUES ($artiste[0],'$artiste[1]')");
}

echo "<br>";
foreach ($album as $key => $value) {
    $album = explode(';', $value);
    $db->exec("INSERT INTO album (id, nom, genre, artiste, date) 
    VALUES ($album[0],'$album[1]',$album[2],$album[3],'$album[4]')");
}

echo "<br>";
foreach ($genre as $key => $value) {
    $genre = explode(';', $value);
    $db->exec("INSERT INTO genre (id,nom)
    VALUES ($genre[0],'$genre[1]')");
}

echo "<table border='1'>";
echo "<tr><th>id</th><th>nom</th><th>genre</th><th>artiste</th><th>date</th></tr>";
foreach ($db->query('SELECT * FROM album') as $row) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $db->query("SELECT nom FROM genre WHERE id = $row[genre]")->fetchColumn() . "</td>";
    echo "<td>" . $db->query("SELECT nom FROM artiste WHERE id = $row[artiste]")->fetchColumn() . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "</tr>";
}
echo "</table>";