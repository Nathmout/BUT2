#include <stdio.h>
#include <stdlib.h>

// taille valeur : 8 octets
// taille pv : 8 octets
// taille val : 4 octets
// taille ptr : 8 octets
// car elle refere au meme pointeur

int main(int argc, char *argv[])
{
	double valeur = 65.21;
	double *pv;

	int val = 7, *ptr;

	pv = &valeur;
	ptr = &val;

	printf("taille valeur : %lu octets \n", sizeof(valeur));
	printf("taille pv : %lu octets \n", sizeof(pv));

	printf("taille val : %lu octets \n", sizeof(val));
	printf("taille ptr : %lu octets \n", sizeof(ptr));

	return 0;
}
