<?php

Flight::route('/', function () {
	echo 'hello world!';
});

Flight::route('/test.html', function () {
	$array = array(
		'titre' => 'Titre de test',
		'route' => 'Route de test'
	);
	Flight::render('./templates/test.tpl', $array);
});

Flight::route('/test-@params.html', function ($params) {
	$array = array(
		'titre' => 'Titre de test',
		'route' => 'Route de test',
		'params' => $params
	);
	Flight::render('./templates/test-params.tpl', $array);
});

Flight::route('/liste.html', function () {
	$album = Flight::get('pdo')->query('SELECT * from album;');

	$array = array(
		'titre' => 'Liste',
		'params' => $album
	);
	Flight::render('./templates/liste.tpl', $array);
});

/* Flight::route('/recherche-@name.html', function($name) { */
/* 	$array = array( */
/* 		'titre' => 'Titre de test', */
/* 		'params' => $name */
/* 	); */
/* 	Flight::render('./templates/liste.tpl', $array); */

/* }); */

/* Flight::route('/artiste-@id-@name.html', function($id,$name) { */
/* 	$array = array( */
/* 		'titre' => 'Titre de test', */
/* 		'params' => $id,$name */
/* 	); */
/* 	Flight::render('./templates/artiste.tpl', $array); */

/* }); */
