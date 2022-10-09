<?php
include('../include/pdo.php');

if(isset($_POST['recherche'])) {
    $recherche = $_POST['recherche'];
    $pdo = $db->prepare("SELECT * FROM album WHERE nom LIKE '%$recherche%'");
    $pdo->execute();
    $resultat = $pdo->fetchAll();
    echo "<table>";
    echo "<tr><th>id</th><th>nom</th><th>genre</th><th>artiste</th><th>date</th></tr>";
    foreach ($resultat as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $db->query("SELECT nom FROM genre WHERE id = $row[genre]")->fetchColumn() . "</td>";
        echo "<td>" . $db->query("SELECT nom FROM artiste WHERE id = $row[artiste]")->fetchColumn() . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {

    echo "<table>";
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
}
