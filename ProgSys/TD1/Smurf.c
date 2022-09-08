#include <stdio.h>
#include <stdlib.h>

int multiplicationDeuxTableaux(int tab1[], int tab2[])
{
	int resultat = 0;
	for (int i = 0; i < 4; i++) {
		for (int j = 0; j < 2; ++j) {
			resultat += tab1[i] * tab2[j];
		}
	}
	return resultat;
}

int main(int argc, char *argv[])
{
	int T1[] = {4, 8, 7, 12};

	int T2[] = {3, 6};

	int scalaire = multiplicationDeuxTableaux(T1, T2);

	printf("Le produit scalaire de T1 et T2 est %d", scalaire);
	return 0;
}
