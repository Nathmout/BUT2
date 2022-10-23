<?php include('../includes/pdo.php');
header('Content-type:text/html;charset=utf-8');
?>

<html>
<style media="screen">
	.clair {
		background: lightgray;
	}

	.sombre {
		background: darkgray;
	}
</style>

</html>

<?php
/* EXERCICE 4 */
/* echo "<table> */
/* 	<tr> */
/* 		<th>id</th><th>nom</th><th>genre</th><th>artiste</th><th>date</th> */
/*     </tr>"; */

/*     $command = $db->query('SELECT * FROM album'); */
/* 	foreach($command as $row) */
/* 	{ */
/* 		$classe = $i ? 'clair':'sombre'; */
/* 		echo "<tr class='$classe'> */
/* 			<td>" . $row['id'] . "</td> */
/* 			<td>" . $row['nom'] . "</td> */
/* 			<td>" . $db->query("SELECT nom FROM genre WHERE id = $row[genre]")->fetchColumn() . "</td> */
/* 			<td>" . $db->query("SELECT nom FROM artiste WHERE id = $row[artiste]")->fetchColumn() . "</td> */
/* 			<td>" . $row['date'] . "</td> */
/* 			</tr>"; */

/*        $i = !$i; */
/* 	} */

/* echo "</table>"; */

echo "<table>
	<tr>
		<th>id</th><th>nom</th><th>genre</th><th>artiste</th><th>date</th>
    </tr>";

$choice = $_POST["recherche"];

$command = $db->query("SELECT * FROM album WHERE nom LIKE \"%$choice%\" ");

foreach ($command as $row) {
	$classe = $i ? 'clair' : 'sombre';
	echo "<tr class='$classe'>
			<td>" . $row['id'] . "</td>
			<td>" . $row['nom'] . "</td>
			<td>" . $db->query("SELECT nom FROM genre WHERE id = $row[genre]")->fetchColumn() . "</td>
			<td>" . $db->query("SELECT nom FROM artiste WHERE id = $row[artiste]")->fetchColumn() . "</td>
			<td>" . $row['date'] . "</td>
			</tr>";

	$i = !$i;
}

echo "</table>";

?>
