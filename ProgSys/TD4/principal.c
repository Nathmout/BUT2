#include <stdio.h>
#include <stdlib.h>
#include "./include/moyenne.h"

float saisie();
float total(float,float);
void affiche(float);

/* prototype des fonctions  externes */

int main(int argc, char *argv[])
{
	float valeur = 0, chiffre;
	int i;

	printf("Nombre de valeurs : %d\n", NBVALEUR);

	for (int i = 0; i < NBVALEUR; ++i) {
		chiffre = saisie();

		valeur = total(valeur, chiffre);
	}

	affiche(valeur);

	exit(0);
}
