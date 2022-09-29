<html>
<body>
   <h1>EXERCICE 1</h1>
<?php
	$valeur = rand(0, 10);
	if ($valeur % 2 == 0) {
		echo $valeur;
?>
  <p>La valeur est paire</p>
<?php
	} else {
		echo $valeur
?>
  <p>La valeur est impaire</p>
<?php
	}
?>
<h1>EXERCICE 2</h1>

<select name="" id="">
<?php
	$n = rand(5, 10);
	for ($i = 0; $i < $n; $i++) {
?>
  <option <?php if ($i == 2) { ?>selected<?php } ?>><?php echo $i ?></option>
<?php
	}
?>
</select>

  <h1>EXERCICE 3</h1>

<?php
	$n = rand(0, 10);
?>

<?php
	if ($n > 0) {
?>

<table>
<?php
		for ($i = 0; $i < $n; $i++) {
?>
    <tr>
	<td><?php echo $i ?></td>  <td><?php if ($i % 2 == 0) { echo "PAIR"; } else { echo "IMPAIR"; } ?></td>
	</tr>

<?php
		}
?>

</table>

<?php
	} else {
?>

<p>Aucune données a afficher</p>

<?php
	}
?>

<h1>EXERCICE 4</h1>

<table>
<?php
	$tab = array(
		'titre' => 'PHP Avancée',
		'vignette' => 'Z:\docs\image\oreilly.png',
		'edition' => "O'Reilly",
		'prix' => '15 $US'
	);

	foreach ($tab as $key => $value) {
		echo "<tr><td>$key</td><td>$value</td></tr>";
	}
?>
</table>


<h1>EXERCICE 5</h1>
<?php
	$chaine = 'david.durand@u-picardie.com';
	echo "taille de chaine : " . strlen($chaine) . "<br>";
	$tab = explode("@", $chaine);
	echo "utilisateur : $tab[0]  <br>";
	echo "domaine :  $tab[1] <br>";
?>

<h1>EXERCICE 6</h1>
<?php
	$file = file("url.txt");
	foreach ($file as $key => $value) {
		echo "<a href='$value'>$value</a><br>";
	}
?>

<h1>EXERCICE 7</h1>

<style>
.clair {
	background: white;
}
.sombre {
    background: black;
}
</style>
<?php
	$file = file("url.txt");
	$i = 0;
	foreach ($file as $key => $value) {
		$tab = explode("%", $value);
		if ($i % 2 == 0) {
			echo "<a href='$tab[0]' class='clair'>$tab[1]</a><br>";
		} else {
			echo "<a href='$tab[0]' class='sombre'>$tab[1]</a><br>";
		}
		$i++;
	}
?>

<h1>EXERCICE 8</h1>
<table>
<?php
	foreach ($_SERVER as $key => $value) {
		echo "<tr><td>$key</td><td>$value</td></tr>";
	}
?>
</table>

<h1>EXERCICE 9</h1>
<?php
	echo "voir en commentaire"
	/* echo mime_content_type("index.php"); */
	/* header("Content-Type: text/json"); */
?>

<h1>EXERCICE 10</h1>
<?php
	echo $_SERVER['HTTP_USER_AGENT'];
?>

</body>
</html>
