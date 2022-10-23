- Exemple : 96205572,23

DATA IN :
	- STRING

DATA FRIENDLY :
	- Transformation en tableau
		- Avec sous tableau qui represente des groupes de 3 chiffres

- Exemple : 96 205 572 23

DATA PROCESS :
	- Pour chaque sous tableau :
		- Fonction qui lit les dizaines (parametre : sous tableau de 3 chiffre)
		- Fonction qui lit la centaine (parametre : sous tableau de 3 chiffre)
	- Fonction qui attribut les denomination de chaque groupe de 3 chiffre (parametre : sous tableau de 3 chiffre)

DATA OUT :
	- Afficher chaine de caractéres

# Niveau 0 : Convertir Chiffre/Nombre en € en lettre 

## Niveau 1 : Recuperer le Nombre (type on va voir) | Transformation de la données en tableau | Decomposition du nombre | Afficher chaine de caractéres

### Niveau 2 : --------- | --------- | Lecture des groupes de 3 - Attribution de la denomination de chaque groupe - | -------- 

#### Niveau 3 : -------- | ------- | Fontion qui lit les dizaines , Fonction qui lit les centaines  -  | -------
##### Niveau 4 : -------- | ------- | Ajout des "s" | -------

(global var)
	tabChifffre
	tabDizaines
	tabCEntaine
	tabDenomination

(struct)chaque groupe 3 :
	 var dizaine
	 var centaines
	 var denomination

Fonction qui lit les centaines{
	string = tabCentaines[tab[3]]
}

Fonction qui lit les dizaines{
	if (tab[0] == 0 && tab[1] != 0) => dizaine simple (10,20,30,40,50,60,70,80,90)
	switch {
		20 30 40 50 60 
	}
	switch {
		switch 10 -> cas special
		switch 70 -> cas special
		80 -> cas special
		switch 90 -> cas special
	}
	assignation du chiffre => exemple : 67 -> 7 -> sept
}

Fonction qui fait les s{
	100 prend un s si pas suivi et y'en a plusieur 
	1000 ne prend pas de s
	1000 000 000 prend un s si il est different de 1
	€ prend un s si valeur de chiffre est superieur a 1
	20 prend un s si quatre vingt est en derniere position 
}
