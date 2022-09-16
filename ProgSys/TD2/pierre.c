#include <stdio.h>

int isBissextile(int);

int main(int argc, char *argv[])
{
	int annee;
	printf("Saisir une année : ");
	scanf("%d", &annee);
	if (isBissextile(annee)) {
		printf("%d est bissextile", annee);
	} else {
		printf("%d n'est pas bissextile", annee);
	}



	return 0;
}
