#include <stdio.h>
#include <stdlib.h>

// valeur = 37.200000
// *pv = 37.200000
// &valeur = 0x7fff5d792a00
// pv = 0x7fff5d792a00
// *pv+1 = 38.200000

int main(int argc, char *argv[])
{
	double valeur;
	double *pv;

	valeur = 37.2;
	pv = &valeur;

	printf("valeur = %f\n", valeur);
	printf("*pv = %f\n", *pv);
	printf("&valeur = %p\n", &valeur);
	printf("pv = %p\n", pv);
	printf("*pv+1 = %f\n", *pv+1);
	return 0;
}
